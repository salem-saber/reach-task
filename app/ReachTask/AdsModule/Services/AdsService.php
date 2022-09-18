<?php

namespace App\ReachTask\AdsModule\Services;

use App\ReachTask\AdsModule\Mappers\AdDTOMapper;
use App\ReachTask\AdsModule\Repository\AdsRepository;
use App\ReachTask\Base\Service;
use Illuminate\Http\Request;

class AdsService extends Service
{

    public function __construct()
    {
        $this->setRepository(new AdsRepository());
    }


    public function getAll(Request $request)
    {
        $ads = $this->getRepository()->getModel();

        if ($request->has('category')) {
            $categoryFilter = $request->get('category');
            $ads = $ads->whereHas('category', function ($query) use ($categoryFilter) {
                $query->where('title', $categoryFilter);
            });
        }

        if ($request->has('tag')) {
            $categoryFilter = $request->get('tag');
            $ads = $ads->whereHas('tags', function ($query) use ($categoryFilter) {
                $query->where('title', $categoryFilter);
            });
        }

        if ($request->has('advertiser')) {
            $categoryFilter = $request->get('advertiser');
            $ads = $ads->whereHas('advertiser', function ($query) use ($categoryFilter) {
                $query->where('name', $categoryFilter);
            });
        }


        $ads = $ads->get();
        foreach ($ads as $key => $ad) {
            $ads[$key] = (new AdDTOMapper())->map($ad);
        }

        return $ads;
    }

    public function getOne($id)
    {
        $record = $this->getRepository()->find($id);
        if ($record)
            return (new AdDTOMapper())->map($record);

        $this->setErrors('not found');
        return false;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $record = $this->getRepository()->create($data);
        if ($record) {
            $record->tags()->attach($data['tags']);
            return (new AdDTOMapper())->map($record);
        }


        $this->setErrors('error in create');
        return false;
    }


    public function update($id, Request $request)
    {
        $data = $request->all();
        $record = $this->getRepository()->update($id, $data);
        if ($record) {
            $record->tags()->sync($data['tags']);
            return (new AdDTOMapper())->map($record);
        }

        $this->setErrors('error in update');
        return false;
    }

    public function delete($id)
    {
        if ($this->getRepository()->delete($id))
            return true;

        $this->setErrors('error in delete');
        return false;
    }
}

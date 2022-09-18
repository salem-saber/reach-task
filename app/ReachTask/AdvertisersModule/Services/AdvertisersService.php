<?php

namespace App\ReachTask\AdvertisersModule\Services;

use App\ReachTask\AdsModule\Mappers\AdDTOMapper;
use App\ReachTask\Base\Service;
use App\ReachTask\AdvertisersModule\Repository\AdvertisersRepository;
use Illuminate\Http\Request;

class AdvertisersService extends Service
{

    public function __construct()
    {
       $this->setRepository(new AdvertisersRepository());
    }


    public function getAll()
    {
      return  $this->getRepository()->get();
    }

    public function getOne($id)
    {
        $record = $this->getRepository()->find($id);
        if ($record)
            return $record;

        $this->setErrors('not found');
        return false;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $record = $this->getRepository()->create($data);
        if ($record)
            return $record;

        $this->setErrors('error in create');
        return false;
    }


    public function update($id, Request $request)
    {
        $data = $request->all();
        $record = $this->getRepository()->update($id, $data);
        if ($record)
            return $record;

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

    public function advertiserAds($id)
    {
        $record = $this->getRepository()->find($id);
        if ($record){
            $ads = $record->ads()->get();
            foreach ($ads as $key => $ad) {
                $ads[$key] = (new AdDTOMapper())->map($ad);
            }

            return $ads;
        }


        $this->setErrors('not found');
        return false;
    }
}

<?php

namespace App\ReachTask\AdsModule\Mappers;

use App\ReachTask\AdsModule\DTOs\AdDTO;

class AdDTOMapper
{

    private AdDTO $DTO;

    public function __construct()
    {
        $this->DTO = new AdDTO();
    }

    public function map($data)
    {

        $this->DTO->setId($data->id);
        $this->DTO->setTitle($data->title);
        $this->DTO->setDescription($data->description);
        $this->DTO->setType($data->type);
        $this->DTO->setStartDate($data->start_date);
        $this->DTO->setAdvertiser($data->advertiser);
        $this->DTO->setCategory($data->category);
        $this->DTO->setTags($data->tags);

        return $this->DTO;
    }
}

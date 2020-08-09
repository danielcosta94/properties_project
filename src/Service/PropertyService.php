<?php

namespace App\Service;

use App\Repository\PropertyRepository;

class PropertyService
{
    /**
     * @var PropertyRepository
     */
    private $propertyRepository;

    public function __construct(PropertyRepository $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    /**
     * @return mixed
     */
    public function getAllProperties()
    {
        return $this->propertyRepository->getAllProperties();
    }

    /**
     * @param $id
     * @return array|false|int|string
     */
    public function getPropertyById($id)
    {
        return $this->propertyRepository->getPropertyById($id);
    }
}
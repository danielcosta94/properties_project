<?php

namespace App\Repository;

use Symfony\Component\HttpKernel\KernelInterface;

class PropertyRepository
{
    const FOLDER = "/public";
    const PROPERTIES_FILE = "properties-2.json";

    /**
     * @var KernelInterface
     */
    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    private function loadPropertyFile()
    {
        $url = $this->kernel->getProjectDir() . self::FOLDER . '/'. self::PROPERTIES_FILE;
        return json_decode(file_get_contents($url), true);
    }

    public function getAllProperties()
    {
        return $this->loadPropertyFile();
    }

    public function getPropertyById($id)
    {
        $data = $this->loadPropertyFile();

        if (isset($data['properties'])) {
            foreach ($data['properties'] as $property) {
                if ($property['id'] == $id) {
                    return $property;
                }
            }
        }

        return null;
    }
}

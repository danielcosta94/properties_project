<?php

namespace App\Repository;

class PropertyRepository
{
    const FOLDER = "/public";
    const PROPERTIES_FILE = "properties-2.json";

    /**
     * @var string
     */
    private $projectDir;

    public function __construct(string $projectDir)
    {
        $this->projectDir = $projectDir;
    }

    private function loadPropertyFile()
    {
        $url = $this->projectDir . self::FOLDER . '/'. self::PROPERTIES_FILE;
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

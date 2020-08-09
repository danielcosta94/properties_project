<?php

namespace App\Controller;

use App\Service\CurrencyService;
use App\Service\PropertyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    const DESTINY_CURRENCY = CurrencyService::EURO;
    /**
     * @Route("/properties", name="get_properties", methods={"GET"})
     * @param PropertyService $propertyService
     * @return Response
     */
    public function index(PropertyService $propertyService)
    {
        $properties = $propertyService->getAllProperties();

        return $this->render('properties/index.html.twig', [
            'title' => 'Properties',
            'properties' => $properties,
            'destiny_currency' => self::DESTINY_CURRENCY
        ]);
    }

    /**
     * @Route("/properties/{id}", name="get_property", methods={"GET"})
     * @param $id
     * @param PropertyService $propertyService
     * @return Response
     */
    public function show($id, PropertyService $propertyService)
    {
        $property = $propertyService->getPropertyById($id);

        return isset($property) ? $this->render('properties/show.html.twig', [
            'property' => $property,
            'destiny_currency' => self::DESTINY_CURRENCY
        ]) : $this->redirectToRoute('get_properties');
    }
}

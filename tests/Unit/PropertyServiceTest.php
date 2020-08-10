<?php

namespace App\Tests\Unit;

use App\Repository\PropertyRepository;
use App\Service\PropertyService;
use Monolog\Test\TestCase;

class PropertyServiceTest extends TestCase
{
    /**
     * @var PropertyService
     */
    private $propertyService;

    protected function setUp()
    {
        parent::setUp();
        $project_url = dirname(__DIR__, 2);
        $propertyRepository = new PropertyRepository($project_url);
        $this->propertyService = new PropertyService($propertyRepository);
    }

    public function testGetPropertyByIdWithValidId()
    {
        $property_actual = $this->propertyService->getPropertyById(88047);
        $property_expected = $this->getPropertyExpected();

        $this->assertEquals($property_expected, $property_actual);
    }

    public function testGetPropertyByIdWithInvalidId()
    {
        $property_actual = $this->propertyService->getPropertyById(523523434);
        $property_expected = null;

        $this->assertEquals($property_expected, $property_actual);
    }

    public function testGetPropertyByIdWithNullId()
    {
        $property_actual = $this->propertyService->getPropertyById(null);
        $property_expected = null;

        $this->assertEquals($property_expected, $property_actual);
    }

    private function getPropertyExpected()
    {
        return [
            "id" => 88047,
            "hbid" => 0,
            "name" => "Wombats City Hostel London",
            "starRating" => 7.343123,
            "overallRating" => [
                "overall" => 91,
                "numberOfRatings" => "7618"
            ],
            "latitude" => 51.5103383,
            "longitude" => -0.0681656,
            "isFeatured" => true,
            "type" => "HOSTEL",
            "address1" => "7 Dock Street",
            "address2" => "",
            "freeCancellationAvailable" => false,
            "freeCancellationAvailableUntil" => "2018-03-06T15:40:34+00:00",
            "district" => [
                "id" => "3",
                "name" => "London Bridge"
            ],
            "freeCancellation" => [
                "label" => "Free Cancellation rates",
                "description" => "If you cancel your booking before 23:59 ##FREECANCELLATIONBEFOREDATE## (##FREECANCELLATIONUNTILTZABBR##) your deposit will be refunded to your payment card. If you cancel after ##FREECANCELLATIONBEFOREDATE## (##FREECANCELLATIONUNTILTZABBR##) or in the event of a no-show, your deposit will not be refunded and the total of the first night's accommodation will be charged to your payment card. Please note that cancellations must be made directly within your booking in My Account."
            ],
            "lowestPricePerNight" => [
                "value" => "274.64",
                "currency" => "VEF"
            ],
            "lowestPrivatePricePerNight" => [
                "value" => "721.28",
                "currency" => "VEF"
            ],
            "lowestDormPricePerNight" => [
                "value" => "274.64",
                "currency" => "VEF"
            ],
            "lowestAveragePricePerNight" => null,
            "lowestAverageDormPricePerNight" => null,
            "lowestAveragePrivatePricePerNight" => null,
            "isNew" => false,
            "overview" => "Wombats City Hostel London is within walking distance to the Tower Bridge and features free Wifi, a courtyard, a stylish basement bar, various hangout areas,",
            "stayRuleViolations" => [
            ],
            "isElevate" => true,
            "hostelworldRecommends" => true,
            "distance" => [
                "value" => 3.57,
                "units" => "km"
            ],
            "position" => 5,
            "hwExtra" => null,
            "images" => [
                [
                    "prefix" => "ucd.hwstatic.com/propertyimages/8/88047/40",
                    "suffix" => ".jpg"
                ],
                [
                    "prefix" => "ucd.hwstatic.com/propertyimages/8/88047/41",
                    "suffix" => ".jpg"
                ],
                [
                    "prefix" => "ucd.hwstatic.com/propertyimages/8/88047/42",
                    "suffix" => ".jpg"
                ],
                [
                    "prefix" => "ucd.hwstatic.com/propertyimages/8/88047/43",
                    "suffix" => ".jpg"
                ]
            ],
            "facilities" => [
                [
                    "name" => "Free",
                    "id" => "FACILITYCATEGORYFREE",
                    "facilities" => [
                        [
                            "name" => "Linen Included",
                            "id" => "LINENINCLUDED"
                        ],
                        [
                            "name" => "Free City Maps",
                            "id" => "FREECITYMAPS"
                        ],
                        [
                            "name" => "Free WiFi",
                            "id" => "FREEWIFI"
                        ]
                    ]
                ],
                [
                    "name" => "General",
                    "id" => "FACILITYCATEGORYGENERAL",
                    "facilities" => [
                        [
                            "name" => "Security Lockers",
                            "id" => "LOCKERS"
                        ],
                        [
                            "name" => "Key Card Access",
                            "id" => "KEYCARDACCESS"
                        ],
                        [
                            "name" => "Common Room",
                            "id" => "COMMONROOM"
                        ],
                        [
                            "name" => "Elevator",
                            "id" => "ELEVATOR"
                        ],
                        [
                            "name" => "Breakfast Not Included",
                            "id" => "BREAKFASTNOTINCLUDED"
                        ],
                        [
                            "name" => "Adaptors",
                            "id" => "ADAPTORS"
                        ],
                        [
                            "name" => "Book Exchange",
                            "id" => "BOOKEXCHANGE"
                        ],
                        [
                            "name" => "Hot Showers",
                            "id" => "HOTSHOWERS"
                        ],
                        [
                            "name" => "Self-Catering Facilities",
                            "id" => "KITCHEN"
                        ],
                        [
                            "name" => "Dishwasher",
                            "id" => "DISHWASHER"
                        ],
                        [
                            "name" => "Fridge/Freezer",
                            "id" => "FRIDGEFREEZER"
                        ],
                        [
                            "name" => "Utensils",
                            "id" => "UTENSILS"
                        ],
                        [
                            "name" => "Outdoor Terrace",
                            "id" => "OUTDOORTERRACE"
                        ],
                        [
                            "name" => "Reading Light",
                            "id" => "READINGLIGHT"
                        ],
                        [
                            "name" => "Hair Dryers For Hire",
                            "id" => "HAIRDRYERSFORHIRE"
                        ],
                        [
                            "name" => "Microwave",
                            "id" => "MICROWAVE"
                        ],
                        [
                            "name" => "Washing machine",
                            "id" => "WASHINGMACHINE"
                        ]
                    ]
                ],
                [
                    "name" => "Services",
                    "id" => "FACILITYCATEGORYSERVICES",
                    "facilities" => [
                        [
                            "name" => "Laundry Facilities",
                            "id" => "LAUNDRYFACILITIES"
                        ],
                        [
                            "name" => "Towels for hire",
                            "id" => "TOWELSFORHIRE"
                        ],
                        [
                            "name" => "Luggage Storage",
                            "id" => "LUGGAGESTORAGE"
                        ],
                        [
                            "name" => "Telephone/Fax Facilities",
                            "id" => "FAXSERVICE"
                        ],
                        [
                            "name" => "24 Hour Reception",
                            "id" => "24HOURRECEPTION"
                        ],
                        [
                            "name" => "Postal Service",
                            "id" => "POSTALSERVICE"
                        ],
                        [
                            "name" => "Housekeeping",
                            "id" => "HOUSEKEEPING"
                        ]
                    ]
                ],
                [
                    "name" => "Food & Drink",
                    "id" => "FACILITYCATEGORYFOODANDDRINK",
                    "facilities" => [
                        [
                            "name" => "Bar",
                            "id" => "BAR"
                        ],
                        [
                            "name" => "Vending Machines",
                            "id" => "VENDINGMACHINES"
                        ],
                        [
                            "name" => "Tea & Coffee Making Facilities",
                            "id" => "TEACOFFEEMAKINGFACILITIES"
                        ]
                    ]
                ],
                [
                    "name" => "Entertainment",
                    "id" => "FACILITYCATEGORYENTERTAINMENT",
                    "facilities" => [
                        [
                            "name" => "Board games",
                            "id" => "BOARDGAMES"
                        ],
                        [
                            "name" => "Pool Table",
                            "id" => "POOLTABLE"
                        ],
                        [
                            "name" => "Foosball",
                            "id" => "FUSBALL"
                        ],
                        [
                            "name" => "Wi-Fi",
                            "id" => "WIFI"
                        ]
                    ]
                ]
            ]
        ];
    }

    protected function tearDown()
    {
        parent::tearDown();;
    }
}

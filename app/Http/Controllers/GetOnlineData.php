<?php

namespace App\Http\Controllers;

use App\Models\Places;

class GetOnlineData extends Controller
{
    public function storeData($overpassApiCall)
    {
        //$html = file_get_contents($overpassApiCall);

        $jayParsedAry = [
            "version" => 0.6,
            "generator" => "Overpass API 0.7.58.5 b0c4acbb",
            "osm3s" => [
                "timestamp_osm_base" => "2022-09-17T16:57:14Z",
                "copyright" => "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL."
            ],
            "elements" => [
                [
                    "type" => "node",
                    "id" => 309894643,
                    "lat" => 41.9953933,
                    "lon" => 21.4315704,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "addr:postcode" => "1000",
                        "addr:street" => "Плоштад Македонија",
                        "alt_name" => "Дал Мет Фу",
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "int_name" => "Pelister",
                        "name" => "Пелистер",
                        "name:en" => "Pelister",
                        "opening_hours" => "Mo-Th 07:00-00:00; Fr-Sa 07:00-01:00; Su 10:30-00:00",
                        "website" => "https://www.pelisterhotel.com.mk/",
                        "wheelchair" => "yes",
                        "wheelchair:description" => "Toilet not accessible"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 411006922,
                    "lat" => 41.9947432,
                    "lon" => 21.4140669,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Интермецо"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 429175192,
                    "lat" => 41.9768256,
                    "lon" => 21.4438183,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Журнал"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 445422613,
                    "lat" => 42.0072516,
                    "lon" => 21.4871217,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "steak_house",
                        "name" => "Hunter’s Lodge “Kamnik”",
                        "website" => "http://www.kamnik.com.mk/"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 459668143,
                    "lat" => 42.0047876,
                    "lon" => 21.4307036,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Под Кале"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 459668914,
                    "lat" => 41.9943261,
                    "lon" => 21.4342799,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "email" => "contact@restorangino.mk",
                        "level" => "1",
                        "name" => "Кај Џино",
                        "name:en" => "Gino",
                        "opening_hours" => "Mo 08:00-24:00, Tu,We,Fr,Sa 09:00-24:00, Th 09:00-23:00, Su 09:00-01:00",
                        "outdoor_seating" => "yes",
                        "phone" => "+389 2 3121109",
                        "sells:ice_cream" => "yes",
                        "smoking" => "outside",
                        "website" => "http://www.restorangino.mk/"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 459669063,
                    "lat" => 41.9952456,
                    "lon" => 21.4350117,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housename" => "Gradski Trgovski Centar Skopje",
                        "addr:postcode" => "1000",
                        "addr:street" => "Кеј 13 Ноември",
                        "addr:street:en" => "Kay 13th November",
                        "amenity" => "restaurant",
                        "cuisine" => "latin_american",
                        "int_name" => "Plaza de Toros",
                        "name" => "Плаза де Торос"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 481098096,
                    "lat" => 42.0031464,
                    "lon" => 21.3995191,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "name" => "Енрико"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 577538782,
                    "lat" => 42.0198926,
                    "lon" => 21.4349372,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Prince"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 600905655,
                    "lat" => 42.0028498,
                    "lon" => 21.3926682,
                    "tags" => [
                        "addr:housenumber" => "158а",
                        "addr:street" => "Хелсинки",
                        "amenity" => "restaurant",
                        "name" => "Две капки",
                        "name:en" => "Bosphorus Turkish Restaurant"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 696669231,
                    "lat" => 41.9869006,
                    "lon" => 21.4368796,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "иВ",
                        "name:en" => "iV"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 908273433,
                    "lat" => 42.0003099,
                    "lon" => 21.4367576,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "name" => "Туpиcт",
                        "name:en" => "Turist"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1092272132,
                    "lat" => 42.0064872,
                    "lon" => 21.3510028,
                    "tags" => [
                        "amenity" => "restaurant"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1371716593,
                    "lat" => 41.9979155,
                    "lon" => 21.4122694,
                    "tags" => [
                        "addr:housenumber" => "25",
                        "addr:street" => "Рузвелтова",
                        "amenity" => "restaurant",
                        "name" => "Топаз"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1372568001,
                    "lat" => 42.000855,
                    "lon" => 21.3989291,
                    "tags" => [
                        "addr:housenumber" => "14",
                        "addr:street" => "Варшавска",
                        "amenity" => "restaurant",
                        "name" => "Веки"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1378130151,
                    "lat" => 41.9841333,
                    "lon" => 21.4390455,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Чешма"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1378130158,
                    "lat" => 41.983244,
                    "lon" => 21.4391421,
                    "tags" => [
                        "amenity" => "restaurant"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1378228324,
                    "lat" => 41.9710708,
                    "lon" => 21.4455687,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Ресторан Трпеза"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1378228333,
                    "lat" => 41.9787578,
                    "lon" => 21.4385091,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Ресторан Кум"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1380378665,
                    "lat" => 41.9997295,
                    "lon" => 21.4078483,
                    "tags" => [
                        "addr:housenumber" => "6",
                        "addr:postcode" => "1000",
                        "addr:street" => "Римска",
                        "amenity" => "restaurant",
                        "cuisine" => "burger;regional;breakfast;grill;mediterranean;balkan;chicken;kebab",
                        "email" => "dinamic.ksk@gmail.com",
                        "internet_access" => "wlan",
                        "name" => "Рустикана",
                        "name:en" => "Rustikana",
                        "opening_hours" => "Mo-Su 10:00-00:00",
                        "operator" => "Saso Gligorovski Tate",
                        "phone" => "+38971383382"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1380378702,
                    "lat" => 41.9985008,
                    "lon" => 21.415982,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Боеми"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1475388232,
                    "lat" => 42.0299906,
                    "lon" => 21.3508185,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "name" => "Meraklii"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1475404511,
                    "lat" => 42.0069568,
                    "lon" => 21.3651275,
                    "tags" => [
                        "amenity" => "restaurant"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1535266560,
                    "lat" => 41.9782792,
                    "lon" => 21.4820381,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Ресторан Рагуза 919",
                        "name:en" => "Restaurant Ragusa 919"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1577483516,
                    "lat" => 42.0035286,
                    "lon" => 21.3975417,
                    "tags" => [
                        "alt_name" => "Старо буре",
                        "amenity" => "restaurant",
                        "cuisine" => "international",
                        "int_name" => "Staro Bure",
                        "name" => "Старо Буре"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1577485951,
                    "lat" => 42.0065185,
                    "lon" => 21.3741187,
                    "tags" => [
                        "alt_name" => "Кај 62",
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "int_name" => "At 62",
                        "name" => "62"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1676857177,
                    "lat" => 41.9843967,
                    "lon" => 21.4871492,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "fish",
                        "name" => "Рибен ресторан Рибар (Одисеја)"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1734530400,
                    "lat" => 42.0067805,
                    "lon" => 21.3651314,
                    "tags" => [
                        "amenity" => "restaurant"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1747649203,
                    "lat" => 41.9946274,
                    "lon" => 21.4151525,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Крчма"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1748017584,
                    "lat" => 41.9904847,
                    "lon" => 21.4204907,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "name" => "Marana",
                        "takeaway" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1751563134,
                    "lat" => 41.9947645,
                    "lon" => 21.4245254,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housenumber" => "66",
                        "addr:street" => "Булевар Климент Охридски",
                        "addr:street:en" => "Kliment Ohridski Boulevard",
                        "amenity" => "restaurant",
                        "cuisine" => "international",
                        "internet_access" => "wlan",
                        "internet_access:fee" => "no",
                        "name" => "Pastel Wine & Dine",
                        "name:en" => "Pastel Wine & Dine",
                        "opening_hours" => "Mo-Fr 06:30-21:00; Sa 06:30-17:00; Su 06:30-16:00",
                        "payment:american_express" => "no",
                        "payment:coins" => "yes",
                        "payment:maestro" => "yes",
                        "payment:mastercard" => "yes",
                        "payment:notes" => "yes",
                        "payment:visa" => "yes",
                        "payment:visa_electron" => "yes",
                        "phone" => "+389 2 3214447",
                        "smoking" => "outside",
                        "takeaway" => "yes",
                        "website" => "http://pastel.mk/",
                        "wheelchair" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1752178268,
                    "lat" => 41.9922398,
                    "lon" => 21.4163482,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "name" => "511"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1752186795,
                    "lat" => 41.9972291,
                    "lon" => 21.4086601,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Акорд",
                        "name:en" => "Acorde"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1770866402,
                    "lat" => 41.9987097,
                    "lon" => 21.4207447,
                    "tags" => [
                        "addr:housename" => "libertas",
                        "addr:postcode" => "1000",
                        "addr:street" => "T.C Bunjakovec prv kat lok 36",
                        "amenity" => "restaurant",
                        "cuisine" => "pizza",
                        "description" => "Coffee&pizza restaurant Libertas",
                        "name" => "Пицерија Либертас",
                        "phone" => "+38970567295"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1848409293,
                    "lat" => 41.9775109,
                    "lon" => 21.4456487,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Ексклузив"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1857486052,
                    "lat" => 42.0019716,
                    "lon" => 21.4647397,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "barbecue",
                        "name" => "Тица - Елени",
                        "name:en" => "Tica-Eleni"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1860123667,
                    "lat" => 42.0019424,
                    "lon" => 21.4650824,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "barbecue"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1867176020,
                    "lat" => 41.9957062,
                    "lon" => 21.4304595,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "international",
                        "int_name" => "Trend",
                        "name" => "Тренд",
                        "name:en" => "Trend",
                        "wheelchair" => "limited",
                        "wheelchair:description" => "Toilet not accessible"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1868812117,
                    "lat" => 41.9987513,
                    "lon" => 21.4204158,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:postcode" => "1000",
                        "addr:street" => "Владимир Полежановски",
                        "amenity" => "restaurant",
                        "cuisine" => "barbecue",
                        "name" => "Дестан",
                        "opening_hours" => "Mo-Su 09:00-23:00",
                        "outdoor_seating" => "yes",
                        "phone" => "+38923127324",
                        "smoking" => "separated",
                        "website" => "https://destan.mk/pocetna/"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1868812169,
                    "lat" => 42.0034064,
                    "lon" => 21.3995909,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "barbecue",
                        "name" => "Ана Кристи"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1868933572,
                    "lat" => 42.0017742,
                    "lon" => 21.3992299,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "macedonian",
                        "name" => "Фотка"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1985948203,
                    "lat" => 41.9922245,
                    "lon" => 21.416522,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "name" => "Balila"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 1999633538,
                    "lat" => 41.9913688,
                    "lon" => 21.4280088,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Бифиња - Рамстор",
                        "name:en" => "Food Court Ramstore"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2105387352,
                    "lat" => 42.0001581,
                    "lon" => 21.4252581,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housenumber" => "75",
                        "addr:street" => "Орце Николов",
                        "addr:street:en" => "Orce Nikolov",
                        "amenity" => "restaurant",
                        "int_name" => "Brukilnski",
                        "name" => "Бруклински",
                        "name:en" => "Bruklinski",
                        "outdoor_seating" => "yes",
                        "phone" => "+389 2 6091844",
                        "smoking" => "separated",
                        "wheelchair" => "limited"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2159535851,
                    "lat" => 41.9953199,
                    "lon" => 21.4347685,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housename" => "Gradski Trgovski Centar Skopje",
                        "addr:housenumber" => "2/4",
                        "addr:postcode" => "1000",
                        "addr:street" => "Кеј 13 Ноември",
                        "addr:street:en" => "Kay 13th November",
                        "amenity" => "restaurant",
                        "cuisine" => "international",
                        "name" => "Бела виста",
                        "name:en" => "Bella Vista",
                        "opening_hours" => "10:00-24:00, Fr-Sa 10:00-01:00",
                        "website" => "www.bellavistaskopje.mk"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2294320125,
                    "lat" => 41.993167,
                    "lon" => 21.4080594,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Два Елена",
                        "name:en" => "Dva Elena"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2322886873,
                    "lat" => 41.9952825,
                    "lon" => 21.4302915,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "int_name" => "Arabeska",
                        "name" => "Арабеска",
                        "name:en" => "Arabesque"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2411329687,
                    "lat" => 42.0131608,
                    "lon" => 21.4117168,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "fish",
                        "name" => "Фиш"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2580192144,
                    "lat" => 41.9650429,
                    "lon" => 21.4727082,
                    "tags" => [
                        "amenity" => "restaurant",
                        "int_name" => "Gradina",
                        "name" => "Градина",
                        "name:en" => "Gradina"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2818872887,
                    "lat" => 42.0051241,
                    "lon" => 21.4145137,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:postcode" => "1000",
                        "addr:street" => "Драган Ѓаконовски Шпато",
                        "amenity" => "restaurant",
                        "int_name" => "Sokače",
                        "name" => "Сокаче",
                        "name:en" => "Sokache",
                        "opening_hours" => "08:00 - 00:00"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 2883877896,
                    "lat" => 41.9914536,
                    "lon" => 21.4522729,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Every Day"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3101726040,
                    "lat" => 42.0000179,
                    "lon" => 21.4366005,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housename" => "Капан АН",
                        "addr:housename:en" => "Kapan AN",
                        "addr:housenumber" => "14",
                        "addr:postcode" => "1000",
                        "addr:street" => "Градиште",
                        "addr:street:en" => "Gradiste",
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "email" => "pivnicaan@yahoo.com",
                        "internet_access" => "wlan",
                        "internet_access:fee" => "no",
                        "name" => "Пивница АН",
                        "name:en" => "Beerhouse AN",
                        "opening_hours" => "Mo-Sa 09:00-24:00; Su 12:00-24:00",
                        "outdoor_seating" => "yes",
                        "payment:american_express" => "yes",
                        "payment:coins" => "yes",
                        "payment:mastercard" => "yes",
                        "payment:notes" => "yes",
                        "payment:visa" => "yes",
                        "phone" => "+389 02 321 2111",
                        "smoking" => "separated",
                        "website" => "http://pivnicaan.mk/"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3341289789,
                    "lat" => 41.9925716,
                    "lon" => 21.4297981,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "addr:postcode" => "1000",
                        "addr:street" => "Македонија",
                        "amenity" => "restaurant",
                        "name" => "Damaskino"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3484100384,
                    "lat" => 41.9917018,
                    "lon" => 21.4231542,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "amenity" => "restaurant",
                        "name" => "Dal Fufo - Galija"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3505013893,
                    "lat" => 41.9947506,
                    "lon" => 21.4319604,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:postcode" => "1000",
                        "addr:street" => "11 Октомври",
                        "addr:street:en" => "11 Oktomvri",
                        "amenity" => "restaurant",
                        "cuisine" => "kebab",
                        "name" => "Destan",
                        "opening_hours" => "08:00-23:00",
                        "outdoor_seating" => "yes",
                        "smoking" => "separated",
                        "wheelchair" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3505013993,
                    "lat" => 41.9950911,
                    "lon" => 21.4317257,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housenumber" => "2",
                        "addr:postcode" => "1000",
                        "addr:street" => "11 Октомври",
                        "addr:street:en" => "11 Oktomvri",
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "int_name" => "La Terrazza",
                        "name" => "Ла Тераца",
                        "opening_hours" => "08:00-24:00, Fr-Sa 08:00-01:00",
                        "outdoor_seating" => "yes",
                        "phone" => "+389 2 3113380",
                        "smoking" => "separated",
                        "wheelchair" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3506695093,
                    "lat" => 42.0045421,
                    "lon" => 21.3910004,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "level" => "0",
                        "name" => "Brooklyn Lounge Bar",
                        "opening_hours" => "08:00-00:00; Fr-Sa 08:00-01:00",
                        "outdoor_seating" => "yes",
                        "smoking" => "separated",
                        "wheelchair" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3536179577,
                    "lat" => 41.9953743,
                    "lon" => 21.4099065,
                    "tags" => [
                        "addr:postcode" => "1000",
                        "addr:street" => "Митрополит Теодосиј Гологанов",
                        "amenity" => "restaurant",
                        "internet_access" => "wlan",
                        "name" => "Носталгија",
                        "name:en" => "Nostalgija",
                        "phone" => "+38923060708"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3648714485,
                    "lat" => 42.0062651,
                    "lon" => 21.4063144,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:housenumber" => "18",
                        "addr:postcode" => "1000",
                        "addr:street" => "Булевар 8-ми Септември",
                        "amenity" => "restaurant",
                        "name" => "Барбакан",
                        "name:en" => "Barbakan",
                        "opening_hours" => "08:00-01:00",
                        "outdoor_seating" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3707090923,
                    "lat" => 41.997226,
                    "lon" => 21.4170693,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "name" => "Еснаф кај даре"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3830455732,
                    "lat" => 41.9824716,
                    "lon" => 21.4725098,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Pizza Amica"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3832475135,
                    "lat" => 41.9922973,
                    "lon" => 21.4427246,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Лезет"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3832475147,
                    "lat" => 41.9922032,
                    "lon" => 21.4422139,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Кај Злате"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3909066219,
                    "lat" => 42.0084895,
                    "lon" => 21.4010837,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "бед бунар"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 3951819586,
                    "lat" => 41.9748528,
                    "lon" => 21.4093282,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "regional",
                        "internet_access" => "yes",
                        "internet_access:fee" => "no",
                        "name" => "бимекс",
                        "opening_hours" => "9:00-24:00",
                        "smoking" => "no",
                        "wheelchair" => "limited"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4004645106,
                    "lat" => 41.9957324,
                    "lon" => 21.4301301,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:country" => "MK",
                        "addr:housenumber" => "3",
                        "addr:postcode" => "1000",
                        "addr:street" => "Максим Горки",
                        "addr:street:en" => "Maksim Gorki",
                        "amenity" => "restaurant",
                        "cuisine" => "chinese",
                        "email" => "reservation@pekinggarden.mk",
                        "int_name" => "Peking Garden",
                        "name" => "Пекинг Гарден",
                        "opening_hours" => "Mo-Sa 11:00-24:00; Su 12:00-23:00",
                        "phone" => "+389 2 3221173",
                        "website" => "www.pekinggarden.mk"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4016557277,
                    "lat" => 41.9856123,
                    "lon" => 21.4667276,
                    "tags" => [
                        "addr:city" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housenumber" => "71A",
                        "addr:postcode" => "1000",
                        "addr:street" => "Boulevard Jane Sandanski",
                        "amenity" => "restaurant",
                        "cuisine" => "italian",
                        "name" => "Campione lounge Bar",
                        "opening_hours" => "Mo-Su 08:00-01:00",
                        "operator" => "Campione",
                        "phone" => "+389 70 250 261"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4016557278,
                    "lat" => 41.9859376,
                    "lon" => 21.4661426,
                    "tags" => [
                        "addr:city" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housenumber" => "71A",
                        "addr:postcode" => "1000",
                        "addr:street" => "Boulevard Jane Sandanski",
                        "amenity" => "restaurant",
                        "cuisine" => "french",
                        "name" => "DejaVu Lounge",
                        "opening_hours" => "Mo-Su 08:00-01:00",
                        "operator" => "DejaVu"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4101107990,
                    "lat" => 41.9871974,
                    "lon" => 21.4365756,
                    "tags" => [
                        "addr:street" => "Јужен Булевар",
                        "amenity" => "restaurant",
                        "internet_access" => "wlan",
                        "name" => "Makedonska sofra",
                        "opening_hours" => "Mo-Sa 08:00-01:00",
                        "phone" => "+38978929010"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4126731965,
                    "lat" => 41.9973163,
                    "lon" => 21.434577,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "international",
                        "name" => "Sky ресторанот",
                        "name:en" => "Sky Restaurant",
                        "operator" => "Hotel Stone Bridge"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4149490289,
                    "lat" => 41.9933026,
                    "lon" => 21.4300742,
                    "tags" => [
                        "addr:city" => "Скопје",
                        "addr:housenumber" => "11",
                        "addr:postcode" => "1000",
                        "addr:street" => "Македонија",
                        "amenity" => "restaurant",
                        "cuisine" => "mexican",
                        "email" => "info@amigos.com.mk",
                        "name" => "Amigos Мексиканска Кантина",
                        "name:en" => "Amigos Mexican Cantina",
                        "opening_hours" => "Mo-Th 08:00-24:00, Fr,Sa 08:00-01:00, Su 10:00-24:00",
                        "outdoor_seating" => "yes",
                        "phone" => "+389 71 230314",
                        "smoking" => "outside",
                        "takeaway" => "yes",
                        "website" => "http://www.amigos.com.mk/",
                        "wheelchair" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4195733217,
                    "lat" => 41.9955972,
                    "lon" => 21.4338587,
                    "tags" => [
                        "addr:city" => "Cкoпje",
                        "addr:city:en" => "Skopje",
                        "addr:country" => "MK",
                        "addr:housename" => "Gradski Trgovski Centar Skopje",
                        "addr:postcode" => "1000",
                        "addr:street" => "Кеј 13 Ноември",
                        "addr:street:en" => "Kay 13th November",
                        "amenity" => "restaurant",
                        "cuisine" => "international",
                        "name" => "Соул кичен",
                        "name:en" => "Soul-Kitchen",
                        "operator" => "Soul-Kitchen",
                        "outdoor_seating" => "yes",
                        "smoking" => "outside"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4239053639,
                    "lat" => 42.0229923,
                    "lon" => 21.4307185,
                    "tags" => [
                        "amenity" => "restaurant",
                        "capacity" => "600",
                        "name" => "Beta"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4275843195,
                    "lat" => 41.9969599,
                    "lon" => 21.4160063,
                    "tags" => [
                        "amenity" => "restaurant",
                        "name" => "Лавче"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4302211290,
                    "lat" => 42.0030463,
                    "lon" => 21.4002154,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "fish",
                        "name" => "Бабе"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4318400296,
                    "lat" => 41.9915744,
                    "lon" => 21.4655483,
                    "tags" => [
                        "addr:housenumber" => "24",
                        "addr:street" => "Булевар АСНОМ",
                        "amenity" => "restaurant",
                        "name" => "Златна вилушка"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4327921318,
                    "lat" => 42.0034137,
                    "lon" => 21.3986642,
                    "tags" => [
                        "amenity" => "restaurant",
                        "cuisine" => "thai",
                        "name" => "Thong Thai",
                        "opening_hours" => "Sa-Su 10:00-01:00",
                        "operator" => "Thong Thai",
                        "payment:debit_cards" => "no",
                        "phone" => "+38971661234",
                        "smoking" => "outside",
                        "takeaway" => "yes"
                    ]
                ],
                [
                    "type" => "node",
                    "id" => 4346542839,
                    "lat" => 41.9927317,
                    "lon" => 21.4301208,
                    "tags" => [
                        "amenity" => "restaurant",
                        "internet_access" => "wlan",
                        "name" => "Lounge Bar & Restaurant Square 21"
                    ]
                ]
            ],
            [
                "type" => "node",
                "id" => 4355675606,
                "lat" => 41.9788465,
                "lon" => 21.4826074,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Ресторан Златник"
                ]
            ],
            [
                "type" => "node",
                "id" => 4406532855,
                "lat" => 41.9953546,
                "lon" => 21.3679919,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "local",
                    "name" => "Вила Веранда",
                    "name:en" => "Vila Veranda",
                    "smoking" => "outside"
                ]
            ],
            [
                "type" => "node",
                "id" => 4407370494,
                "lat" => 41.9883207,
                "lon" => 21.4520843,
                "tags" => [
                    "amenity" => "restaurant",
                    "internet_access" => "wlan",
                    "name" => "еквестријан",
                    "name:en" => "equestrian",
                    "name:mk" => "еквестријан"
                ]
            ],
            [
                "type" => "node",
                "id" => 4436518191,
                "lat" => 41.9996618,
                "lon" => 21.4362461,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Kaj Serdarot",
                    "name:mk" => "Kaj Cerdarot"
                ]
            ],
            [
                "type" => "node",
                "id" => 4436534289,
                "lat" => 41.9996701,
                "lon" => 21.436081,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Destan",
                    "name:mk" => "Destan"
                ]
            ],
            [
                "type" => "node",
                "id" => 4436534489,
                "lat" => 41.9994953,
                "lon" => 21.4355402,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Австриска палта",
                    "name:en" => "Austrian Palace",
                    "name:mk" => "Austrian Palace"
                ]
            ],
            [
                "type" => "node",
                "id" => 4459578969,
                "lat" => 41.9949989,
                "lon" => 21.4355402,
                "tags" => [
                    "addr:city" => "Cкoпje",
                    "addr:city:en" => "Skopje",
                    "addr:country" => "MK",
                    "addr:housename" => "Gradski Trgovski Centar Skopje",
                    "addr:postcode" => "1000",
                    "addr:street" => "Кеј 13 Ноември",
                    "addr:street:en" => "Kay 13th November",
                    "amenity" => "restaurant",
                    "cuisine" => "international",
                    "int_name" => "Amica",
                    "level" => "1",
                    "name" => "Амика"
                ]
            ],
            [
                "type" => "node",
                "id" => 4471884330,
                "lat" => 42.0059792,
                "lon" => 21.427293,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "international;italian;fish",
                    "internet_access" => "wlan",
                    "internet_access:fee" => "no",
                    "name" => "Four",
                    "operator" => "Hotel Park Spa",
                    "outdoor_seating" => "yes",
                    "smoking" => "outside"
                ]
            ],
            [
                "type" => "node",
                "id" => 4481662566,
                "lat" => 41.995703,
                "lon" => 21.4335119,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "italian",
                    "int_name" => "Dion",
                    "name" => "Дион"
                ]
            ],
            [
                "type" => "node",
                "id" => 4491144570,
                "lat" => 42.0045887,
                "lon" => 21.3936186,
                "tags" => [
                    "addr:city" => "Cкoпje",
                    "addr:postcode" => "1000",
                    "addr:street" => "Никола Русински",
                    "air_conditioning" => "yes",
                    "amenity" => "restaurant",
                    "cuisine" => "regional;international;barbecue",
                    "image" => "https://scontent.fskp2-1.fna.fbcdn.net/v/t1.6435-9/254432038_112012584617159_9006799328489950254_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=hMgZ3S6wc48AX_KXprI&_nc_ht=scontent.fskp2-1.fna&oh=42c7afe4f9d7cb3a15bb41cb20cafc03&oe=61AE29FC",
                    "internet_access" => "wlan",
                    "name" => "Ресторан Буре Срна",
                    "name:en" => "Restaurant Bure Srna",
                    "opening_hours" => "Mo-Su 08:00-00:00",
                    "opening_hours:covid19" => "same",
                    "outdoor_seating" => "yes",
                    "phone" => "+38923066676",
                    "reservation" => "yes",
                    "smoking" => "outside",
                    "start_date" => "2000",
                    "takeaway" => "yes",
                    "website" => "https://buresrna.mk/"
                ]
            ],
            [
                "type" => "node",
                "id" => 4531682389,
                "lat" => 41.9959806,
                "lon" => 21.4021635,
                "tags" => [
                    "addr:housenumber" => "63",
                    "addr:postcode" => "1000",
                    "addr:street" => "Митрополит Теодосиј Гологанов",
                    "amenity" => "restaurant",
                    "cuisine" => "burger;regional;ice_cream;grill;crepe;coffee_shop;balkan;pancake;chicken;diner;fish;breakfast;tea;sausage;local;fine_dining;kebab;barbecue",
                    "email" => "contact@makedonskakuka.com",
                    "internet_access" => "wlan",
                    "name" => "Македонска куќа",
                    "name:en" => "Macedonian House Restaurant",
                    "opening_hours" => "Mo-Su 08:00-00:00",
                    "operator" => "Kiro Ilijeski -Kambero",
                    "phone" => "+38923296415",
                    "website" => "http://www.makedonskakuka.com"
                ]
            ],
            [
                "type" => "node",
                "id" => 4552084306,
                "lat" => 42.0030521,
                "lon" => 21.4648097,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "regional",
                    "name" => "Кај Тоше на Ќоше"
                ]
            ],
            [
                "type" => "node",
                "id" => 4720703993,
                "lat" => 41.9978436,
                "lon" => 21.4600445,
                "tags" => [
                    "addr:postcode" => "1000",
                    "amenity" => "restaurant",
                    "name" => "Dojrana Skopje",
                    "name:mk" => "Дојрана"
                ]
            ],
            [
                "type" => "node",
                "id" => 4935294926,
                "lat" => 42.0123976,
                "lon" => 21.4451457,
                "tags" => [
                    "amenity" => "restaurant"
                ]
            ],
            [
                "type" => "node",
                "id" => 4976334922,
                "lat" => 41.9913259,
                "lon" => 21.4640869,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Т'га за југ",
                    "name:en" => "T'ga za jug",
                    "name:mk" => "Т'га за југ"
                ]
            ],
            [
                "type" => "node",
                "id" => 4982232721,
                "lat" => 41.9988648,
                "lon" => 21.4238693,
                "tags" => [
                    "amenity" => "restaurant",
                    "diet:vegan" => "yes",
                    "name:en" => "BistRaw",
                    "opening_hours" => "Mo-Fr 12:00-20:00"
                ]
            ],
            [
                "type" => "node",
                "id" => 4990142138,
                "lat" => 42.0195979,
                "lon" => 21.4412533,
                "tags" => [
                    "addr:housenumber" => "1",
                    "addr:street" => "Ресенска",
                    "amenity" => "restaurant",
                    "name" => "Бизнис",
                    "name:mk" => "Бизнис"
                ]
            ],
            [
                "type" => "node",
                "id" => 5019758021,
                "lat" => 42.0039853,
                "lon" => 21.4280925,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Парк",
                    "name:en" => "Park"
                ]
            ],
            [
                "type" => "node",
                "id" => 5033108253,
                "lat" => 42.0005946,
                "lon" => 21.4191901,
                "tags" => [
                    "addr:city" => "Cкoпje",
                    "addr:housenumber" => "4",
                    "addr:postcode" => "1000",
                    "addr:street" => "Радњанска",
                    "amenity" => "restaurant",
                    "capacity" => "100",
                    "cuisine" => "burger;coffee_shop;sandwich;ice_cream",
                    "name" => "Кантина",
                    "opening_hours" => "Monday- Satudray 09:00-24:00",
                    "outdoor_seating" => "yes",
                    "smoking" => "outside",
                    "takeaway" => "yes"
                ]
            ],
            [
                "type" => "node",
                "id" => 5072397092,
                "lat" => 41.9914306,
                "lon" => 21.4633394,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Пицерија Фамилија",
                    "name:en" => "Pizza Familija"
                ]
            ],
            [
                "type" => "node",
                "id" => 5131832941,
                "lat" => 41.9948293,
                "lon" => 21.4276093,
                "tags" => [
                    "addr:city" => "Cкoпje",
                    "addr:housenumber" => "7",
                    "addr:postcode" => "1000",
                    "addr:street" => "Даме Груев",
                    "amenity" => "restaurant",
                    "cuisine" => "grill",
                    "email" => "info@7.mk",
                    "name" => "7 Скара Ресторан",
                    "name:en" => "7 Grill Restaurant",
                    "opening_hours" => "Mo-Th 08:00-24:00; Sa 08:00-01:00",
                    "outdoor_seating" => "yes",
                    "phone" => "+38923224000",
                    "takeaway" => "yes",
                    "website" => "http://7.mk/skara-restoran/"
                ]
            ],
            [
                "type" => "node",
                "id" => 5160613722,
                "lat" => 41.9899769,
                "lon" => 21.4492023,
                "tags" => [
                    "addr:city" => "Cкoпje",
                    "addr:housenumber" => "15",
                    "addr:postcode" => "1000",
                    "addr:street" => "Булевар Кузман Јосифовски Питу",
                    "amenity" => "restaurant",
                    "internet_access" => "wlan",
                    "name" => "Мезе Бар",
                    "name:en" => "Meze Bar",
                    "opening_hours" => "Fr-Su 08:00-01:00; Su 08:00-17:00; Mo-Th 08:00-00:00",
                    "opening_hours:covid19" => "same",
                    "phone" => "+38926121214",
                    "website" => "https://www.facebook.com/mezebarskopjanka/"
                ]
            ],
            [
                "type" => "node",
                "id" => 5184727125,
                "lat" => 42.0084679,
                "lon" => 21.3678533,
                "tags" => [
                    "addr:housenumber" => "2",
                    "addr:postcode" => "1000",
                    "addr:street" => "Булевар Ѓорче Петров",
                    "amenity" => "restaurant",
                    "internet_access" => "wlan",
                    "name" => "Ubac",
                    "phone" => "+38972555005"
                ]
            ],
            [
                "type" => "node",
                "id" => 5224224121,
                "lat" => 41.9916485,
                "lon" => 21.4223088,
                "tags" => [
                    "addr:postcode" => "1000",
                    "amenity" => "restaurant",
                    "email" => "ristovskidac@yahoo.com",
                    "internet_access" => "wlan",
                    "name" => "Gostilnica Gurman",
                    "name:en" => "guest house Gurman",
                    "opening_hours" => "Mo-Su 07:00-22:00",
                    "phone" => "+38923176200"
                ]
            ],
            [
                "type" => "node",
                "id" => 5246219203,
                "lat" => 41.9868025,
                "lon" => 21.4193986,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "macedonian",
                    "name" => "Баба Цана",
                    "name:en" => "Baba Cana"
                ]
            ],
            [
                "type" => "node",
                "id" => 5268700370,
                "lat" => 42.0044372,
                "lon" => 21.3931934,
                "tags" => [
                    "addr:city" => "Cкoпje",
                    "addr:housenumber" => "15",
                    "addr:postcode" => "1000",
                    "addr:street" => "Никола Русински",
                    "amenity" => "restaurant",
                    "cuisine" => "pizza",
                    "delivery" => "yes",
                    "name" => "Pizza Jakomo",
                    "outdoor_seating" => "yes",
                    "phone" => "+37976338668;+38978338668",
                    "website" => "http://www.pizzajakomo.com/"
                ]
            ],
            [
                "type" => "node",
                "id" => 5289706561,
                "lat" => 41.9913338,
                "lon" => 21.4276864,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Star Ocean"
                ]
            ],
            [
                "type" => "node",
                "id" => 5292130848,
                "lat" => 42.0005187,
                "lon" => 21.4149006,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Fitness house"
                ]
            ],
            [
                "type" => "node",
                "id" => 5467884712,
                "lat" => 41.9837709,
                "lon" => 21.4808444,
                "tags" => [
                    "amenity" => "restaurant",
                    "delivery" => "yes",
                    "name" => "Segreto Plus"
                ]
            ],
            [
                "type" => "node",
                "id" => 5548809221,
                "lat" => 41.9995926,
                "lon" => 21.4366123,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "local;barbecue",
                    "name" => "кај сердарот",
                    "name:en" => "Kaj Serdarot",
                    "outdoor_seating" => "yes"
                ]
            ],
            [
                "type" => "node",
                "id" => 5561692079,
                "lat" => 41.9729164,
                "lon" => 21.4565032,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Тарапана"
                ]
            ],
            [
                "type" => "node",
                "id" => 5572053321,
                "lat" => 42.0013292,
                "lon" => 21.4205747,
                "tags" => [
                    "addr:postcode" => "1000",
                    "addr:street" => "Живко Чинго",
                    "amenity" => "restaurant",
                    "cuisine" => "chicken;diner;beef_bowl;american;ice_cream;local;tea;pizza;burger;cake;pasta;french;italian_pizza;seafood;crepe;pancake;sandwich;coffee_shop;balkan;mediterranean;croatian;fish;kebab;breakfast;grill",
                    "diet:vegan" => "yes",
                    "internet_access" => "wlan",
                    "name" => "Дебар Маало",
                    "name:en" => "Debar Maalo",
                    "opening_hours" => "Su-Th 08:00-00:30; Fr-Sa 08:00-01:00",
                    "phone" => "+38976219654"
                ]
            ],
            [
                "type" => "node",
                "id" => 5624670966,
                "lat" => 42.0023813,
                "lon" => 21.4235595,
                "tags" => [
                    "addr:housenumber" => "80",
                    "addr:postcode" => "1000",
                    "addr:street" => "Булевар Илинден",
                    "amenity" => "restaurant",
                    "cuisine" => "balkan",
                    "email" => "mezebarmcm@gmail.com",
                    "internet_access" => "wlan",
                    "name" => "МЦМ Мезе Бар",
                    "name:en" => "MCM Meze Bar",
                    "opening_hours" => "24/7",
                    "phone" => "+38970250420"
                ]
            ],
            [
                "type" => "node",
                "id" => 5624682355,
                "lat" => 42.0028235,
                "lon" => 21.4239655,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Костарика",
                    "name:en" => "Kostarika"
                ]
            ],
            [
                "type" => "node",
                "id" => 5624682356,
                "lat" => 42.003366,
                "lon" => 21.4242333,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Калабалак",
                    "name:en" => "Kalabalak",
                    "old_name" => "Скала"
                ]
            ],
            [
                "type" => "node",
                "id" => 5624682357,
                "lat" => 42.0028813,
                "lon" => 21.4240111,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Старо Скупи",
                    "name:en" => "Staro Skupi"
                ]
            ],
            [
                "type" => "node",
                "id" => 5624682358,
                "lat" => 42.0030128,
                "lon" => 21.4240218,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "pizza",
                    "name" => "Занзибар",
                    "name:en" => "Zanzibar"
                ]
            ],
            [
                "type" => "node",
                "id" => 5626432520,
                "lat" => 42.0013712,
                "lon" => 21.4210921,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Идадија",
                    "name:en" => "Idadija"
                ]
            ],
            [
                "type" => "node",
                "id" => 5626433431,
                "lat" => 42.001453,
                "lon" => 21.4214837,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Наџак",
                    "name:en" => "Nadzak"
                ]
            ],
            [
                "type" => "node",
                "id" => 5626433457,
                "lat" => 42.0010941,
                "lon" => 21.4206632,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Zing",
                    "name:en" => "Fruti Di Mare"
                ]
            ],
            [
                "type" => "node",
                "id" => 5626433480,
                "lat" => 42.0007591,
                "lon" => 21.420049,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Дебар Маало",
                    "name:en" => "Gostilnica Ilinden"
                ]
            ],
            [
                "type" => "node",
                "id" => 5626433502,
                "lat" => 42.0014888,
                "lon" => 21.4208615,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Кај Перо",
                    "name:en" => "Kaj Pero"
                ]
            ],
            [
                "type" => "node",
                "id" => 5692608680,
                "lat" => 41.9990664,
                "lon" => 21.4236496,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "kebab",
                    "name" => "Gostilnica Estel",
                    "operator" => "Estel",
                    "outdoor_seating" => "yes"
                ]
            ],
            [
                "type" => "node",
                "id" => 5770427174,
                "lat" => 42.0063483,
                "lon" => 21.3740403,
                "tags" => [
                    "amenity" => "restaurant",
                    "name" => "Aleksandrija"
                ]
            ],
            [
                "type" => "node",
                "id" => 5789449053,
                "lat" => 41.9995917,
                "lon" => 21.4361151,
                "tags" => [
                    "amenity" => "restaurant",
                    "cuisine" => "local",
                    "internet_access" => "wlan",
                    "name" => "СНОШТИ МИНАВ",
                    "name:en" => "SNOSTI MINAV"
                ]
            ],
        ];


        //$result = json_decode($jayParsedAry, true);
        $data = $jayParsedAry['elements'];

        foreach ($data as $row) {
            $placeToAdd = new Places();

            $placeToAdd->lat = $row["lat"];
            $placeToAdd->lon = $row["lon"];
            if (isset($row["tags"]["name"]) && isset($row["tags"]["amenity"])) {
                $placeToAdd->amenity = $row["tags"]["amenity"];
            }
            if (isset($row["tags"]["name"])) {
                $placeToAdd->name = $row["tags"]["name"];
            } else {
                $placeToAdd->name = "";
            }

            if (isset($row["tags"]["name:en"])) {
                $placeToAdd->name_en = $row["tags"]["name:en"];
            } else {
                $placeToAdd->name_en = "";
            }

            if (isset($row["tags"]["name:mk"])) {
                $placeToAdd->name_mk = $row["tags"]["name:mk"];
            } else {
                $placeToAdd->name_mk = "";
            }

            if (isset($row["tags"]["website"])) {
                $placeToAdd->website = $row["tags"]["website"];
            } else {
                $placeToAdd->website = "";
            }

            $placeToAdd->save();
        }
    }

    public function getData()
    {
        /*$overpassApiCall = 'https://overpass-api.de/api/interpreter?data=[out:json];area(41.951830611989124,21.35467529296875,42.04113400940807,21.51947021484375)->.searchArea;(node["amenity"="restaurant"](area.searchArea););out;';
        $this->storeData($overpassApiCall);

        $overpassApiCall = 'https://overpass-api.de/api/interpreter?data=[out:json];area(41.951830611989124,21.35467529296875,42.04113400940807,21.51947021484375)->.searchArea;(node["amenity"="pub"](area.searchArea););out;';
        $this->storeData($overpassApiCall);

        $overpassApiCall = 'https://overpass-api.de/api/interpreter?data=[out:json];area(41.951830611989124,21.35467529296875,42.04113400940807,21.51947021484375)->.searchArea;(node["amenity"="cafe"](area.searchArea););out;';
        $this->storeData($overpassApiCall);

        $overpassApiCall = 'https://overpass-api.de/api/interpreter?data=[out:json];area(41.951830611989124,21.35467529296875,42.04113400940807,21.51947021484375)->.searchArea;(node["amenity"="bar"](area.searchArea););out;';
        $this->storeData($overpassApiCall);
        */

        $overpassApiCall = 'https://overpass-api.de/api/interpreter?data=[out:json];area(41.951830611989124,21.35467529296875,42.04113400940807,21.51947021484375)->.searchArea;(node["amenity"="nightclub"](area.searchArea););out;';
        $this->storeData($overpassApiCall);

        $overpassApiCall = 'https://overpass-api.de/api/interpreter?data=[out:json];area(41.951830611989124,21.35467529296875,42.04113400940807,21.51947021484375)->.searchArea;(node["amenity"="cinema"](area.searchArea););out;';
        $this->storeData($overpassApiCall);
    }
}

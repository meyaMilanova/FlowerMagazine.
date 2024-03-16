<?php
/**
 * @return array
 */
function getFlowers()
{
    return [
        [
            "id" => 0,
            "name" => "Pansy",
            "image" => "Pansy.jpg",

        ],
        [
            "id" => 1,
            "name" => "Anemone",
            "image" => "Anemone.jpg",
        ],
        [
            "id" => 2,
            "name" => "Carnation",
            "image" => "Carnaton.jpg",
        ],
        [
            "id" => 3,
            "name" => "Forget met not",
            "image" => "Forget Me Not.jpg",
        ],
        [
            "id" => 4,
            "name" => "Garden Rose",
            "image" => "Garden Rose.jpg",
        ],
        [
            "id" => 5,
            "name" => "Hibiscus",
            "image" => "Hibiscus.jpg",
        ],
        [
            "id" => 6,
            "name" => "Iris",
            "image" => "Iris.jpg",
        ],
        [
            "id" => 7,
            "name" => "Lily",
            "image" => "Lily.jpg",
        ],
        [
            "id" => 8,
            "name" => "Orchid",
            "image" => "Orchid.jpg",
        ],
        [
            "id" => 9,
            "name" => "Peony",
            "image" => "Peony.jpg",
        ],
        [
            "id" => 10,
            "name" => "Poppy",
            "image" => "Poppy.jpg",
        ],
        [
            "id" => 11,
            "name" => "Snow Drop",
            "image" => "Snow Drop.jpg",
        ],
        [
            "id" => 12,
            "name" => "Tulip",
            "image" => "Tulip.jpg",
        ],
        [
            "id" => 13,
            "name" => "Daisy",
            "image" => "Daisy.jpg"
        ],
        [
            "id" => 14,
            "name" => "Sunflower",
            "image" => "Sunflower.jpg"
        ],
        [
            "id" => 15,
            "name" => "Rose",
            "image" => "Rose.jpg"
        ],
        [
            "id" => 16,
            "name" => "Lavender",
            "image" => "Lavender.jpg"
        ],
        [
            "id" => 17,
            "name" => "Daffodil",
            "image" => "Daffodil.jpg"
        ],
        [
            "id" => 18,
            "name" => "Hydrangea",
            "image" => "Hydrangea.jpg"
        ],
        [
            "id" => 19,
            "name" => "Tiger Lily",
            "image" => "Tiger Lily.jpg"
        ],
        [
            "id" => 20,
            "name" => "Baby Breath",
            "image" => "Baby Breath.jpg"
        ],
        [
            "id" => 21,
            "name" => "Dahlia",
            "image" => "Dahlia.jpg"
        ],
        [
            "id" => 22,
            "name" => "Magnolia",
            "image" => "Magnolia.jpg"
        ],
        [
            "id" => 23,
            "name" => "Bougainvillea",
            "image" => "Bougainvillea.jpg"
        ],
        [
            "id" => 24,
            "name" => "Crocus",
            "image" => "Crocus.jpg"
        ],
        [
            "id" => 25,
            "name" => "Bluebell",
            "image" => "Bluebell.jpg"
        ],
        [
            "id" => 26,
            "name" => "Chrysanthemum",
            "image" => "Crysanthemum.jpg"
        ],
        [
            "id" => 27,
            "name" => "Foxglove",
            "image" => "Foxglove.jpg"
        ],
        [
            "id" => 28,
            "name" => "Morning Glory",
            "image" => "Morning Glory.jpg"
        ],
        [
            "id" => 29,
            "name" => "Aster",
            "image" => "Aster.jpg"
        ],
        [
            "id" => 30,
            "name" => "Sweet Pea",
            "image" => "Sweet Pea.jpg"
        ],
        [
            "id" => 31,
            "name" => "Alstroemeria",
            "image" => "Alstroemeria.jpg",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getFlowerDetails($id)
{
    $details = [
        0 => [
            "names" => "Pansy",
            "common_colour" => ["Purple", "Yellow", "White", "Red", "Orange", "Blue"],
            "uncommon_colour" => ["Black"],
            "life_span" => "Annual or Perennial, depending on the variety",
            "native" => ["Europe", "Asia", "North America"],
            "average_size" => "6 to 9 inches tall"
        ],
        1 => [
            "names" => "Anemone",
            "common_colour" => ['White', 'Pink', 'Purple'],
            "uncommon_colour" => ['Red', 'Blue'],
            "life_span" => "Perennial",
            "native" => ['Europe', 'Asia', 'North America'],
            "average_size" => "6 to 12 inches tall",
        ],
        2 => [
            "names" => "Carnation",
            "common_colour" => ['Pink', 'Red', 'White'],
            "uncommon_colour" => ['Yellow', 'Green', 'Purple'],
            "life_span" => "Perennial",
            "native" => ['Mediterranean region'],
            "average_size" => "12 to 24 inches tall",
        ],
        3 => [
            "names" => "Forget met not",
            "common_colour" => ['Blue'],
            "uncommon_colour" => ['White', 'Pink'],
            "life_span" => "Annual or perennial, depending on the species",
            "native" => ['Europe', 'Asia'],
            "average_size" => "6 to 12 inches tall",
        ],
        4 => [
            "names" => "Garden Rose",
            "common_colour" => ['Red', 'Pink', 'White'],
            "uncommon_colour" => ['Yellow', 'Peach', 'Lavender'],
            "life_span" => "Perennial",
            "native" => ['Various regions worldwide'],
            "average_size" => "Varies greatly depending o the variety",
        ],
        5 => [
            "names" => "Hibiscus",
            "common_colour" => ['Red', 'Pink', 'White'],
            "uncommon_colour" => ['Yellow', 'Orange', 'Purple'],
            "life_span" => "Perennial",
            "native" => ['Tropical and subtropical regions worldwide'],
            "average_size" => "3 to 8 feet tall",
        ],
        6 => [
            "names" => "Iris",
            "common_colour" => ['Blue', 'Purple', 'White'],
            "uncommon_colour" => ['Yellow', 'Orange', 'Pink'],
            "life_span" => "Perennial",
            "native" => ['Europe', 'Asia', 'North America'],
            "average_size" => "1 to 3 feet tall",
        ],
        7 => [
            "names" => "Lily",
            "common_colour" => ['Yellow', 'Pink', 'White'],
            "uncommon_colour" => ['Red', 'Orange', 'Purple'],
            "life_span" => "Perennial",
            "native" => ['Various regions worldwide'],
            "average_size" => "2 to 6 feet tall",
        ],
        8 => [
            "names" => "Orchid",
            "common_colour" => ['Purple', 'Pink', 'White'],
            "uncommon_colour" => ['Blue', 'Yellow', 'Green'],
            "life_span" => "Perennial",
            "native" => ['Various regions worldwide'],
            "average_size" => "Varies greatly depending o the variety",
        ],
        9 => [
            "names" => "Peony",
            "common_colour" => ['Red', 'Pink', 'White'],
            "uncommon_colour" => ['Coral', 'Yellow'],
            "life_span" => "Perennial",
            "native" => ['Asia', 'Europe', 'Western North America'],
            "average_size" => "1.5 to 3 feet tall",
        ],
        10 => [
            "names" => "Poppy",
            "common_colour" => ['Red', 'Orange', 'Yellow'],
            "uncommon_colour" => ['White', 'Pink', 'Purple'],
            "life_span" => "Annual or perennial, depending on the species",
            "native" => ['Various regions worldwide'],
            "average_size" => "Varies greatly depending o the variety",
        ],
        11 => [
            "names" => "Snow Drop",
            "common_colour" => ['White'],
            "uncommon_colour" => ['Green'],
            "life_span" => "Perennial",
            "native" => ['Europe', 'Asia'],
            "average_size" => "3 to 6 inches tall",
        ],
        12 => [
            "names" => "Tulip",
            "common_colour" => ['Red', 'Yellow', 'White'],
            "uncommon_colour" => ['Pink', 'Purple', 'Orange'],
            "life_span" => "Perennial",
            "native" => ['Europe', 'Asia', 'Africa'],
            "average_size" => "6 to 18 inches tall",
        ],
        13 => [
            "names" => "Daisy",
            "common_colour" => ['White', 'Yellow'],
            "uncommon_colour" => ['Orange', 'Pink'],
            "life_span" => "Annual",
            "native" => ['Europe', 'North America'],
            "average_size" => "6 to 12 inches tall",
        ],
        14 => [
            "names" => "Sunflower",
            "common_colour" => ['Yellow'],
            "uncommon_colour" => ['Brown'],
            "life_span" => "Annual",
            "native" => ['North America'],
            "average_size" => "2 to 10 feet tall",
        ],
        15 => [
            "names" => "Rose",
            "common_colour" => ['Red', 'Pink', 'White'],
            "uncommon_colour" => ['Yellow', 'Orange', 'Purple'],
            "life_span" => "Perennial",
            "native" => ['Various regions worldwide'],
            "average_size" => "2 to 10 feet tall",
        ],
        16 => [
            "names" => "Lavender",
            "common_colour" => ['Purple', 'Blue'],
            "uncommon_colour" => ['White', 'Pink'],
            "life_span" => "Perennial",
            "native" => ['Mediterranean region', 'Asia'],
            "average_size" => "1 to 3 feet tall",
        ],
        17 => [
            "names" => "Daffodil",
            "common_colour" => ['Yellow', 'White'],
            "uncommon_colour" => ['Orange', 'Pink'],
            "life_span" => "Perennial",
            "native" => ['Europe', 'North America'],
            "average_size" => "1 to 2 feet tall",
        ],
        18 => [
            "names" => "Hydrangea",
            "common_colour" => ['Blue', 'Pink', 'White'],
            "uncommon_colour" => ['Purple', 'Green'],
            "life_span" => "Perennial",
            "native" => ['Asia'],
            "average_size" => "2 to 6 feet tall",
        ],
        19 => [
            "names" => "Tiger Lily",
            "common_colour" => ['Orange', 'Yellow'],
            "uncommon_colour" => ['Black', 'White'],
            "life_span" => "Perennial",
            "native" => ['Asia'],
            "average_size" => "3 to 5 feet tall",
        ],
        20 => [
            "names" => "Baby Breath",
            "common_colour" => ['White'],
            "uncommon_colour" => [],
            "life_span" => "Annual or perennial, depending on the species",
            "native" => ['Europe', 'Asia'],
            "average_size" => "1 to 3 feet tall",
        ],
        21 => [
            "names" => "Dahlia",
            "common_colour" => ['Red', 'Pink', 'White'],
            "uncommon_colour" => ['Yellow', 'Orange'],
            "life_span" => "Annual or perennial",
            "native" => ['Central America', 'North America'],
            "average_size" => "1 to 5 feet tall",
        ],
        22 => [
            "names" => "Magnolia",
            "common_colour" => ['Pink', 'Purple', 'White'],
            "uncommon_colour" => ['Yellow'],
            "life_span" => "Perennial",
            "native" => ['North and Central America'],
            "average_size" => "20 to 30 feet tall",
        ],
        23 => [
            "names" => "Bougainvillea",
            "common_colour" => ['Pink', 'Red', 'Purple'],
            "uncommon_colour" => ['White'],
            "life_span" => "Perennial",
            "native" => ['South America'],
            "average_size" => "10 to 30 feet tall",
        ],
        24 => [
            "names" => "Crocus",
            "common_colour" => ['Yellow', 'Purple', 'White'],
            "uncommon_colour" => ['Red'],
            "life_span" => "Perennial",
            "native" => ['Asia', 'Europe'],
            "average_size" => "2 to 6 inches tall",
        ],
        25 => [
            "names" => "Bluebell",
            "common_colour" => ['Blue', 'Purple'],
            "uncommon_colour" => [],
            "life_span" => "Perennial",
            "native" => ['Europe', 'North America'],
            "average_size" => "4 to 16 inches tall",
        ],
        26 => [
            "names" => "Chrysanthemum",
            "common_colour" => ['Yellow', 'White'],
            "uncommon_colour" => ['Red', 'Pink', 'Purple'],
            "life_span" => "Perennial",
            "native" => ['Asia', 'Europe'],
            "average_size" => "1 to 3 feet tall",
        ],
        27 => [
            "names" => "Foxglove",
            "common_colour" => ['Purple', 'Pink'],
            "uncommon_colour" => ['White'],
            "life_span" => "Biennial",
            "native" => ['Europe', 'North America'],
            "average_size" => "3 to 6 feet tall",
        ],
        28 => [
            "names" => "Morning Glory",
            "common_colour" => ['Blue', 'Purple', 'Pink'],
            "uncommon_colour" => ['White', 'Red'],
            "life_span" => "Annual",
            "native" => ['Central and South America'],
            "average_size" => "6 to 10 feet tall",
        ],
        29 => [
            "names" => "Aster",
            "common_colour" => ['Blue', 'Purple', 'Pink', 'White'],
            "uncommon_colour" => ['Red', 'Yellow'],
            "life_span" => "Annual or perennial, depending on the species",
            "native" => ['North America', 'Europe', 'Asia'],
            "average_size" => "1 to 4 feet tall",
        ],
        30 => [
            "names" => "Sweet Pea",
            "common_colour" => ['Pink', 'Purple', 'White'],
            "uncommon_colour" => ['Red', 'Yellow'],
            "life_span" => "Annual",
            "native" => ['Italy', 'Sicily'],
            "average_size" => "6 to 12 inches tall",
        ],
        31 => [
            "names" => "Alstroemeria",
            "common_colour" => ["White", "Yellow", "Pink", "Orange", "Purple", "Red"],
            "uncommon_colour" => ["Green"],
            "life_span" => "Perennial",
            "native" => ["South America"],
            "average_size" => "1 to 3 feet tall"
        ],
    ];

    return $details[$id];
}

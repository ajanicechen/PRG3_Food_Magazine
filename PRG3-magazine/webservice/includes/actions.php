<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "dish" => "Adeptus Temptation",
            "rarity" => "★★★★★",
            "region" => "Liyue",
            "image" => "./images/adeptus_temptation.png",
        ],
        [
            "id" => 2,
            "dish" => "Golden Crab",
            "rarity" => "★★★★",
            "region" => "Liyue",
            "image" => "./images/golden_crab.png",
        ],
        [
            "id" => 3,
            "dish" => "Fullmoon Egg",
            "rarity" => "★★★",
            "region" => "Liyue",
            "image" => "./images/fullmoon_egg.png",
        ],
        [
            "id" => 4,
            "dish" => "Matsutake Meat Roll",
            "rarity" => "★★",
            "region" => "Mondstadt",
            "image" => "./images/matsutake_meat_roll.png",
        ],
        [
            "id" => 5,
            "dish" => "Mondstadt Hash Brown",
            "rarity" => "★★★",
            "region" => "Mondstadt",
            "image" => "./images/mondstadt_hash_brown.png",
        ],
        [
            "id" => 6,
            "dish" => "Tea Break Pancake",
            "rarity" => "★★",
            "region" => "Mondstadt",
            "image" => "./images/tea_break_pancake.png",
        ],
        [
            "id" => 7,
            "dish" => "Tianshu Meat",
            "rarity" => "★★★★",
            "region" => "Liyue",
            "image" => "./images/tianshu_meat.png",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "description" => "A complex, famous type of Liyue cuisine, in which 
                              specially selected ingredients are submerged and 
                              slowly bowled in soup stock. The recipe scribbled 
                              from memory alone was enough to urge the adepti to 
                              once again return to the world of men.",
            "effect" => "Increases all party members' ATK by 260-372 and 
                         CRIT Rate by 8 -12% for 300s. In Co-Op Mode, this effect only 
                         applies to your own character(s).",
            "recipe" => ['Ham', 'Crab', 'Schrimp Meat', 'Matsutake', 'Adepti']
        ],
        2 => [
            "description" => "A crab dish cooked in the ancient ways. The crab has 
                              been chopped into pieces and battered with flour, before 
                              being stir-fried till golden and rich with flavor. It is 
                              worthy of the world 'gold' whether in terms of appearance 
                              or quality.",
            "effect" => "Increases all party members’ DEF by 215-308 and healing 
                         effectiveness by 6-10% for 300s.
                         In Co-op Mode, this effect only applies to your own character(s).",
            "recipe" => ['Crab', 'Flour', 'Bird Egg', 'Salt']
        ],
        3 => [
            "description" => "One of Liyue's traditional snacks. The egg has been beaten 
                              into the flour to form a dough and the shrimp and fish have 
                              been diced, minced, and packaged into the shape of a teacup, 
                              before being garnished with whole shrimp and steamed in a pot. 
                              The resulting design is like that of clouds embracing the moon, 
                              hence the name Fullmoon Egg.",
            "effect" => "Revives the selected character. Restores 900 - 1,500 HP",
            "recipe" => ['Fish', 'Shrimp Meat', 'Bird Egg', 'Flour']
        ],
        4 => [
            "description" => "A pan-fried meat dish. Ground meat is put on the Matsutake and 
                              gently pan-fried on low heat so the Matsutake can fully take 
                              in the aromatic juice of the meat. It's a mouthwatering delicacy 
                              in all of its glory.",
            "effect" => "Restores 20 - 24 % of Max HP and an additional 
                         900 - 1,500 HP to the selected character.",
            "recipe" => ['Matsutake', 'Raw Meat', 'Pan-fried']
        ],
        5 => [
            "description" => "A fried cake of mashed potatoes. A little bit of pinecone 
                              helps give it a nice crunch, and great with a bit of jam. 
                              Loved by people of all ages.",
            "effect" => "Restores 30 - 34% of Max HP and an additional 
                         600 - 1,900 HP to the selected character.",
            "recipe" => ['Pinecone', 'Potato', 'Jam', 'Fried']
        ],
        6 => [
            "description" => "A stack of round pancakes. A staple originating from 
                              afternoon tea in manors. Only the best berries should 
                              be picked for this dish.",
            "effect" => "Revives the selected character. Restores 250 - 550 HP.",
            "recipe" => ['Berries', 'Flour', 'Bird Egg']
        ],
        7 => [
            "description" => "A braised meat dish. The cut of meat used is a 
                              happy medium between lean and fatty, and has been braised 
                              to smoking perfection. The ingredients glisten, and are 
                              soft but not greasy. Word has it that the Tianshu of a 
                              certain generation of Liyue Qixing invented this dish after 
                              much painstaking development.",
            "effect" => "Increases all party members' Physical DMG by 20 - 40% and 
                         increases CRIT Rate by 6-10% for 300s.",
            "recipe" => ['Raw Meat', 'Sugar', 'Qingxin', 'Matsutake']
        ],
    ];

    return $tags[$id];
}
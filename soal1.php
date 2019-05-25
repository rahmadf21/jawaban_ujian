<?php
function satu(){
// array
$array = Array (
        "id" => 1,
        "name" => "Rachmad Fadillah",
        "address" => "Jalan tembusu 6"
    ,
    "hobbies" => Array (
        "hobi" => "makan",
        "hobi"=>"tidur"
    ),
    "is_married" =>true,
    "school" => Array(
"highschool"=>"SMKN2 Pekanbaru",
"university"=>"uin suska riau",
    ),
     "Skill" => Array (
        "name" => "PHP",
        "score" => "70","65",
    )
);

// encode array to json
$json = json_encode(array('data' => $array));

var_dump($json);
}

$hasil=satu();
echo"$hasil";
?>
<?php 
  
// data strored in array
$array = Array (
    "0" => Array (
        "id" => "04",
        "name" => "Olivia Mason",
        "designation" => "System Architect"
    ),
    "1" => Array (
        "id" => "05",
        "name" => "Jennifer Laurence",
        "designation" => "Senior Programmer"
    ),
    "2" => Array (
        "id" => "06",
        "name" => "Medona Oliver",
        "designation" => "Office Manager"
    )
);

// encode array to json
$json = json_encode($array);
$bytes = file_put_contents("myfile.json", $json,FILE_APPEND); 
echo "The number of bytes written are $bytes.";
?>
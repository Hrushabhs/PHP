<!DOCTYPE>
<html>
<title>If else statements
</title>
<body>
<?php 
$number = array(1,5,3,6,1,5,2,6,5,1,25,12,22);
foreach($number as $num){
    echo "Numbers: {$num} <br>";
}

$food = array(
    "Item_no: "=> 1021,
    "Name: "=> "Pizza",
    "region: "=> "Itely",
    "Side_food: "=> "Burger",
    "Drink: "=> "Sprite",
    "Price: "=>"OOPs"
);
foreach($food as $key=>$value){
    if($key=="Price"){
        if(is_numeric($value)){
        }
        else{
            $value = "Please Enter valid price.";
        }
        

    } 
    echo "{$key}  : {$value} <br>";
}

?>

</body>
</html>
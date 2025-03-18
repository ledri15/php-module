<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $num = -10;
    $age = 18;
    $numri = 23;
    $a = 18;
    $b = 25;

    $age2 = 15

    if($num > 0){
     echo "$num is smaller than 0"       
    }
    
if (($age>18) && ($age<18)){
    echo "you are a teenager"
}else{
    echo " you are a grown man"
}
    


if($numri<0){
    echo "the value of $numri is a negative number"
}elseif($numri == 0){
    echo "the value of $numri is 0"
}else{
    echo "the value of $numri is a positive number"
}


if( $a == $b ){
    echo "1";
}elseif ($a > $b ){
    echo "2";
}else{
    echo "3";
}
stwich($age2){
case (($age2= 0) && ($age2< 18)){
    echo "you are a minor"}
case{
    echo "you are a young adult"{
    }}
}
    
    ?>
</body>
</html>
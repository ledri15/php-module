<?php
    // // $x = 'hello';
    // print_r ($x);

    // phpinfo()


    // $x= 5;
        // echo gettype($x) . <br>;

    // $x= 10.5
        // echo gettype($x). <br>;

    // $x = 'hello'
    //     echo gettype($x). <br>;


?>

<?php 

    function displayPhpVersion(){
        echo 'THIS IS PHP' . phpversion();
        echo '\n';


        displayPhpVersion();
    }
?>


<?php

    function Hello(){
        echo 'Hello World';
        Hello();
    }
?>



<?php
function sum(){
    $value = 120 + 701;
    echo $value
}


?>
 
 <?php
    function maximum ($x , $y){
        if ($x > $y){
            return $x;
        }else{
            return $y;
        }
    }
        $a = 10;
        $b = 30;
 ?>
 <?php 
 function divisible(){
    if (($n % 2) == 0){
        return"$nte eshte e plotpjestueshme "
    }else {
        return"$n nuk eshte e plotpjestueshme"
    }
 }

 print_r(divisible(4)."<br>");
 print_r(divisible(35)."<br>");
 print_r(divisible(16)."<br>");
 print_r(divisible(3)."<br>");
 
 ?>
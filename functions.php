<?php 
$title = "Functions";
include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <?php
    function writeMessage(){
        echo "you are really a nice person, have a nice day! <br/>";
    }

    //calling a Function */
    writeMessage();

    echo "hr/>";

    writeMessage();

    /*Functions with parameters */

    function addFunctions($num1,$num2){
        $sum = $num1+$num2;
        $num2 = $num2+1;
        echo "The sum of $num1 and $num2 is $sum <br/>";
    }
    //pass by refference - use ampersand in parameter

    function changeNum(&$num){
        $num = $num +10;
        //$num+=10;
    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 500;
    addFunctions(10,30);
    addFunctions(53,$num);
    addFunctions('10', "52");

    changeNum($num);
    echo $num . '<br/>';
    
    $return_value = returnProduct(10,293);
    echo $return_value . '<br/>';
    
    ?>

    
<?php 
require 'includes/footer.php';
?>

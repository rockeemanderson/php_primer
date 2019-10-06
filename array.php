<?php 
$title = "Arrays and Printouts";
include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <?php
        $num = 3;

        $numbers = array(1,2,3,4,5,6,7,8,9,101,22,65,77,55,43,66,89,985);
        //access the value in cell by index number
        echo $number[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";

        for ($count = 0; $count < $size; $count++){
            echo "<p>$Numbers[$count]</p>";
        }
    ?>
<?php require 'includes/footer.php'
?>
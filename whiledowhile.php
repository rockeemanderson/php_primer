<?php 
$title = "while / do while loops";
include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <?php
    $grade = 10;
    //Infinite loop
    //while($$grade < 10){
    //   echo '<p> I AM LESS THAN 10!</p>';
    //}
    //Pre-Condition Loop
    while($grade < 10){
        echo '<p>I AM LESS THAN 10!</p>';
        $grade++;
    }

    echo 'EXIT LOOP!';
    
    ?>

    <H1>DO-WHILE LOOP</H1>
    <?php
        do{
            echo '<p> I AM A DO WHILE LOOP</p>';
            $grade++;
        }while($grade <10);
        echo 'EXIT LOOP!';
    ?>
<?php require 'includes/footer.php'
?>
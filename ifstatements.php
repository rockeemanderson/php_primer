<?php 
$title = "If Statements";
include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <h3 style="color: red"></h3>
    <?php
        echo '<h2> If Statements</h2>';
        $grade =30;
        // ===, ==, >,<,<=,>=,

        if ($grade >=50){
            echo '<h3 style= "color:green"> YOU HAVE PASSED</3>';
        }else{
            echo '<h3 style= "color:red"> YOU HAVE FAILED</3>';
        }
        $grade = 'A';
        //If-Else IF-Else
        if ($grade == 'A'){
            echo' <h2 style= "color:green">you are a superstar!</h2>';
        }elseif($sgrade == 'B'){
            echo'<h2 style= "color:blue">You Did well</h2>';
        }else{
            echo'<h2 style= "color:red">You Failed</h2>';
        }
        
        
    ?>
<?php 
require 'includes/footer.php';
?>

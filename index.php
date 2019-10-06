<?php 
$title = "Home";
include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
<!--Basic HTML-->
    <h1>Hellow World - PHP Primer</h1>

    <?php 
    $uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

    //Printing to HTML Using echo
    echo "hello PHP!";
    echo "<br/>";
    echo "Second Line";


    $name = "Rockeem Anderson";
    $age = 29;
    // echo variable
    echo $name;
    echo "<h1>My Name Is: '.$name.'</h1>";
    echo "<h1>My Name Is: '.$age.'</h1>";
    //echo usige double quotes and interpolation
    echo "<h1>My Name Is: $name</h1>";

?>

<button type="button" class="btn btn-danger">>CLICK HERE!</button>
<button type="button" class="btn btn-success">>CLICK HERE!</button>
<a href="https://www.youtube.com/watch?v=tNkTSkqXh_M" target="" class = "btn-success"> Youtube.com</a>

'
<?php

 require 'includes/footer.php'
?>
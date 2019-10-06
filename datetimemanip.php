<?php 
$title = "Date and Time Manipulation";
include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <?php
    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'];
    echo $datenow['mon'];
    echo $datenow['year'];

    echo "Today's Date: " . $datenow['mday']. '/' . $datenow['mon']. '/'. $datenow['year']. '<br/>';

    print date("m/d/y G.i:s<br>",time()).'<br/>';
    print "Today is ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
<?php require 'includes/footer.php'
?>
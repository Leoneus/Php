<!DOCTYPE html>
<html>
<body>

<?php

function hello($name) {
    echo "Hello $name";
}
    //this is my comment
    $name = "Suparerk";
    echo "Hello $name<br/>";
    echo "<font color='red'>";
    for($i=0; $i<100; $i++) {
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
        echo "<p style='color:rgb($r,$g,$b)'>This is loop $i<br/>";
    }
    echo "</font>";
    hello("Suparerk Srisurat");
?>

</body>
</html>
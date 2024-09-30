<?php
for($a=0;$a<=1000;$a++){
    echo$a;
    echo "\n";
}
echo "<br>";
echo "<hr>";
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++)
    echo "*";
echo "<br>";
}
for($x=1;$x<=5;$x++){
    echo "*";
}
echo "<hr>";
$a=5;
for($x=$a;$a>0;$a--){
    for($y=1;$y<=$x;$y--)
    echo"*";
}
for($x1=$a;$x1>=$x;$x1--){
    echo "*";
    echo "<br>";
}
for($x=1;$x<=5;$x++){
    for($y=$x;$y<=5;$y++){
        echo "*";
    }
    echo "<br>";
}

?>

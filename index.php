<?php
$x=$_POST['one'];
$y=$_POST['two'];

$num = 1;
$array = [];
$array2 = [];

if ($x > $y) {
    $max = $x;
} else {
    $max = $y;
}

$num = $max;
while ($num) {
        if ($x%$num == 0) {
            $array[] = $num;
        }

       if ($y%$num == 0) {
           $array2[] = $num;
       }

   --$num;
}

$BMM = array_intersect($array, $array2);
echo "ب.م.م : " . current($BMM) . '<br>';

$num = $max;
while ($num) {
        $array[] = $x*$num;

        $array2[] = $y*$num;

    --$num;
}

$KMM = array_intersect($array, $array2);
echo "ک.م.م : " . end($KMM) . '<br>';

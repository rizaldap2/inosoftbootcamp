<?php 
    function circleare($radius){
        $area = pi() * $radius * $radius;
        return $area;
    }
    function circumference($radius){
        $circumference = 2 * pi() * $radius;
        return $circumference;
    }
    function rectangulararea($length, $width){
        $area = $length * $width;
        return $area;
    }
    foreach(range(1,100) as $number){
        if ($number % 3 != 0 && $number % 5 != 0) {
            echo $number . '<br>';
            continue;
        }
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo round(rectangulararea($number/3, $number/5), 2) . '<br>';
            continue;
        }
        if ($number % 3 == 0){
            echo round(circleare($number/3), 2) . '<br>';
        }
        if ($number % 5 == 0){
            echo round (circumference($number/5), 2) . '<br>';
        }
    }

?>
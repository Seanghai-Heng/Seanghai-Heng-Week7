<?php
    /*PHP 7.4 will give us the ability to use spread operators in arrays that are faster compared to array_merge. There are two key reasons for that. First, a spread operator is considered to be a language structure and array_merge is a function. The second reason is that now your compile-time can be optimized for constant arrays. As a consequence, we will have increased PHP 7.4 performance. */
    $arrayA = [1, 2, 3];
    $arrayB = [4, 5];
    $result = [0, ...$arrayA, ...$arrayB, 6 ,7];
    for($x=0; $x<8; $x++){
        echo $result[$x]. "<br>";
    }
    // print 0 1 2 3 4 5 6 7 

?>
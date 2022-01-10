<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercise 2</title>
</head>

<body>
    <?php

    //1
    echo "<h1>1</h1>";
    $colors = ['red', 'green', 'white'];
    $str1 = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. -Richard M. Nixon";
    echo "<p>$str1</p>";

    //2
    echo "<h1>2</h1>";
    $colors = array('Green', 'Red', 'White');
    echo "<ul>";
    foreach ($colors as $val)
        echo "<li>$val</li>";
    echo "</ul>";

    //3
    echo "<h1>3</h1>";
    $cities = array("Italy" => "Rome", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens");
    foreach ($cities as $key => $val)
        echo "<p>The capital of $key is $val</p>";

    //4
    echo "<h1>4</h1>";
    echo "<p>$colors[0]</p>";

    //5
    echo "<h1>5</h1>";
    $arr5 = array(1, 2, 3, 4, 5);
    $position = 4;
    $val5 = '$';
    echo "<p>Before: ";
    foreach ($arr5 as $val)
        echo "$val ";
    echo "</p>";
    array_splice($arr5, 3, 0, $val5);
    echo "<p>After: ";
    foreach ($arr5 as $val)
        echo "$val ";
    echo "</p>";

    //6
    echo "<h1>6</h1>";
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    echo "<p>Before Sorting:<br>";
    foreach ($fruits as $key => $val)
        echo "$key = $val <br> ";
    echo "</p>";
    krsort($fruits);
    echo "<p>After Sorting:<br>";
    foreach ($fruits as $key => $val)
        echo "$key = $val <br> ";
    echo "</p>";

    //7
    echo "<h1>7</h1>";
    $str7 = '78,60,62,68,71,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73';
    $arr7 = explode(',', $str7);
    $sum7 = 0;

    foreach ($arr7 as $val)
        $sum7 += $val;
    $result7 = $sum7 / count($arr7);
    echo "<p>Average Tempreature is: $result7</p>";

    sort($arr7);
    $arr7 = array_unique($arr7);

    echo "<p>List of five lowest tempreatures: ";
    foreach (array_slice($arr7, 0, 5) as $val)
        echo $val." ";
    echo "</p>";

    echo "<p>List of five highest tempreatures: ";
    foreach (array_slice($arr7, -5, 5) as $val)
        echo $val . " ";
    echo "</p>";

    //8
    echo "<h1>8</h1>";
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    print_r(array_merge($array1, $array2));

    //8.1
    echo "<h1>8.1</h1>";
    $colors = array("red", "blue", "white", "yellow");
    echo "<p>Before:<br>";
    foreach ($colors as $val)
        echo $val . "<br>";
    echo "</p>";
    echo "<p>After:<br>";
    foreach ($colors as $val)
        echo strtoupper($val) . "<br>";
    echo "</p>";

    //8.2
    echo "<h1>8.2</h1>";
    $colors = array("RED", "BLUE", "WHHITE", "YELLOW");
    echo "<p>Before:<br>";
    foreach ($colors as $val)
        echo $val . "<br>";
    echo "</p>";
    echo "<p>After:<br>";
    foreach ($colors as $val)
        echo strtolower($val) . "<br>";
    echo "</p>";

    //9
    echo "<h1>9</h1>";
    echo "<p>";
    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 === 0)
            echo $i . " ";
    }
    echo "</p>";

    //10
    echo "<h1>10</h1>";
    $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
    $lengths =  array_map('strlen', $words);
    $min_index = array_search(min($lengths), $lengths);
    echo "<p>The shortest array length is " . $words[$min_index] . " .<br>";
    $max_index = array_search(max($lengths), $lengths);
    echo "The longest array length is " . $words[$max_index] . " .</p>";

    //11
    echo "<h1>11</h1>";
    echo "<p>WHAT THE HELLLLLLLLLLLLL!!!!!! <br>";
    $arr11 = range(11,25);
    if(count($arr11)<10)
        echo "<p>Range must be greater than 10</p>";
    elseif (count($arr11)===10) {
        foreach ($arr11 as $val)
            echo $val."<br>";
        }
        else{
            $arr11 = array_unique($arr11);
            array_splice($arr11,10);
            foreach ($arr11 as $val)
                echo $val."<br>";
    }

    //12
    echo "<h1>12</h1>";
    $array12 = array(2,0,10,12,6);
    sort($array12);
    echo "<p>";
    echo $array12[0]===0?$array12[1]:$array12[0];
    echo "</p>";
    
    ?>
</body>

</html>
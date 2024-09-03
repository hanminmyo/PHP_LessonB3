<?php 
    //Variable
    //Naming  Rule - No space, No special character(!@$%^*), Can't be a number on the first character, case sensitive


    $name = "Alex"; 
    $address = "Yangon";

    //Doubles Quotes and Single Quotes
    echo "My name is $name";
    echo '<br>';
    echo 'I live in $address<br>';
    echo 'I live in'.$address;
    echo '<br>';
    echo $name.' live in '.$address;

//.=
$first_name = 'Alan';
echo "<p>$first_name</p>";
$last_name = 'Walker'; 
echo "<p>$last_name</p>";

$first_name .= 'Walker';
echo "<p>$first_name</p>";


//trim() => remove first space and last space 
$singer= ' Taylor Swift ';
echo "<p>My favrious singer is$singer.</p>";
echo "<p>My favrious singer is".trim($singer).".</p>";

// strlen() => string length
echo strlen($singer);
echo "<br>";
$singer_length = trim($singer);
echo strlen($singer_length);
echo "<br>";

//strtolower(string) => change to lowercase
echo strtolower($singer);
echo "<br>";

//strotoupper(string) => change to uppercase
echo strtoupper($singer);
echo "<br>";

//substr(string, start(0), number) substring
echo substr("Hello HeinLearner",6);
echo "<br>";
echo substr("Hello HeinLearner", 6,4);
echo "<br>";
echo substr("Hello HeinLearner", 10,5);
echo "<br>";

//str_replace(search, replace, subject)
$city = 'Hello Mandalay';
echo "<p>$city</p>";
echo str_replace('Mandalay', 'Smart City', $city);
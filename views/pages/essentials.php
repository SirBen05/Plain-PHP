<?php
echo '<h1>Essentials</h1>';
// Some of predetermined functions
$manoString = 'We live in eastern Europe, and it\'s not that bad';
$length = strlen($manoString);
$wordCount = str_word_count($manoString);
$reverse = strrev($manoString);

$position = strpos($manoString, 'Europe');
echo substr($manoString, $position).'<br>';

$replaced = str_replace('eastern Europe', 'Asia', $manoString);
echo 'Before:<br>';
echo $manoString.'<br>';
echo 'After:<br>';
echo $replaced.'<br>';

$url = '/employees/getUsers/7..';
echo $url.'<br>';
$url = substr($url, 1);
echo $url.'<br>';
$parts = explode('/', $url);
print_r($parts);

// Arithmetic operators
echo 'Arithmetic operators<br>';
echo (int) (53151/20);
$var2 = 5;
echo $var2++.'<br>';
echo $var2.'<br>';

// Assignment
echo 'Assignment<br>';
$a = 7;
echo $a.'<br>';
$a .= 5;
echo $a.'<br>';
$a += 5;
echo $a.'<br>';
$a *= 5;
echo $a.'<br>';
$a /= 5;
echo $a.'<br>';
$a **= 5;
echo $a.'<br>';
$a %= 5;
echo $a.'<br>';

// Comparison operators
$b = 20;
$c = 8.2;
$savybe = 'zanuda';
if($c>8 or $savybe !=='zanuda'){
    echo 'TRUE: '.'<br>';
}else{
    echo 'FALSE: '.'<br>';
}

// elseif vs switch
$age = '0';

if($age>32){
    echo 'Ar svarstei kada apie vienuolystę?<br>';
}elseif($age>24){
    echo 'Svarstei kada apie galimybę įsidarbint?<br>';
}elseif($age>20){
    echo 'Davai nupirk alaus, nes tingiu eit<br>';
}elseif($age>17){
    echo 'Ne, negali nakvot pas draugę<br>';
}elseif($age>12){
    echo 'tipo paauglystė?<br>';
}elseif($age>7){
    echo 'sveikinu tapus įkiriu vaiku<br>';
}elseif($age>3){
    echo 'sveikinu tapus mazu vaiku<br>';
}elseif(0<=$age && $age<3){
    echo 'sveikinu gimus, kūdiki<br>';
}

switch(true){
    case (0<=$age && $age<3) :
        echo 'sveikinu gimus, kūdiki<br>';
        break;
    case (3<=$age && $age<7) :
        echo 'sveikinu tapus mazu vaiku<br>';
        break;
    case (7<=$age && $age<12) : 
        echo 'sveikinu tapus įkiriu vaiku<br>';
        break;
    case (12<=$age && $age<17) : 
        echo 'tipo paauglystė?<br>';
        break;
    case (17<=$age && $age<20) : 
        echo 'Ne, negali nakvot pas draugę<br>';
        break;
    case (20<=$age && $age<24) : 
        echo 'Davai nupirk alaus, nes tingiu eit<br>';
        break;
    case (24<=$age && $age<32) : 
        echo 'Svarstei kada apie galimybę įsidarbint?<br>';
        break;
    default: 
        echo 'O gal š vienuolyną?<br>';
}
echo '<h3>Regex training</h3>';

echo '--------------------------';
echo '<br>';
echo 'Sablonas:'.'<br>';
echo preg_match('/./', '5');
echo '<br>';
echo '--------------------------';
echo '<br>';
$someString = [
    'abc', 'aaa', 'df', 'grp',
    'takas@taktas.lt', 'Abecele1', 'Traktorius12', '5Fasa9',
    'Samagonas', 'gone', 'What we do?', '555',
    'Severina', '5489', '884', 'zeveral'
];

foreach($someString as $string){
    echo $string.' => '.preg_match('/^([^0-9]*)$/', $string).'<br>';
}



<?php
//If you have and array $arr = [0,1,2,3,4]; How do you extract the third value?

//If you have an array $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; How do you extract the third value?

//Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".

//With the result array from 3, create a new array where each element is both key and value. In other words, the result should be: ["a"=>"a", "b"=>"b", "c"=>"c”,   "d"=>"d", "e"=>"e"]

//Find the sum of this array of numbers $arr = [0, 1, 2, 3, 4, 5, 6];

//Write a PHP function to find the maximum and minimum marks from the following set of arrays:
//$marks1 = [360,310,310,330,313,375,456,111,256];
//$marks2 = [350,340,356,330,321];
//$marks3 = [630,340,570,635,434,255,298];
//
//Write a PHP function to generate a string with 11 //random letters and numbers.
//
//Giving a sentence, write a PHP script that:
//
//Transform all characters to uppercase.
//
//Transform all characters to lowercase.
//
//Make the first character uppercase.
//
//Make the first character of all the words //uppercase.
//
//Write a PHP script to extract the file name from //a path, in example: //“http://www.example.com/public_html/index.php”
//

//1
$arr = [0,1,2,3,4];
//I checked which key was for which value just to be sure:
var_dump($arr);
echo '<br />';
//This should be it:
echo 'Problem 1 Solution:  ';
echo $arr[2];
echo '<br /> <br />';

//2
$arr2 = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
//No var_dump because it's already listed for me here.  Easier:
echo 'Problem 2 solution:  ';
echo $arr2["two"];
echo '<br /><br />';

//3
//Using explode to separate the string by it's commas, removing the commas in the process:
$a = "a,b,c,d,e,f";
$b = explode(',',$a);

//Result:
echo 'Problem 3 solution:  ';
var_dump($b);
echo '<br /><br />';

//4
//Using function to assign one arrays keys as the values of another array, but I will use the same to replace the current keys with the values of the same array:
echo 'Problem 4 solution:  ';
$c = array_combine($b, $b);

//Result:
var_dump($c);
echo'<br /><br />';

//5
//Self-explanatory
$arr3 = [0, 1, 2, 3, 4, 5, 6];

//Result:
echo 'Problem 5 solution:  ';
echo array_sum($arr3);
echo '<br /><br />';


//6
$marks1 = [360,310,310,330,313,375,456,111,256];
$marks2 = [350,340,356,330,321];
$marks3 = [630,340,570,635,434,255,298];

//Merging the arrays into one 2D array:
$merge = (array($marks1, $marks2, $marks3));

//Merging that array into one single array:
$merged = array_merge(...$merge);

//Grabbing the max and min of the new single array
$max = max($merged);
$min = min($merged);

//Result:
echo 'Problem 6 solution:  ';
echo json_encode($max);
echo ', ';
echo json_encode($min);
echo'<br /><br />';

//7
//Creating a list of random characters the program can choose from for the 11 character string
$ListOfChar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

//This will be to repeat the above character list maybe once, maybe 11 times.  To ensure that the letters and numbers can maybe repeat themselves once, or maybe repeat themselves all 11 times since there will be 11 characters.
$charRepeatMin = 1;
$charRepeatMax = 11;

// Going from inside to outside:  repeat characters 1-11 times, so that we end up with a string that is going to say abcdefg.... once, or twice, or three times, etc. The new string is shuffled with str_shuffle. At this point, if you take the 26 letters * 2,  once for upper and lowercase, and numbers 1-9, then you can either have a string that is  61 characters long, or 671 characters long, all randomly shuffled.  Now take characters 1-11 of that string and echo :)

echo 'Problem 7 solution:  ';
echo substr(str_shuffle(str_repeat($ListOfChar, mt_rand($charRepeatMin,$charRepeatMax))),1,11);
echo '<br /><br />';


//8

//Create one function for each.  Reference the parameter's place to later call the function with using a different variable that will still be modified by originally declared function:
function stringToUpper(&$sentence)
{
	$sentence = strtoupper($sentence);
	return TRUE;
}

function stringToLower(&$sentence)
{
	$sentence = strtolower($sentence);
	return TRUE;
}

function upFirst(&$sentence)
{
	$sentence = ucfirst($sentence);
	return TRUE;
}


function wordUc(&$sentence)
{
	$sentence = ucwords($sentence);
	return TRUE;
}

//Create Sentence:
$statement = 'I am so hungry right now.';

//Call the functions on the newly created sentence:

echo 'Problem 8 solution is:<br />';
stringToUpper($statement);
print($statement);
echo'<br />';

stringToLower($statement);
print($statement);
echo'<br />';

upFirst($statement);
print($statement);
echo'<br />';

wordUc($statement);
print($statement);
echo'<br /><br />';



//9
//Create the variable to hold path:
$path = 'http://www.example.com/public_html/index.php';

//use basename on the path:
$fileName = basename($path);

echo 'Problem 9 Solution is:  ';
echo $fileName;




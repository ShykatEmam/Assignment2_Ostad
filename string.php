<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$reversed = [];
$vowels = [];

//j count of substring
//i count of index

$index_count = count($strings);
$vowel_count = 0;
$j=0;

//vowel count here
for($i=0; $i<$index_count; $i++){
    

    $length = strlen($strings[$i]);
    $single_string = $strings[$i];
    $vowel_count = 0;
    for($l=0; $l<$length; $l++){
        if($single_string[$l]=='a' || $single_string[$l]=='e'|| $single_string[$l]=='i'|| $single_string[$l]=='o'|| $single_string[$l]=='u'|| $single_string[$l]=='A'|| $single_string[$l]=='E'|| $single_string[$l]=='I'|| $single_string[$l]=='O'|| $single_string[$l]=='U'){
            $vowel_count++;
        }
    }
    $vowels[$i]=$vowel_count;
    $j++;
}

//reversing each string

$reversed_single_string;
for($i=0; $i<$index_count; $i++){
    $length = strlen($strings[$i]);
    $single_string = $strings[$i];
    $reversed_length=$length-1; //length for reversing the array
    $reversed_single_string = $strings[$i];
    for($l=0; $l<$length; $l++){
        $reversed_single_string[$l]=$single_string[$reversed_length--];
    }
    $reversed[$i] = $reversed_single_string;
}

for($i=0; $i<$index_count; $i++){
    echo "Original String: ".$strings[$i].", Vowel Count: ".$vowels[$i].", Reversed String: ".$reversed[$i]."\n";
    echo "\n";
}

?>
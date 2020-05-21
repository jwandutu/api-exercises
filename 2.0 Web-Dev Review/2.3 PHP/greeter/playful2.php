<?php
//square bracket notation
$my_student = ["Marvin",110785,"Nicholas","Wisdom"]; #indexed array
#print_r($my_student); #elements

#using the array()
$my_student = array(104414,"Saruni"); #indexed array


#var_dump($my_student);
echo "<br>";
echo "<br>";
#associtive array-explicitly defines the keys
$student_list = [
     113641 => "Ian",
     110486 => 'Wachira',
     111649 => "Oyaro",
   ];

#accesing- access elements using indexes
#integers-automattically defined  (varied [key] types-eg int, strings  are explicitely defined)
#echo $my_student[1];
$full_name = "Saruni Muthui";

$my_student[1] = $full_name;

#echo $my_student[1];

//remove elements from indexed array
unset($my_student[1]);  #its inbuilt

#var_dump($my_student);

#unset($student_list[111649]);

#var_dump($student_list);

$array1 = [];
$array2 = ['one'];

var_dump($student_list[111649]);
echo '<br>';

var_dump(isset($array3));

#0ne-dimensional,n-d
/*.....table
   1. index-1 Don
   2. index-2 Mark
   3. index-3 Joan
*/

$student_list_kcse = [
 [1,'index-1','Don'],
 [2,'index-2','Mark'],
 [3,'index-3','Joan']
];

$d_3 = [
  ["Stephen",[1,4]],
  ["Thiarara",[1,5]],
];

echo $student_list_kcse[2][2];
echo $student_list_kcse[1][2];

echo $d_3[1][1][1];









?>

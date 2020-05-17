<?php
#making a choice randomly
$options = ["Tailwind","Bulma","uikit","foundation","Bootstrap","MaterialDesign"];

#more randomness...who is the shyest person in BBIT 3 a,b,c...?

$name = "Anthony Mwala";

$name_length = strlen($name);
echo $name_length;
#array-rand[] n times(where n is the number of letters in that persons name)

# :) Anthony, Sandra and Nicole

var_dump(array_rand($options,1));
$final_int_pos =0;
while($name_length <=0){
  $final_int_pos = array_rand($options,1);
}
// whatever we get here is used as framework
echo $options[$final_int_pos];




 ?>

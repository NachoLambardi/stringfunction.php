<?php
$name = 'John';
$sentence = "Here we are testing strings functions with $name";
$long = strlen($sentence); // The STRLEN show the length of the string as a integer.
echo $long;
?>
<br>
<?php
$sentence2 = "We love php, right $name?";
echo substr($sentence2, 0 ); // The substr needs two values, one to know what to show and the second one to kno where should it start, cutting the content of the length string.
 ?>
 <br>
 <?php
$sentence3 = "This is a position sentence";
//var_dump(strpos($sentence3, 2)); with var_dump show the position like an integer.
echo strpos($sentence3, 'ion');
  ?>
  <br>
  <?php
  $sentence4 = "This is the last sentence";
$start = strpos($sentence4, 'last');
echo substr($sentence4, $start);

   ?>

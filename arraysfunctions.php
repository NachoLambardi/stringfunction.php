<?php
$names = array(
  'Tom' => 'Guitarplayer',
  'Matt' => 'Drummer',
  'Scott'=> 'Singer'
);
//var_dump(array_keys($names));
foreach (array_keys($names) as $name) {
    echo "Hello $name, how are you?</br>";
}
?>
<br>
<?php
$names1 = array(
  'Alan' => 'Guitarplayer',
  'Dom' => 'Drummer',
  'Ryan'=> 'Singer'
);
function print_info($value, $key) {
  echo "$key is a $value</br>";
}
array_walk($names1, 'print_info');

 ?>

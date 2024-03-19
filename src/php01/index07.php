<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo $people[1];

$people2 = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

echo $people2['person1'];
echo '<br/>';
// echo $people2[0];

// $people3 = array(
//   'person1' => 'Taro(25歳men)',
//   'person2'  => 'Jiro(20歳men)',
//   'person3'  => 'hanako(16歳women)'
// );

// foreach ($people3 as $person => $name) {
//   echo $name;
//   echo '<br/>';
// }

$people3 = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people3 as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')';
  echo '<br/>';
}
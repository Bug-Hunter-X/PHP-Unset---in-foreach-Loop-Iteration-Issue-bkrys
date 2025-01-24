function foo(array $arr) {
  // Iterate in reverse to avoid re-indexing issues
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'apple') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$fruits = ['apple', 'banana', 'apple', 'orange'];
$newFruits = foo($fruits);
print_r($newFruits); // Correct output: Array ( [1] => banana [3] => orange )

//Alternative solution using array_filter
$newFruits = array_filter($fruits, function($fruit) { return $fruit !== 'apple';});
print_r($newFruits); // Correct output: Array ( [1] => banana [3] => orange )
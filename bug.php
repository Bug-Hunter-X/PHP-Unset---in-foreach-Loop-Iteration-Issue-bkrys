function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'apple') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$fruits = ['apple', 'banana', 'apple', 'orange'];
$newFruits = foo($fruits);
print_r($newFruits); // Output: Array ( [1] => banana [3] => orange )

// The bug is that this code doesn't correctly handle keys when using unset() during iteration. When you unset an element, the array keys are re-indexed, but the foreach loop continues with the original keys.
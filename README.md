# PHP Unset() in foreach Loop
This repository demonstrates a common error in PHP when using `unset()` inside a `foreach` loop to modify an array.  The issue arises from how PHP re-indexes arrays after an element is removed, leading to unexpected behavior.

The `bug.php` file shows the problematic code, while `bugSolution.php` presents a corrected version.

## Bug
The original code attempts to remove all occurrences of 'apple' from an array. However, due to the re-indexing of the array after `unset()`, some elements might not be removed. 

## Solution
The corrected code avoids the problem by iterating through the array in reverse order, or using alternative methods like array_filter().
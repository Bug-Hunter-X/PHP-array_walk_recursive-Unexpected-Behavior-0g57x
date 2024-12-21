# PHP array_walk_recursive Unexpected Behavior

This repository demonstrates a subtle bug related to the use of `array_walk_recursive` in PHP. The code intends to increment each element of a multidimensional array, but due to a misunderstanding of how the callback function interacts with the array, the expected result is not achieved.

The `bug.php` file shows the erroneous implementation, while `bugSolution.php` presents a corrected version.

This example highlights the importance of understanding how PHP handles references and value passing in callback functions.
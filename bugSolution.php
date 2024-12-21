The solution involves directly modifying the array element using the reference passed to the callback function.  Instead of assigning a new value to `$value`, we modify the element in place:
```php
<?php
function my_callback(&$value)
{
    $value++;
}

$array = array(
    array(1, 2, 3),
    array(4, 5, 6),
);

array_walk_recursive($array, 'my_callback');

print_r($array);
?>
```
This corrected code successfully increments each element of the multidimensional array.
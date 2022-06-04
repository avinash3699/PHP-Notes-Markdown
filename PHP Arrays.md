# Arrays

```
An array is a special variable, which can hold more than one value at a time
```

___

## Create an Array in PHP

In PHP, the `array()` function is used to create an array

___

## Types of Arrays

1. Indexed/Numeric arrays
2. Associative arrays
3. Multidimensional arrays

### Indexed/Numeric Array

PHP indexed array is an array which is represented by an index number by default. All elements of array are represented by an index number which starts from 0. PHP indexed array can store numbers, strings or any object

```php
There are two ways to define indexed array:

1.
$famous_persons = array("Elon Musk", "Ratan Tata", "Avinash");

2.
$famous_persons[0] = "Elon Musk";  
$famous_persons[1] = "Ratan Tata";  
$famous_persons[2] = "Avinash"; 


Accessing array elements
echo $famous_persons[2]; //Avinash
```

___

### Associative Array

The associative arrays are very similar to numeric arrays in term of functionality but they are different in terms of their index. Associative array will have their index as string so that you can establish a strong association between key and values. PHP allows you to associate name/label with each array elements using => symbol.

```php
There are two ways to define associative array:

1.
$ceo_s = array("Tesla"=>"Elon Musk", "Zoho"=>"Sridhar Vembu", "India"=>"Avinash");

2.
$ceo_s["Tesla"] = "Elon Musk";
$ceo_s["Zoho"] = "Sridhar Vembu";
$ceo_s["India"] = "Avinash";


Accessing array elements
echo $ceo_s["India"]; //Avinash
```

___

### Multidimensional Array

A multidimensional array is an array containing one or more arrays. PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people. It is also known as array of arrays. It allows you to store tabular data in an array.

```php
Multidimensional array can be defined by

//Indexed/Numeric
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

Accessing array elements
echo $matrix[2][2]; //9
echo $matrix[0][2]; //3

//Associative
$matrix = array(
    "row1" => array(1, 2, 3),
    "row2" => array(4, 5, 6),
    "row3" => array(7, 8, 9)
);

echo $matrix["row3"][2]; //9
echo $matrix["row1"][2]; //3
```

___
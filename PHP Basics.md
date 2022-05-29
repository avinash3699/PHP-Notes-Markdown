# PHP Basics

```
PHP is the abbreviation of Hypertext Preprocessor and earlier it was abbreviated as Personal Home Page
```

## Syntax

```php
<?php
// PHP code goes here
?>
```

## PHP file extension
```
.php
```

## PHP Case Sensitivity
```
In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
```
```
All variable names are case-sensitive
```

## Comments
```php
// Single line comment

# Single line comment

/* 
Multi Line comment
Multi Line comment
Multi Line comment
*/
```

## Print to console
```php
echo "Avinash";
echo("Avinash");

print "Avinash";
print("Avinash");

// echo has no return value while print has a return value of 1 so it can be used in expressions.
# echo is marginally faster than print
```

## PHP Variables
```php
// In PHP, a variable starts with the $ sign, followed by the name of the variable

$name = "Avinash";
$age = 20;
```

## **String Functions**

```php
// strlen() - Return the Length of a String
echo strlen("Hello world!"); // outputs 12

// str_word_count() - Count Words in a String
echo str_word_count("Hello world!"); // outputs 2

// strrev() - Reverse a String
echo strrev("Hello world!"); // outputs !dlrow olleH

// strpos() - Search For a Text Within a String
// The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
echo strpos("Hello world!", "world"); // outputs 6
echo strpos("Hello world!", "w"); // outputs 6

// str_replace() - Replace Text Within a String
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
```
For more String Functions refer [String Functions](https://www.w3schools.com/php/php_ref_string.asp)

## PHP Constants

```
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Unlike variables, constants are automatically global across the entire script.

To create a constant, use the define() function.
Syntax - define(name, value, case-insensitive)
```

```php
define("GREETING", "Welcome Friemds"); //Create a constant with a case-sensitive name:
echo GREETING;

define("GREETING", "Welcome Friemds", true); //Create a constant with a case-insensitive name:
echo greeting;

define("famous_persons", array(
  "Elon Musk",
  "Ratan Tata",
  "Avinash"
)); // Create an Array constant:
echo famous_persons[2];
```
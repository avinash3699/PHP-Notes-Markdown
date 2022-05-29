# PHP Data Types
PHP supports the following data types:

1. **Scalar Types**
   * String
   * Integer
   * Float (floating point numbers - also called double)
   * Boolean

2. **Compound Types**
   * Array
   * Object

3. **Special Types**
   * NULL
   * Resource
  
---

```
STRING

A string is a non-numeric data type. It holds letters or any alphabets, numbers, and even special characters.
```
```php
$x = "Hello world!";
$y = 'Hello world!';
```

---

```
INTEGER

An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
```
```php
$x = 9999;
```

---

```
FLOAT

A float (floating point number) is a number with a decimal point or a number in exponential form.
```
```php
$x = 99.99;
```

---

```
BOOLEAN

A Boolean represents two possible states: TRUE or FALSE.
```
```php
$x = true;
$y = false;
```

---

```
ARRAY

An array stores multiple values in one single variable.
```
```php
$famous_persons = array("Elon Musk", "Ratan Tata", "Avinash");
```

---

```
Object

Objects are the instances of user-defined classes that can store both values and functions. They must be explicitly declared.
```
```php
class bike{  
    function model() {  
        $model_name = "Royal Enfield";  
        echo "Bike Model: " .$model_name;  
    }  
}  
$obj = new bike();  
$obj -> model();
```

---

```
NULL

Null is a special data type which can have only one value: NULL. 
A variable of data type NULL is a variable that has no value assigned to it.

If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL.
```
```php
$x = null;
```

---

```
RESOURCE

The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.
```

---
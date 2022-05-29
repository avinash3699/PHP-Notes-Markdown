# PHP Superglobals

```
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
```

The PHP superglobal variables are:

1. $GLOBALS
2. $_SERVER
3. $_REQUEST
4. $_POST
5. $_GET
6. $_FILES
7. $_ENV
8. $_COOKIE
9. $_SESSION

```php
// $GLOBALS

/*
$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
*/

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
```

```php
// $_SERVER

// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

echo $_SERVER['PHP_SELF']; // Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Returns the name of the host server
echo "<br>";
echo $_SERVER['HTTP_HOST']; // Returns the Host header from the current request
echo "<br>";
echo $_SERVER['HTTP_REFERER']; // Returns the complete URL of the current page
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // Returns the path of the current script
```

```php
// $_REQUEST

/*
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
$_REQUEST is not used mostly, because $_POST and $_GET perform the same task and are widely used.
*/

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
        }
    ?>

</body>
</html>
```

```php
// $_POST

// PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
        }
    ?>

</body>
</html>
```

```php
// $_GET

// PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL.

$name = $_GET['name'];
$city = $_GET['city'];
echo "<h1>This is ".$name." of ".$city."</h1><br>";
```
# PHP Cookies

```
What is a Cookie?

A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
```

## Create Cookies

```
A cookie is created with the `setcookie()` function

The setcookie() function must appear BEFORE the <html> tag.
```

```
Syntax

setcookie(name, value, expire, path, domain, secure, httponly);
```

```php
$cookie_name = "user";
$cookie_value = "Avinash";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day,  "/" means that the cookie is available in entire website
```

___

## Retrieve a Cookie

```
We can retrieve the value of the cookie using the global variable $_COOKIE

`isset()` function is used to find out if the cookie is set
```

```php
if(! isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
}
else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
```

___ 

## Modify a Cookie Value

```
To modify a cookie, just set (again) the cookie using the setcookie() function:
```

```php
$cookie_name = "user";
$cookie_value = "Nash";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
```
___

## Delete a Cookie

```
To delete a cookie, use the setcookie() function with an expiration date in the past
```

```php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
```

___ 

## Check if Cookies are Enabled

```php
if( count($_COOKIE) > 0 ) {
  echo "Cookies are enabled.";
}
else {
  echo "Cookies are disabled.";
}
```

___
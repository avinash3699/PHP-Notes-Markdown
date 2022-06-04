# PHP String Functions

```php
strlen()
The strlen() function returns length of the string.

Syntax
int strlen(string $string)  

Example
strlen("Cheems"); //6
```

```php
strrev()
The strrev() function returns reversed string.

Syntax
string strrev(string $string)

Example
strrev("smeehC"); //Cheems
```

```php
substr()
It is used to extract a part of a string.

Syntax
string substr($string, $start, $length)

Example
substr("Cheems", 1, 4); //heem
```

```php
str_replace()
It is used to replace all the occurrences of the search string with the replacement string.

Syntax
string str_replace($search, $replace, $string, $count)

//$count - It is an optional integer variable which counts the number of replacements done in the string. Simply, this variable stores the total number of replacement performed on a string $string.

Example
str_replace("Cheems", "Avinash", "Hi Friemds, I am Cheems"); //Hi Friemds, I am Avinash
```

```php
strtolower()
The strtolower() function returns string in lowercase letters.

Syntax
string strtolower(string $string)  

Example
strtolower("AVINASH"); //avinash
```

```php
strtoupper()
The strtoupper() function returns string in uppercase letters.

Syntax
string strtoupper(string $string)  

Example
strtoupper("avinash"); //AVINASH
```

```php
str_shuffle()
It is used to randomly shuffle all the character of a string.

Syntax
string str_shuffle(string $str)  

Example
str_shuffle("Cheems"); //One Permutation of all possible is returned
```

```php
ucfirst()
The ucfirst() function returns string converting first character into uppercase. It doesn't change the case of other characters.

Syntax
string ucfirst(string $str)

Example
ucfirst("avinash"); //Avinash
```

```php
lcfirst()
The lcfirst() function returns string converting first character into lowercase. It doesn't change the case of other characters.

Syntax
string lcfirst(string $str)  

Example
lcfirst("AVINASH"); //aVINASH
```

```php
ucwords()
The ucwords() function returns string converting first character of each word into uppercase.

Syntax
string ucwords(string $str, string $separator)

Example
ucwords("hi friemds,i am cheems"); //Hi Friemds, I Am Cheems
ucwords("hi friemds,i am cheems", ","); //Hi friemds,I am cheems
```

```php
trim()
It is used to strip whitespace other predefined characters from the beginning and end of a string.

Syntax
string trim(string, charlist);

Example
trim("    Cheems daw    "); //Cheems daw
trim("Cheems daw", "w"); //Cheems da
```
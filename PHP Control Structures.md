# PHP Control Structures

## PHP Conditional statements

```
In PHP we have the following conditional statements:

1. if 
2. if...else
3. if...elseif...else
4. switch
```

```php
// if

if (condition) {
  code to be executed if condition is true;
}

$x=1;
if ($x == 1) 
  print '$x is equal to 1';
```

```php
// if...else

if (condition) {
  code to be executed if condition is true;
}
else {
  code to be executed if condition is false;
}

$x=1;
if ($x == 1) 
  print '$x is equal to 1';
else
  print '$x is not equal to 1';
```

```php
// if...elseif...else

if (condition) {
  code to be executed if this condition is true;
}
elseif (condition) {
  code to be executed if first condition is false and this condition is true;
}
else {
  code to be executed if all conditions are false;
}

$x=1;
if($x == 1)
  print '$x is equal to 1';
else if($x == 2)
  print '$x is equal to 2';
else 
  print '$x is not equal to 1 or 2';
```

```php
// switch 

switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}

$num=20;      
switch($num){      
  case 10:      
    echo("number is equals to 10");      
    break;      
  case 20:      
    echo("number is equal to 20");      
    break;      
  case 30:      
    echo("number is equal to 30");      
    break;      
  default:      
    echo("number is not equal to 10, 20 or 30");      
}  
```

___

## PHP Loops

```
In PHP, we have the following loop types:

1. while
2. do...while
3. for - loops through a block of code a specified number of times
4. foreach - loops through a block of code for each element in an array
```

```php
// while

// loops through a block of code as long as the specified condition is true.

while (condition is true) {
  code to be executed;
}

$n = 1;    
while($n <= 10){    
  echo "$n ";    
  $n++;   
}    
```

```php
// do...while

// loops through a block of code once, and then repeats the loop as long as the specified condition is true

do {
  code to be executed;
} while (condition is true);

$x = 5;  
do {  
  echo "$x ";  
  $x++;  
} while ($x < 10);  
```

```php
// for

// Loops through a block of code a specified number of times.

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

for($n = 1; $n <= 10; $n++){    
  echo "$n ";
}
```

```php
// foreach

// Loops through a block of code for each element in an array. The foreach loop works only on arrays

foreach ($array as $value) {
  code to be executed;
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
// Peter = 35
// Ben = 37
// Joe = 43
```

___

## PHP Jump Statements

```php
// break

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
```

```php
// continue

$x = 0;
while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
```

```php
// goto

statement1;
statement2;
if (expression)
   goto label1;
statement3;
label1: statement4;

$x = 6;
if ($x % 2 == 0)
   goto abc;
echo "x is an odd number";
return;
abc: echo "x is an even number";
```

___
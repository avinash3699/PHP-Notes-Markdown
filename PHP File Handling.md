# File Handling

## readfile() function

```
The readfile() function reads a file and writes it to the output buffer.

It returns the number of bytes read on success.

It is useful if all you want to do is open up a file and read its contents.

Syntax - readfile(file, include_path, context)
```
```php
echo readfile("filename.txt");
```

___

## Open File - fopen()

```
A better method to open files is with the fopen() function.
This function gives you more options than the readfile() function

Syntax - fopen(file, mode, include_path, context)
```
```php
$myfile = fopen("filename.txt", "r") or die("Unable to open file!");
```

___


## Read File - fread()

```
The fread() function reads from an open file.

Syntax - fread(file, length)
```
```php
$myfile = fopen("filename.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("filename.txt"));
```

___


## Close File - fclose()

```
The fclose() function is used to close an open file.

The fclose() requires the name of the file (or a variable that holds the filename) we want to close

Syntax - fclose(filepointer)
```
```php
$myfile = fopen("filename.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("filename.txt"));
fclose($myfile);
```

___


## Read Single Line - fgets()

```
The fgets() function is used to read a single line from a file.

After a call to the fgets() function, the file pointer moves to the next line.

Syntax - fgets(file, length)
```
```php
$myfile = fopen("filename.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
```

___

## Check End-Of-File - feof()

```
The feof() function checks if the "end-of-file" (EOF) has been reached.

The feof() function is useful for looping through data of unknown length.

Syntax - feof(file)
```
```php
$myfile = fopen("filename.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
```

___

## Read Single Character - fgetc()

```
The fgetc() function is used to read a single character from a file.

After a call to the fgetc() function, the file pointer moves to the next character.

Syntax - fgetc(file)
```
```php
$myfile = fopen("filename.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
```

___

## Create File - fopen()

```
The fopen() function is also used to create a file.

If fopen() is used on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).
```
```php
$myfile = fopen("testfile.txt", "w")
```

___

## Write to File - fwrite()

```
The fwrite() function is used to write to a file.

Syntax - fwrite(file, string, length)
```
```php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Avi\n";
fwrite($myfile, $txt);
$txt = "Nash\n";
fwrite($myfile, $txt);
fclose($myfile);
```

___
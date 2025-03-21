<?php
//file handling is the ability to read and write files on the server, php has built in functions
// File Open, Read, Write, Close
// fopen() gives you more control over the file.

$file = 'extras/users.txt';

if(file_exists($file)){
    //echo readfile($file);
    $handle = fopen($file, 'r');
// fread() reads the file and returns the content as a string on success, or FALSE on failure.
    $contents = fread($handle, filesize($file));
// fclose() closes the file resource on success, or FALSE on failure.
    fclose($handle);
    echo $contents;
} else{   // Create the file
  // PHP_EOL is  end of line/line break.
    $handle = fopen($file, 'w');
    $contents = 'Jessie' . PHP_EOL . 'Johnny' .PHP_EOL .'Tonka';
// fwrite() writes the contents to the file and returns the number of bytes written on success, or FALSE on failure.
    fwrite($handle,$contents);
    fclose($handle);
}

/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/
?>
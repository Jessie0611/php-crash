<?php

if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}
//GET shows data in the url and is unsafe, use POST, REQUEST
/*To make the ubove code safer:
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $age;
    }
//or
*/
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name',
     FILTER_SANITIZE_SPECIAL_CHARS);
     $age = filter_input(INPUT_POST,'age',
     FILTER_SANITIZE_SPECIAL_CHARS);
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>? 
name=Jessie& age=33">Click</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
    method="POST">
        <div><label for="Name">Name: </label>
        <input type="text" name="name"></div>

        <div><label for="Age">Age: </label>
        <input type="text" name="age"></div>
    <input type="submit" value="submit" name="submit">
    </form>
    
</body>
</html>
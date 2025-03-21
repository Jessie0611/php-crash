<?php

/*if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}
GET shows data in the url and is unsafe, use POST, REQUEST
To make the ubove code safer:
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $age;
    }
//or

if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name',
     FILTER_SANITIZE_SPECIAL_CHARS);
     $age = filter_input(INPUT_POST,'age',
     FILTER_SANITIZE_SPECIAL_CHARS);  
}*/
//SESSIONS are a way to store info in variables to be used across miltiple pages, unlike cookies, sessions are stored on the server.
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',
     FILTER_SANITIZE_SPECIAL_CHARS);

     $password = $_POST['password']; //you dont need to sanitize passwords, they should be hashed in the database
     if($username == 'jess' && $password == 'password1'){
        $_SESSION['username'] = $username;
        header('Location:/php-crash/extras/dashboard.php');
     }
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
        <div><label for="username">Username: </label>
        <input type="text" name="username"></div>

        <div><label for="password">Password: </label>
        <input type="text" name="password"></div>
    <input type="submit" value="submit" name="submit">
    </form>
    
</body>
</html>
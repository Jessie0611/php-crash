<?php
/*  $_SESSIONS are a way to store info and variables to be used across multplie pages. Unlike cookies, sessions are stored on ther server.
Ex: a users id to get their content

*/
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',
     FILTER_SANITIZE_SPECIAL_CHARS);

     $password = $_POST['password']; //you dont need to sanitize passwords, they should be hashed in the database

if($username == 'jess' && $password == 'password1'){
    $_SESSION['username'] = $username;
    header('Location:/php-crash/extras/dashboard.php');
} else{
    echo 'Incorrect Login';
}

if 
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div><label for="username">Username: </label>
    <input type="text" name="username"></div>

    <div><label for="password">Password: </label>
    <input type="text" name="password"></div>
    <input type="submit" value="submit" name="submit">
</form>
    
</body>
</html>
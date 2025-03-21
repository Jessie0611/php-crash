<?php
/*
Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.
// Set a cookie
setcookie('name', 'Jess', time() + 86400 * 30); // 86400 = 1 day
// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);

$_SESSIONS are a way to store info and variables to be used across multplie pages. Unlike cookies, sessions are stored on ther server.
Ex: a users id to get their content
session_start(); // Must be called before accessing any session data
*/
session_start(); 
if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if ($username == 'jess' && $password == 'password') {
    // Set Session variable
    $_SESSION['username'] = $username;
    // Redirect user to another page
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>

  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
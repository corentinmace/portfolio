<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Connexion - Admin</title>
  </head>
  <body>
    <main id="adminPage">
      <div class="loginBox">
        <p>Admin login</p>
        <form action="assets/connexion.php">
          <label for="login">Login</label>
          <br>
          <input type="text" id="login" name="login">
          <br>
          <label for="passwd">Password</label>
          <br>
          <input type="password" id="passwd" name="passwd">
          <br>
          <input id="sendButton" type="submit" value="Login">
        </form>
      </div>
    </main>
  </body>
</html>

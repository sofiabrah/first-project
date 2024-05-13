<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../recipes/sign out.css" rel="stylesheet">
    <title>Sign Out</title>
</head>
<body>
 <?php
// Détruit toutes les données de la session
session_start();
session_unset();
session_destroy();
?>
  <div class="container">
        <h2>You have been successfully logged out!</h2>
        <p><a href="store.php">Log in again</a></p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php echo $_SERVER['PHP_SELF']; ?>
    Welcome <?php echo $_POST['name']; ?>！<br>
    Your email address is: <?php echo $_POST['email']; ?><br>
    &nbsp;Gender: <?php echo $_POST['gender']; ?>
</body>
</html>
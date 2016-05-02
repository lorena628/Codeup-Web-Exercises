<!DOCTYPE html>
<html>
<head>
    <title>Contact Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>   
<?php require_once 'header.php'; ?>

<div id="filler">
    <h1>this is the contact info page</h1>
    <form method="POST">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="userpassword" placeholder="Password"><br>
            <input type="submit" value="Login">
    </form>
</div>

<?php require_once 'footer.php'; ?>

</body>
</html>
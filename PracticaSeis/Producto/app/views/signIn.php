<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <title>User Sign In</title>
</head>
<body>
    <div class="signin">
        <form action="../controller/signInUser.php" method="POST">
            <div>
                <label >Username</label>
                <input type="text" name="nombreUser" required>
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="contrasenia" required>

            </div>
            <input type="submit" value="Sign In">

        </form>
        <button><a href="register.php">Create account</a></button>

    </div>
    
</body>
</html>
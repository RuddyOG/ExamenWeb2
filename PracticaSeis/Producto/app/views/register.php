<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <div class="register">
        <form action="../controller/registerUser.php" method="POST">
            <div>
                <label for="createUsername">Create Username</label>
                <input type="text" name="createUsername" id="createUsername" required>
            </div>

            <div>
                <label for="createPassword">Create Password</label>
                <input type="password" name="createPassword" id="createPassword" required>
                <label for="rewritePassword">Rewrite Password</label>
                <input type="password" name="rewritePassword" id="rewritePassword" required>
            </div>
            <input type="submit" value="Create Account">
        </form>
    </div>
    
</body>
</html>

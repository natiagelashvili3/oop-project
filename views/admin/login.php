<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="/assets/admin_resources/css/style.css">
</head>
<body>

    <form id="login-form" method="POST" action="/admin/login.php">
        <?php
            if(isset($_GET['u']) && $_GET['u'] == 0) {
                echo "<p>Invalid Data</p>";
            }
        ?>
        <h2>Admin Login</h2>

        <input type="text" name="username" class="text-field" placeholder="Username" />
        <input type="password" name="password" class="text-field" placeholder="Password" />
        
        <input type="submit" class="button" value="Log In" />

    </form>
    
</body>
</html>
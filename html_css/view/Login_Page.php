<!DOCTYPE html>
<html>
    <head>
        <title>Login Item-U</title>
            <link rel="stylesheet" type="text/css" href="../css/style.css">
            
    </head> 
    <body>
        <div class="login">
            <img src ="../img/LOGO.jpg" class="logo">
                <h1>Login Here</h1>
                <form action="API_Login.php" method="POST">
                    <p>Username</p>
                    <input type = "text" name="username" placeholder="Masukkan username">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Masukkan Password">
                    <input type="submit" name="login" value="Login">
                </form>
                <form>
                <a href="Registrasi_Page.php">Tidak Punya Akun?</a>
                </form>
        </div>
    </body>    
</html>
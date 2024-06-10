<html>
<title></title>
<body>
    <center>
        <h1>Login Form</h1>
        <?php
            if (isset($_GET["sub"])) {
                # code...
                $name = $_GET["name"];
                $pass = $_GET["password"];

                if (empty($name) || empty($pass)) {
                    # code...
                    echo"<font color = 'red'>username or password is empty.</font><br>";
                } 
                else if ($name =="admin" && $pass =="superuser") {
                    # code...
                    header("location:@home.php");
                }
                else if (strlen($name > 20)) {
                    echo"<font color = 'red'>username must be in 20 characters.</font><br>";
                }
                else {
                    # code...
                    echo"<font color = 'red'>username or password is wrong.</font><br>";
                }

            }
        ?>
        
        <form>
            <p>Name</p>
            <input type="text" name="name" /><br/>
            <p>Password</p>
            <input type="password" name="password" /><br/><br/>
            <input type="submit" value="Login" name="sub" />
        </form>
    </center>
</body>
</html>

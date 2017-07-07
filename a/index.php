 <?php
    // Start the session
    session_start();
    if(! isset($_SESSION["al"])) {
    header("location: ../index.html");
    exit();
}

?>
<!DOCTYPE html>
<html>
    
<head>
    <title>Login Form</title>
</head>

<body>

    <div id="form">
    <h2>Login Form</h2>
    <form id="getd" action="" method="post">
        <div class="imgcontainer">
            <img src="editor.png" alt="editor logo" class="avatar">
        </div>

        <div class="container">

            <label><b>Editor name</b></label>
            <input type="text" placeholder="Enter Editor name" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>

        </div>
    <form action="logout.php" method="post">
        <input type="submit" />
        </form>
    </form>
    </div>
</body>

</html>

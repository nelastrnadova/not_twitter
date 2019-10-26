<?php

include "kernel.php";

//TODO: Redirect to home if logged in

/*$test = new models\User("test", "test");
$test->createUser();*/

?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <span>Already registered? <a href="controllers/Login.php">Log in</a>!</span>
    <form method="post" action="controllers/Register.php">
        <label>Username: </label>
            <input type="text" id="username" name="username"><br>
        <label>Password: </label>
            <input type="password" id="password" name="password" oninput="checkPass()"><br>
        <label>Confirm password: </label>
        <input type="password" id="password_confirm" oninput="checkPass()"><br>
        <button type="submit" id="registerBtn" style="display:none;">Register</button>
        <label id="warningLabel">Password can't be left empty</label>
    </form>

    <script>
        function checkPass() {
            var warningLabel = document.getElementById("warningLabel");
            warningLabel.innerText = "Passwords must mach"
            if(document.getElementById("password").value == document.getElementById("password_confirm").value && document.getElementById("password").value != "") {
                document.getElementById("registerBtn").style.display = "";
                warningLabel.style.display = "none";
            } else {
                document.getElementById("registerBtn").style.display = "none";
                warningLabel.style.display = "";
            }
        }
    </script>
</body>
</html>

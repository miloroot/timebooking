<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<div class="header">
    <h1>Simplified Shiftbooking.</h1>
</div>
<div class="login-area">
    <form method="post" action="index.php" name="loginform">

        <label for="login_input_username"></label>
        <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Username" required />

        <br>

        <label for="login_input_password"></label>
        <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" placeholder="Password" required />

        <br>

        <!--<input type="submit"  name="login" value="Log in" />-->
        <button type="submit" name="login" class="btn">Log in</button>

    </form>
    <br>
    <a href="register.php">Register new account</a>
</div>
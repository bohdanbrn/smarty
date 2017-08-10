<div id="center">
    <h1>Registration</h1>
    <form action="form-config.php" name="reg_form" method="post" id="reg_form">
        <div class="formRow">
            <label>email:</label>
            <input class="formField" type="email" name="email" placeholder="email" autofocus required>
        </div>
        <div class="formRow">
            <div><label>Password:</label></div>
            <input class="formField" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="formRow">
            <div><label>Repeat password:</label></div>
            <input class="formField" type="password" name="repeat_password" placeholder="Repeat password" required>
        </div>
        <div class="formRow">
            <img src="../htdocs/captcha.php" id="reg_captcha" class="captcha">
            <input class="userAnswer" type="text" name="user_answer" placeholder="enter captcha" required>
        </div>
        <button id="regButton" class="formButton">Sign in</button>
    </form>
    <div id="form_message"></div>
</div>
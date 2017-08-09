<form id="login_form" name="login_form" method="post">
    <div class="formRow">
        <label>email:</label><br>
        <input class="formField" type="email" name="email" placeholder="email" autofocus required>
    </div>
    <div class="formRow">
        <div><label>Password:</label></div>
        <input class="formField" type="password" name="password" placeholder="Password" required>
        <div><label>Repeat password:</label></div>
        <input class="formField" type="password" name="repeat_password" placeholder="Repeat password" required>
    </div>
    <button class="formButton">Увійти</button>
</form>
<div id="form_message"></div>
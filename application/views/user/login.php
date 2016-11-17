
<div class="container" style="margin-top: 100px; margin-bottom: 100px">
    <div class="pedit-form-group clear_fix">
        <div class="pedit-label">

            <label for="">Вход:</label>

        </div>
        <form method="post" action="" id="login_form" class="pedit-form">
            <div class="pedit-input">

                <div class="inputs-wrapper">
                    <input type="text" name="auth_login" class="ep-input" id="name" placeholder="Логин">
                    <input type="text" name="auth_password" class="ep-input" id="pass" placeholder="Пароль">
                    <input type="submit" value="Войти" name="auth_submit" class="btn btn-purple">
                    <div id="error_login" style="color: #e0483f;"></div>
                </div>
            </div>
            <?php echo @$data[0]; ?>
        </form>
    </div>
</div>
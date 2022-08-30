<div class="container__form">
    <!-- FORM LOGIN -->
    <form action="" class="form" id="login">
        <h1 class="form__title">Login</h1>
        <!-- Username / E-mail -->
        <div class="form__message form__message--error">
            <!-- output error message -->
        </div>
        <div class="form__input-group">
            <input type="text" class="form__input" name="uname" id="uname" autofocus placeholder="Usuario ou E-mail">
            <div class="form__input--error-message"></div>
        </div>
        <!-- PASSWORD -->
        <div class="form__input-group">
            <input type="password" class="form__input" name="upassword" id="upassword" autofocus placeholder="Senha">
            <div class="form__input--error-message">
                <!-- output error message -->
            </div>
        </div>

        <!-- SUBMIT -->
        <div class="form___button">
            <button type="submit" class="form__button">Entrar</button>
        </div>

        <!-- RECOVERY PASSWORD -->
        <p class="form__text">
            <a href="#" class="form__link">Esqueceu a senha?</a>
        </p>
        <!-- CREATE ACCOUNT -->
        <p class="form__text">
            <a href="company.php" class="form__link" id="">Nao tem conta? Cadastre-se</a>
        </p>
    </form>
</div>
<div class="container__form">
    <!-- FORM LOGIN -->
    <form action="" class="form form__hidden" id="login">
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
            <a href="#" class="form__link" id="linkCreateAccount">Nao tem conta? Cadastre-se</a>
        </p>
    </form>

    <!-- FORM CREATE ACCOUNT -->
    <form action="" class="form" id="createAccount">
        <h1 class="form__title">Cadastrar Empresa</h1>
        <div class="form__message form__message--error">
            <!-- output error message -->
        </div>

        <!-- REGISTER NUMBER COMPANY -->
        <div class="form__input-group">
            <input type="text" maxlength="14" class="form__input" name="cnumber" id="cnumber" autofocus placeholder="Cnpj ex: 99999999000199">
            <div class="form__input--error-message"></div>
        </div>

        <!-- NAME COMPANY -->
        <div class="form__input-group">
            <input type="text" class="form__input" name="crazaosocialname" id="crazaosocialname" autofocus placeholder="Nome razao social">
            <div class="form__input--error-message"></div>
        </div>

        <!-- NAME FANTASY COMPANY -->
        <div class="form__input-group">
            <input type="text" class="form__input" name="cfantasyname" id="cfantasyname" autofocus placeholder="Nome fantasia">
            <div class="form__input--error-message"></div>
        </div>

        <!-- PHONE COMPANY -->
        <div class="form__input-group">
            <input type="tel" class="form__input" name="cphone" id="cphone" autofocus placeholder="Ex: (99) 9999-9999" pattern="[0-9]{(2)} [0-9]{5}-[0-9]{4}">
            <div class="form__input--error-message">
                <!-- output error message -->
            </div>
        </div>

        <!-- PASSWORD -->
        <div class="form__input-group">
            <input type="password" class="form__input" name="upassword" id="upassword" autofocus placeholder="Senha">
            <div class="form__input--error-message">
                <!-- output error message -->
            </div>
        </div>

        <!-- PASSWORD -->
        <div class="form__input-group">
            <input type="password" class="form__input" name="upassword" id="upassword" autofocus placeholder="Confirmar senha">
            <div class="form__input--error-message">
                <!-- output error message -->
            </div>
        </div>

        <!-- SUBMIT -->
        <div class="form___button">
            <button type="submit" class="form__button">Cadastrar</button>
        </div>

         <!-- SIGN IN -->
         <p class="form__text">
            <a href="#" class="form__link" id="linkLogin">Ja tem uma conta? Acesse agora</a>
        </p>
    </form>
</div>
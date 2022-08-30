<div class="container__form">
    <!-- FORM LOGIN -->
    <form action="GET" class="form" id="login">
        <h1 class="form__title">Consulta CNPJ</h1>
        <!-- COMPANY NUMBER -->
        <div class="form__message form__message--error">
            <!-- output error message -->
        </div>
        <div class="form__input-group">
            <input type="text" class="form__input" name="scompany" id="scompany" autofocus placeholder="Ex: 99.999.999/0001-99">
            <div class="form__input--error-message"></div>
        </div>

        <!-- SUBMIT -->
        <div class="form___button">
            <button type="submit" class="form__button" id="linkCreateAccount">Consultar</button>
        </div>
    </form>

    <!-- FORM CREATE ACCOUNT -->
    <form action="" class="form__create--account form__hidden" id="createAccount">
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
            <input type="text" class="form__input" name="csocialname" id="csocialname" autofocus placeholder="Nome razao social">
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

        <!-- TERMS AND CONDITIONS -->
        <div class="form__input-group">
            <input type="checkbox">
            <a href="#"> Concorda com os termos e condicoes?</a>
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
            <a href="index.php" class="form__link" id="">Ja tem uma conta? Acesse agora</a>
        </p>
    </form>
</div>
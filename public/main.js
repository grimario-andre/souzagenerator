document.addEventListener("DOMContentLoaded", () =>
{
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form__hidden");
        createAccountForm.classList.remove("form__hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e =>
    {
        e.preventDefault();
        loginForm.classList.remove("form__hidden");
        createAccountForm.classList.add("form__hidden");
    });
});

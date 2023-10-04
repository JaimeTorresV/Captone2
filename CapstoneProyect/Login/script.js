document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        const username = document.querySelector("input[name='username']").value;
        const password = document.querySelector("input[name='password']").value;
        const email = document.querySelector("input[name='email']").value;
        const errorContainer = document.querySelector(".error");

        if (!username || !password || !email) {
            errorContainer.textContent = "Por favor, completa todos los campos.";
            event.preventDefault(); // Evita que se envíe el formulario
        }
    });
});

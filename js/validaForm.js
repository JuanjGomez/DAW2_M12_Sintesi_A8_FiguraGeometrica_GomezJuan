function validarSelect() {
    var select = document.getElementById('figura').value;
    var errorMsg = document.getElementById('errorSelect');
    if (select.value === "") {
        errorMsg.textContent = "Por favor, selecciona una figura.";
        select.style.borderColor = "red";
    } else {
        errorMsg.textContent = "";
        select.style.borderColor = "";
    }
}
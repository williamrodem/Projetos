function validar() {
    var name = document.getElementById("name");
    if (crm.value === crm.value) {
        arlet("Médico já cadastrado");
        name.focus();
    }
}
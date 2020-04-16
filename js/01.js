const r_usuario = document.getElementById("r_usuario");
const r_contrasena = document.getElementById("r_contrasena");
const btnInsert = document.getElementById('btnInsert');
const btnCheck = document.getElementById('btnCheck');
const namesArr = [];
const passArr = [];

btnInsert.onclick = function() {

    namesArr.push(r_usuario.value);
    localStorage.setItem('users', JSON.stringify(namesArr));
    passArr.push(r_contrasena.value);
    localStorage.setItem("pass", JSON.stringify(passArr));
};

btnCheck.onclick = function() {

    const storedUs = JSON.parse(localStorage.getItem('users'));
    const storedPs = JSON.parse(localStorage.getItem('pass'));


    console.log(storedUs);
    console.log(storedPs);

    const userName = document.getElementById("inp_usuario");
    const userPassword = document.getElementById("inp_contrasena");
    var i = 0;
    for (var r = 0; r < storedUs.length; r++) {
        console.log(storedUs[r]);
        if (userName.value == storedUs[r]) {
            i = r;
        }
    }
    if (storedPs[i] == userPassword.value) {
        alert('Ingreso exitoso');
        localStorage.setItem('usuarioActual', storedUs[i]);
        window.location.href = "https://cpallares96.github.io/CRUDZip1/";

    } else {
        alert('Usuario o contraseña invalida');
    }

};
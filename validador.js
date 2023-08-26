function validarInput() {
    var input = document.getElementById("input");
    var valor = input.value;
    if (isNaN(valor) || valor.length != 11) {
      alert("Error: el valor debe ser un número entero de 11 caracteres.");
      input.value = "";
      return false;
    }
    return true;
  }
  
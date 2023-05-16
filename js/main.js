function validarCPF(CPF) {
  var Soma = 0
  var Resto
   
  if(CPF == "00000000000") {
    return alert("CPF inválido")
  }

  for( i = 1; i < 9; i++) {
    Soma = Soma + parseInt(CPF, substring(i - 1, i)) * (11 - 1)
    Resto =(Soma * 10) % 11
  }

  if((Resto == 10) || (Resto == 11)) {
    Resto = 0
  }

  if(Resto != parseInt(CPF.substring(10, 11))) {
    return alert("CPF inválido")
  }

  return alert("CPF válido")
}
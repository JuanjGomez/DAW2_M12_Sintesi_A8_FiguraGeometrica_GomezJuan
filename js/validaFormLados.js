function ladoUno(){
    let ladoUno = document.getElementById('lado1')
    let ladoUnovalor = document.getElementById('lado1').value
    let errorLadoUno = document.getElementById('errorLadoUno')
    if(ladoUnovalor == null || ladoUnovalor.length == 0 || /^\s+$/.test(ladoUnovalor)){
        errorLadoUno.innerHTML = "El campo no puede estar vacío."
        ladoUno.style.borderColor = "red"
        return false
    } else if(ladoUnovalor <= 0){
        errorLadoUno.innerHTML = "El valor debe ser mayor a cero."
        ladoUno.style.borderColor = "red"
        return false
    } else {
        errorLadoUno.innerHTML = ""
        ladoUno.style.borderColor = ""
        ladoUnovalor = ""
        return true
    }
}
function ladoDos(){
    let ladoDos = document.getElementById('lado2')
    let ladoDosValor = document.getElementById('lado2').value
    let errorLadoDos = document.getElementById('errorLadoDos')
    if(ladoDosValor == null || ladoDosValor.length == 0 || /^\s+$/.test(ladoDosValor)){
        errorLadoDos.innerHTML = "El campo no puede estar vacío."
        ladoDos.style.borderColor = "red"
        return false
    } else if(ladoDosValor <= 0){
        errorLadoDos.innerHTML = "El valor debe ser mayor a cero."
        ladoDos.style.borderColor = "red"
        return false
    } else {
        errorLadoDos.innerHTML = ""
        ladoDos.style.borderColor = ""
        ladoDosValor = ""
        return true
    }
} 
function ladoTres(){
    let ladoTres = document.getElementById('lado3')
    let ladoTresValor = document.getElementById('lado3').value
    let errorLadoTres = document.getElementById('errorLadoTres')
    if(ladoTresValor == null || ladoTresValor.length == 0 || /^\s+$/.test(ladoTresValor)){
        errorLadoTres.innerHTML = "El campo no puede estar vacío."
        ladoTres.style.borderColor = "red"
        return false
    } else if(ladoTresValor <= 0){
        errorLadoTres.innerHTML = "El valor debe ser mayor a cero."
        ladoTres.style.borderColor = "red"
        return false
    } else {
        errorLadoTres.innerHTML = ""
        ladoTres.style.borderColor = ""
        ladoTresValor = ""
        return true
    }
}
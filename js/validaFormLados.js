function ladoUno(){
    let ladoUno = document.getElementById('lado1').value
    let errorLadoUno = document.getElementById('errorLadoUno')
    if(ladoUno == null || ladoUno.length == 0 || /^\s+$/.test(ladoUno)){
        errorLadoUno.innerHTML = "El campo no puede estar vacío."
        ladoUno.style.borderColor = "red"
        return false
    } else if(isNaN(ladoUno)){
        errorLadoUno.innerHTML = "El valor debe ser un numero."
        ladoUno.style.borderColor = "red"
        return false
    } else if(ladoUno <= 0){
        errorLadoUno.innerHTML = "El valor debe ser mayor a cero."
        ladoUno.style.borderColor = "red"
        return false
    } else {
        errorLadoUno.innerHTML = ""
        ladoUno.style.borderColor = ""
        return true
    }
}
function ladoDos(){
    let ladoDos = document.getElementById('lado2').value
    let errorLadoDos = document.getElementById('errorLadoDos')
    if(ladoDos == null || ladoDos.length == 0 || /^\s+$/.test(ladoDos)){
        errorLadoDos.innerHTML = "El campo no puede estar vacío."
        ladoDos.style.borderColor = "red"
        return false
    } else if(isNaN(ladoDos)){
        errorLadoDos.innerHTML = "El valor debe ser un numero."
        ladoDos.style.borderColor = "red"
        return false
    } else if(ladoDos <= 0){
        errorLadoDos.innerHTML = "El valor debe ser mayor a cero."
        ladoDos.style.borderColor = "red"
        return false
    } else {
        errorLadoDos.innerHTML = ""
        ladoDos.style.borderColor = ""
        return true
    }
} 
function ladosTres(){
    let ladoTres = document.getElementById('lado3').value
    let errorLadoTres = document.getElementById('errorLadoTres')
    if(ladoTres == null || ladoTres.length == 0 || /^\s+$/.test(ladoTres)){
        errorLadoTres.innerHTML = "El campo no puede estar vacío."
        ladoTres.style.borderColor = "red"
        return false
    } else if(isNaN(ladoTres)){
        errorLadoTres.innerHTML = "El valor debe ser un numero."
        ladoTres.style.borderColor = "red"
        return false
    } else if(ladoTres <= 0){
        errorLadoTres.innerHTML = "El valor debe ser mayor a cero."
        ladoTres.style.borderColor = "red"
        return false
    } else {
        errorLadoTres.innerHTML = ""
        ladoTres.style.borderColor = ""
        return true
    }
}
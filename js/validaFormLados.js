function ladoUno(){
    let ladoUno = document.getElementById('lado1').value
    let errorLadoUno = document.getElementById('errorLadoUno')
    if(ladoUno == null || ladoUno.length == 0 || /^\s+$/.test(ladoUno)){
        errorLadoUno.innerHTML = "El campo no puede estar vacío."
        return false
    } else if(isNaN(ladoUno)){
        errorLadoUno.innerHTML = "El valor debe ser un numero."
        return false
    } else if(ladoUno <= 0){
        errorLadoUno.innerHTML = "El valor debe ser mayor a cero."
        return false
    } else {
        errorLadoUno.innerHTML = ""
        return true
    }
}
function ladoDos(){
    let ladoDos = document.getElementById('lado2').value
    let errorLadoDos = document.getElementById('errorLadoDos')
    if(ladoDos == null || ladoDos.length == 0 || /^\s+$/.test(ladoDos)){
        errorLadoDos.innerHTML = "El campo no puede estar vacío."
        return false
    } else if(isNaN(ladoDos)){
        errorLadoDos.innerHTML = "El valor debe ser un numero."
        return false
    } else if(ladoDos <= 0){
        errorLadoDos.innerHTML = "El valor debe ser mayor a cero."
        return false
    } else {
        errorLadoDos.innerHTML = ""
        return true
    }
} 
function ladosTres(){
    let ladoTres = document.getElementById('lado3').value
    let errorLadoTres = document.getElementById('errorLadoTres')
    if(ladoTres == null || ladoTres.length == 0 || /^\s+$/.test(ladoTres)){
        errorLadoTres.innerHTML = "El campo no puede estar vacío."
        return false
    } else if(isNaN(ladoTres)){
        errorLadoTres.innerHTML = "El valor debe ser un numero."
        return false
    } else if(ladoTres <= 0){
        errorLadoTres.innerHTML = "El valor debe ser mayor a cero."
        return false
    } else {
        errorLadoTres.innerHTML = ""
        return true
    }
}
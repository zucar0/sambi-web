var inputusername = 
document.getElementById('username');
inputusername.oninvalid = function(event){
    event.target.setCustomValidity('El usuario debe contener únicamente letras minúsculas. Ejemplo: john');
}
var input = document.getElementById('username');
var form = document.getElementById('form');
var elem = document.createElement('div');
    elem.id = 'notify';
    elem.style.display = 'none';
    form.appendChild(elem);

 
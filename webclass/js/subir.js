

btn = document.getElementById('boton');
profesor = document.getElementById('profesor');
tema = document.getElementById('tema');
error = document.getElementById('error');


function validar(e) {

    if(profesor.value == ''){
        e.preventDefault();
       profesor.style.border = '1px solid red';
       error.innerHTML= 'Por favor llenar los campos vacios';

    }else{
        profesor.style.border = '1px solid #535353';

    }
    
    
    if(tema.value == ''){

        e.preventDefault();
        tema.style.border = '1px solid red';
        error.innerHTML= 'Por favor llenar los campos vacios';

    }else{
        profesor.style.border = '1px solid #535353';

    }
    
}

btn.addEventListener('click',function(e){
    validar(e);
})


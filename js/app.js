
// confiemmacion de contraseña



document.addEventListener('DOMContentLoaded', function(){

    document.getElementById('form_registro')
        .addEventListener('submit', function(event) {
            let password = document.getElementById('password');
            let confirmPassword = document.getElementById('confirmarPassword');


    if(password != confirmPassword){
        document.getElementById('confirmarPassword')
        .classList.add('is_invalid ');
        
        event.preventDefault();
    }else{
        document.getElementById('confirmarPassword')
        .classList.remove('is_invalid');
    }
    });
});






/*----------------------------------------- */
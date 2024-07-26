document.addEventListener('DOMContentLoaded', (e) => {
    const inputSubscribir = document.querySelector('#subscribir');
    const subscribeteBtn = document.querySelector('#suscribete-btn');
    const spinner = document.querySelector('#spinner');

    if(inputSubscribir) {
        inputSubscribir.addEventListener('input', subscribirse);
    }
    
    if(subscribeteBtn) {
        subscribeteBtn.addEventListener('click', enviarSubscripcion);
    }
    
    function subscribirse(e) {
        const email = e.target.value;
        validarEmail(email);
    }

    function validarEmail(email) {
        const emailRegex =  new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/, "gm");
        const isValidEmail = emailRegex.test(email);

        const errorExist = document.querySelector('.error-email');
        if(errorExist) {
            errorExist.remove();
        }
        
        if (!isValidEmail) {
            const errorEmail = document.createElement('P');
            errorEmail.textContent = 'Escribe un email valido...';
            errorEmail.classList.add('error-email');
            inputSubscribir.parentNode.insertBefore(errorEmail, inputSubscribir.nextSibling);
        }
    }
    
    function enviarSubscripcion(e) {
        e.preventDefault();
        console.log('enviando email')
        const email = inputSubscribir.value;
        validarEmail(email);

        //Mostrar el spinner
        spinner.style.display = 'block';

        setTimeout(() => {
            spinner.style.display = 'none';
        }, 3000);

        
    }

});



// const isValidEmail = emailRegex.test(email);
//         const suscripto = document.createElement('P');
//         suscripto.textContent = 'Te suscribiste correctamente';
//         suscripto.classList.add('suscripto');
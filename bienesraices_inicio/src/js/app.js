document.addEventListener('DOMContentLoaded', function(){
    eventListener(); 
    darkMode();
})
function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}

function eventListener(){
    const  mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click',navegacionResponsive);
}

function navegacionResponsive(){
    console.log('desde navegacionResponsive');
    const navegacion = document.querySelector('.navegacion'); 

    navegacion.classList.toggle('mostrar');
    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // }else{
    //     navegacion.classList.add('mostrar');
    // }
}
(function () {
    
    var enlaceBorrar = document.getElementById('enlaceBorrar');
    
    var enlacesBorrar = document.getElementsByClassName('enlaceBorrar');
    
    for(var i = 0; i < enlacesBorrar.length; i++){
        enlacesBorrar[i].addEventListener('click', getConfirmation2);
    }
    
    if(enlaceBorrar) {
        enlaceBorrar.addEventListener('click', getConfirmation);
    }
    
    function getConfirmation() {
           var retVal = confirm("Seguro que quieres borrar el ticket ?");
           if(retVal) {
              var formDelete = document.getElementById('formDelete');
              formDelete.submit();
           }
    }
    
    function getConfirmation2() {
           var retVal = confirm("Seguro que quieres borrar el ticket ?");
           if(retVal) {
           }
    }
    
})();
(function () {

    let enlaceBorrar = document.getElementById('enlaceBorrar');
    let enlacesBorrar = document.getElementsByClassName('enlaceBorrar');
    
    let enlacesComprar = document.getElementsByClassName('enlaceComprar');

    for(var i = 0; i < enlacesBorrar.length; i++) {
        enlacesBorrar[i].addEventListener('click', getClassConfirmation);
    }

    if(enlaceBorrar) {
        enlaceBorrar.addEventListener('click', getConfirmation);
    }
    
    for(var i = 0; i < enlacesComprar.length; i++){
        enlacesComprar[i].addEventListener('click', buyClassButton);
    }

    function getConfirmation() {
        let retVal = confirm('¿Seguro que quieres borrar el ticket?');
        if(retVal) {
            var formDelete = document.getElementById('formDelete');
            formDelete.submit();
        }
    }

    function getClassConfirmation(event) {
        let id = event.target.dataset.id; // Obtiene el id del elemento
        let name = event.target.dataset.name;
        let retVal = confirm('¿Seguro que quieres borrar el ticket #' + id + ' de nombre ' + name + '?');
        if(retVal) {
            var formDelete = document.getElementById('formDelete');
            formDelete.action += '/' + id;
            formDelete.submit();
        } else {
            abc();
            abc(1, 2, 3, 4);
        }
    }

    function abc() {
        console.log(arguments.length);
        console.log(arguments);
    }
    
    function buyClassButton(event) {
        let id = event.target.dataset.id;
        let name = event.target.dataset.name;
        let retVal = confirm('Va a comprar un ticket ' + name + ' con id ' + id + '. Confirma para proceder con la compra.');
        if(retVal) {
            var formBuy = document.getElementById('formBuy');
            formBuy.action += '/' + id;
            formBuy.submit();
            alert('Compra realizada con éxito!');
        }else {
            alert('Compra cancelada');
        }
    }

})();
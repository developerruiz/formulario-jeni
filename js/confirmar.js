function confirmacion(e){
    if (confirm("¿Está seguro que desea eliminar este registro?")) {
               return true;
               }else{
        e.preventDefault();
    }
}
let btnEliminar =  document.querySelectorAll('.item-delete');
for(var i=0; i < btnEliminar.length; i++){
    btnEliminar[i].addEventListener('click', confirmacion);
}
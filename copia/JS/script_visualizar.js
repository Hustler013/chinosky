const tabla_productos = {
    encabezado:['N°','Producto','Descripcion Producto','UNIDADES','PRECIO', 'TOTAL']
}

//funciones
function cargarTabla(){
    for(var i=0 ; i<tabla_productos.encabezado.length ; i++){
        document.getElementById('tabla_productos').innerHTML+=`<td>${tabla_productos.encabezado[i]} </td>`;
    }
}

//eventos
cargarTabla();
//COMPONENTES DEL REGISTRO
const componentes_formulario={
    type: ['text','text', 'number', 'text', 'text', 'text' ,'submit'],
    name: ['producto','descripcion', 'stock', 'precio' , 'preciod','preciov','agregar'],
    value: ['','','','','','','agregar'],
    class: ['producto','producto','producto','producto', 'producto', 'producto', 'producto boton'],
    placeholder:['nombre del producto','descripción', 'unidades', 'precio', 'precio por docena', 'precio de venta', '']
};

let text="";
text=`<section class="form-register">
<h4>Registro Producto</h4>`;
let components= document.getElementById("componentes");

//funciones
function cargarFormulario(){
    for(var i=0; i<componentes_formulario.type.length; i++){
        text+=`<input type="${componentes_formulario.type[i]}" 
        name="${componentes_formulario.name[i]}" 
        id="${componentes_formulario.name[i]}" 
        value="${componentes_formulario.value[i]}" 
        class="${componentes_formulario.class[i]}" 
        placeholder="${componentes_formulario.placeholder[i]}"/>`; 
    }
    text+=`</section>`;
    return text;
}

//evento
components.innerHTML=cargarFormulario();
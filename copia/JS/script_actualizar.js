//COMPONENTES DE LA ACTUALIZACION
const componentes_formulario={
    type: ['text','text','text','text','text','text','text','submit'],
    name: ['id','nombre_producto','descripcion','stock','precio','precio_docena','precio_venta','agregar'],
    value: ['','','','','','','','agregar'],
    class: ['producto','producto','producto','producto','producto','producto','producto','producto boton'],
    placeholder:['id de producto a actualizar','nombre del producto a actualizar', 'descripcion a actualizar', 'unidades a actualizar','precio a actualizar','precio por docena a actualiar','precio de venta a actualizar']        
};
let text="";
text=`<section class="form-register">
<h4>Actualizar Producto</h4>`;
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

window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAI' +
                     'AAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

window.mostrarVistaPrevia = function mostrarVistaPrevia(){
 
    var Archivos,Lector;
 
    //Para navegadores antiguos
    if(typeof FileReader !== "function" ){
        jQuery('#infoNombre').text('[Vista previa no disponible]');
        jQuery('#infoTamaÃ±o').text('(su navegador no soporta vista previa!)');
        return;
    }
 
    Archivos = jQuery('#archivo1')[0].files;
    if(Archivos.length>0){
         
        Lector = new FileReader();
        Lector.onloadend = function(e){
            var origen,
                tipo;
 
            //EnvÃ­a la imagen a la pantalla
            origen = e.target; //objeto FileReader
             
            //Prepara la informaciÃ³n sobre la imagen
            tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));
 
          
            
            //Si el tipo de archivo es vÃ¡lido lo muestra,
            //sino muestra un mensaje
            if(tipo!=='image/jpeg' && tipo!=='image/png' && tipo!=='image/gif' && tipo!=='image/bmp' ){
               jQuery('#vistaPrevia1').attr('src', window.imagenVacia);
				 jQuery('#p1').attr('src', window.imagenVacia);
                alert('El formato de imagen no es vÃ¡lido: debe seleccionar una imagen JPG, PNG o GIF o BMP.');
				 jQuery('#cargar').css('background-image', 'url(images/camara.png)');
            }else{
                jQuery('#vistaPrevia1').attr('src', origen.result);
				jQuery('#cargar').css('background-image', 'url(images/)');
				jQuery('#p1').attr('src', origen.result);
				jQuery('#p1').attr('alt', "1");
				
            }
 
        };
        Lector.onerror = function(e){
            console.log(e)
        }
        Lector.readAsDataURL(Archivos[0]);
 
    }else{
        var objeto = jQuery('#archivo1');
        objeto.replaceWith(objeto.val('').clone());
        jQuery('#vistaPrevia1').attr('src', window.imagenVacia);
        jQuery('#p1').attr('src', window.imagenVacia);
        
    };
 
 
};
 
//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME = function obtenerTipoMIME(cabecera){
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}
 
jQuery(document).ready(function(){
     
    //Cargamos la imagen "vacÃ­a" que actuarÃ¡ como Placeholder
    //jQuery('#vistaPrevia1').attr('src', window.imagenVacia);
 	//jQuery('#p1').attr('src', window.imagenVacia);
    //El input del archivo lo vigilamos con un "delegado"
    jQuery('#botonera').on('change', '#archivo1', function(e){
		
        window.mostrarVistaPrevia();
    });
 
    //El botÃ³n Cancelar lo vigilamos normalmente
    jQuery('#cancelar1').on('click', function(e){
        var objeto = jQuery('#archivo1');
        objeto.replaceWith(objeto.val('').clone());
 
       jQuery('#vistaPrevia1').attr('src', window.imagenVacia);
		 jQuery('#p1').attr('src', window.imagenVacia);
		 jQuery('#cargar').css('background-image', 'url(images/camara.png)');
        
    });
 
});

$(document).ready(function() {
/* En el change del campo file, cambiamos el val del campo ficticio por el del verdadero */
$('#archivo1').change(function(){
	
$('#url-archivo1').val($(this).val());
 

  


});
});

//********************************************************************************************************








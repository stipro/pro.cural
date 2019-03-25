// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();
}
 
// Instanciamos el botón, para que al hacer Click en el, se proceda a lanzar la Notificación o un mensaje para actualizar el Navegador

// Validamos si el Navegador soporta las Notificaciones en HTML 5
function onNotificationButtonClick() {
	if (!isNotificationSupported()) {
		logg("Tu navegador no soporta Notificaciones. Por favor, utiliza una versión Reciente del Navegador Google Chrome o Safari.");
	return;
	}
 
	// Si el Navegador soporta las Notificaciones HTML 5, entonces que proceda a Notificar
	var notificacion = new Notification("AYA TRANSPORTE", {
	    icon: '2DC.jpg',
		body: 'Bienvenido al sistema de transporte, puede desactivar o cambiar el tipo de notificacion en configuraciones',
		vibrate: [100,100,100]
	});
 
	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
	notificacion.onclick = function() {
		window.open("http://gmail.com/");
	};					
}
document.getElementById("btn_notificar").addEventListener("click", onNotificationButtonClick);		
// Solicitamos los Permisos del Sistema
function requestPermissions() {
 
}
 
// Luego del Permiso del Sistema, le indicamos que nos Muestre la Notificación
function isNotificationSupported() {
	return ("Notification" in window);
}
 
// Mostramos el Mensaje de la Notificación
function logg(mensaje) {
	notificador.innerHTML += "<p>"+mensaje+"</p>";
}
$(document).ready(function(){
	onNotificationButtonClick();
});

    
       

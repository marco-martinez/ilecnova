function mostrarOcultar(id) {
   if (document.getElementById) {
      var menu = document.getElementById(id);
      menu.style.display = (menu.style.display == 'none') ? 'block' : 'none';
   }
}
window.onload = function(){
   mostrarOcultar('mostrar');
   mostrarOcultar('menu-solar');
   mostrarOcultar('menu-accesorios');
   mostrarOcultar('menu-refrigeracion');
   mostrarOcultar('menu-eolica');
   mostrarOcultar('menu-empresa');
   mostrarOcultar('menu-recursos');
}

/*
window.onload = function(){
   mostrarOcultar('menu-solar');
}
window.onload = function(){
   mostrarOcultar('menu-accesorios');
}
window.onload = function(){
   mostrarOcultar('menu-refrigeracion');
}
window.onload = function(){
   mostrarOcultar('menu-eolica');
}
window.onload = function(){
   mostrarOcultar('menu-empresa');
}
window.onload = function(){
   mostrarOcultar('menu-recursos');
}

*/
// Con esto haremos que al dar click en la imagen "menu.png" muestre u oculte el contenido.
const sidebar = document.getElementById('mySidebar');
const vistas = document.getElementById('vistas');
const barra=document.getElementById('bhoriz')

//expander la barra horizontal
sidebar.addEventListener('mouseover', function() {
    sidebar.classList.add('expanded');
});
//constraer la barra horizontal
sidebar.addEventListener('mouseout', function() {
    sidebar.classList.remove('expanded');
});


//traer las vistas con jquery
$(document).ready(function () {
    // productos
    $("#produc").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/Producto.html"); 
    });
    // Usuarios
    $("#usuario").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/Usuarios.html"); 
    });
    //clientes
    $("#cliente").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/cliente.html"); 
    });
    //Proveedor
    $("#prove").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/proveedor.html"); 
    });
    //ventas
    $("#venta").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/ventas.html"); 
    });
     //almacen
     $("#alma").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/almacen.html"); 
    });
    //editarperfil
    $("#perfil").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/perfil.php"); 
    });
    //verperfil
   $("#verperfil").click(function (e) {
      e.preventDefault();
    $("#vistas").load("view/panel_control.php", function() {
    
    $("#vistas").hide(); 
    });
  $("#perfilModal").modal('show'); 
  
  });
  //muestra panelcontrol
  $("#mcerrar").click(function (e) {
    e.preventDefault(); 
    $("#vistas").show(); 
  });

  $("#irperfil").click(function (e) {
    e.preventDefault(); 
    $("#vistas").load("view/perfil.php"); 
  });
  });


 
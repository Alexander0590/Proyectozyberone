<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Document</title>
   <link rel="stylesheet" href="estilos/estilos_panel.css">
   <link rel="shortcut icon" href="img/logo_respaldo1.ico" type="image/x-icon">
</head>
<body>
<!-- Menu de nacegacion horizontal -->
<div class="container-fluid d-flex justify-content-end">
    <div class="perfil"  data-bs-toggle="modal" data-bs-target="#perfilModal">
      <div id="foto">
        <img src="img/fotoperfil.jpg" alt="Foto de perfil">
      </div>
      <div id="nombre">
        <h5>Juan Pérezssssssssssss</h5>
      </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="perfilModal" tabindex="-1" aria-labelledby="perfilModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #060614; color: #ffffff;">
      <div class="modal-header" style="border-bottom: 1px solid #8773e7;">
        <h5 class="modal-title" id="perfilModalLabel"><b>Información del perfil</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body ">
        <div id="foto-modal " class="text-center mb-3">
          <img src="img/fotoperfil.jpg" alt="Foto de perfil" class="img-fluid rounded-circle" style="width: 150px; height: 150px; margin-bottom: 10px ;">
        </div>
        <div text-fill>
        <p><strong>Nombre:</strong> Juan Pérez</p>
        <p><strong>Usuario:</strong> xd</p>
        <p><strong>Correo Electrónico:</strong> juanperez@example.com</p>
        <p><strong>Teléfono:</strong> 123-456-7890</p>
        <p><strong>Rol:</strong> Administrador </p>
        </div>
     
      </div>
      <div class="modal-footer" style="border-top: 1px solid #8773e7;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #8773e7; color: #ffffff;">Cerrar</button>
        <button type="button" class="btn" style="background-color: #8773e7; color: #ffffff;">Editar Información</button>
      </div>
    </div>
  </div>
</div>
<!-- Menu Navegacion Vertical -->
<div class="sidebar v-a" id="mySidebar">
    <i class="bi bi-list menu-btn" onclick="toggleSidebar()" id="xd"></i>
    <a href="#"><i class="bi bi-bar-chart-line"></i><span>Dashboard</span></a>
    <div class="menu-item">
        <a href="#"><i class="bi bi-person-circle"></i><span>Perfil</span></a>
        <div class="submenu">
            <a href="#">Ver perfil</a>
            <a href="#">Editar perfil</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-cart"></i><span>Ventas</span></a>
        <div class="submenu">
            <a href="#">Ventas mensuales</a>
            <a href="#">Historial de ventas</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-box-seam"></i><span>Almacén</span></a>
        <div class="submenu">
            <a href="#">Inventario</a>
            <a href="#">Movimientos</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-bag"></i><span>Productos</span></a>
        <div class="submenu">
            <a href="#">Agregar producto</a>
            <a href="#">Lista de productos</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-people"></i><span>Usuarios</span></a>
        <div class="submenu">
            <a href="#">Ver usuarios</a>
            <a href="#">Agregar usuario</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-person"></i><span>Clientes</span></a>
        <div class="submenu">
            <a href="#">Ver clientes</a>
            <a href="#">Agregar cliente</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-truck"></i><span>Proveedores</span></a>
        <div class="submenu">
            <a href="#">Lista de proveedores</a>
            <a href="#">Agregar proveedor</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="bi bi-file-earmark-bar-graph"></i><span>Reportes</span></a>
        <div class="submenu">
            <a href="#">Ver reportes</a>
            <a href="#">Generar reporte</a>
        </div>
    </div>
    <a href="#"><i class="bi bi-box-arrow-left"></i><span>Cerrar Sesión</span></a>
</div>
<div class="container" id="menu-vistas">

</div>

<script src="javascrip/panel.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


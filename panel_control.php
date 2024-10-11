<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Document</title>
   
    <style>
        .sidebar {
            height: 100vh;
            width: 70px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            transition: width 0.3s;
            overflow-x: hidden;
        }

        .sidebar.expanded  {
            width: 250px; 
        }

        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #ffffff;
            background-color: #495057;
        }

        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar:not(.expanded) a span {
            display: none;
        }

        .menu-btn {
            font-size: 24px;
            color: #ddd;
            cursor: pointer;
            display: block;
            margin: 10px 20px;
        }
        .sidebar:not(.expanded) .menu-btn {
            margin: 10px auto;
        }

    </style>
    <link rel="stylesheet" href="/estilos/estilos _panel.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
  <div class="container-fluid">
    
  </div>
</nav>

<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <i class="bi bi-list menu-btn " onclick="toggleSidebar()"></i>
    <a href="#"><i class="bi bi-bar-chart-fill"></i><span> Ventas</span></a>
    <a href="#"><i class="bi bi-box-seam"></i><span> Almacén</span></a>
    <a href="#"><i class="bi bi-bag"></i><span> Productos</span></a>
    <a href="#"><i class="bi bi-people"></i><span> Usuarios</span></a>
    <a href="#"><i class="bi bi-person"></i><span> Personas</span></a>
    <a href="#"><i class="bi bi-truck"></i><span> Proveedores</span></a>
</div>

<script src="javascrip/panel.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


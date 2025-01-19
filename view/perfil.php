<?php
session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php?dato=" . urlencode("Debe iniciar sesión para acceder."));
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid mt-5 d-flex justify-content-center  ms-5 animate__animated animate__fadeIn" >
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mb-3"style="background-color: #060614; color: #ffffff;">
                <div class="card-header text-center"  style="border-bottom: 1px solid #8773e7;">
                    <b><i class="bi bi-person-circle"></i> Editar Perfil</b>
                </div>
                <div class="card-body">
                    <!-- Foto de perfil centrada -->
                    <div class="text-center mb-3">
                        <img src="img/fotoperfil.jpg" id="perfilfo" alt="Foto de perfil" class="img-fluid rounded-circle" style="width: 150px; height: 150px; margin-bottom: 10px;">
                    </div>

                    <form class="row g-3" id="productForm">
                        <!-- Campo de Nombre -->
                        <div class="col-md-6">
                            <label for="nombre" class="form-label"><i class="bi bi-person"></i> Nombre</label>
                            <input type="text" class="form-control" id="nom" value="<?php echo htmlspecialchars($_SESSION['nombre']); ?>" disabled required>
                        </div>
                        <!-- Campo de Email -->
                        <div class="col-md-6">
                            <label for="email" class="form-label"><i class="bi bi-envelope"></i> Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" disabled required>
                        </div>

                        <!-- Campo de Teléfono -->
                        <div class="col-md-6">
                            <label for="tel" class="form-label"><i class="bi bi-telephone"></i> Teléfono</label>
                            <input type="tel" class="form-control" id="tel" value="<?php echo htmlspecialchars($_SESSION['tel']); ?>" disabled required>
                        </div>
                        <!-- Campo de Foto de Perfil -->
                        <div class="col-md-6">
                            <label for="foto_perfil" class="form-label"><i class="bi bi-image"></i> Foto de Perfil</label>
                            <input type="file" id="imagen" class="form-control" id="foto" accept="image/*" >
                        </div>

                        <!-- Botones centrados -->
                        <div class="col-12 text-fill" id="buttonContainer">
                        <button type="submit" class="btn btn-primary" id="btnCustom"><i class="bi bi-pencil-square"></i> Guardar Cambios</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //funcion para cargar la imagen
    document.getElementById('imagen').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('perfilfo').src = e.target.result;
    };  
    reader.readAsDataURL(file);
  });
  
</script>


</body>
</html>

  
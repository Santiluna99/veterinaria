<?php include ("includes/headers.php")?>
<link rel="stylesheet" href="styles2.css">

<div class ="card text-center">
    <div class="card-body">
        <h1 class="card-title">CREAR REGISTRO DE MASCOTA</h1>
        <p class="card-text">Ingrese los datos a continuación</p>

        <form action="save.php" method="POST">
            <div class="form-group2">
            <input type="text" name="nombres" clas="form-control" placeholder="Ingrese nombres" autofocus>
            </div>

            <div class="form-group2">
            <input type="text" name="especie" clas="form-control" placeholder="Ingrese Especie">
            </div>
            <div class="form-group2">
            <input type="text" name="raza" clas="form-control" placeholder="Ingrese Raza">
            </div>
            <div class="form-group2">
            <input type="text" name="edad" clas="form-control" placeholder="Ingrese Edad">
            </div>
            
            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>


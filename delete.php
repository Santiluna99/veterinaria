<?php include("db.php")?>
<?php include("includes/headers.php")?>
<link rel="stylesheet" href="styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ELIMINAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombres Mascota</th>
                            <th>Especie</th>
                            <th>Raza</th>
                            <th>Edad</th>
                            <th>Fecha Creación de Registro</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM mascota";
                        $result_mascota = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_mascota)){?>
                            <tr>
                                <td><?php echo $row['nombres']?></td>
                                <td><?php echo $row['especie']?></td>
                                <td><?php echo $row['raza']?></td>
                                <td><?php echo $row['edad']?></td>
                                <td><?php echo $row['fecha_registro']?></td>
                                <td>
                                    <a href="deleteData.php?id=<?php echo $row['codigo']?>">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
<?php include("db.php")?>

<?php
if(isset($_GET['id'])){
$codigo = $_GET['id'];
$query = "SELECT * FROM mascota WHERE codigo = $codigo";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $especie = $row['especie'];
    $raza = $row['raza'];
    $edad = $row['edad'];
    }
}
if (isset($_POST['update2'])){
    $codigo = $_GET['id'];
    $nombres = $_POST['nombres'];
    $especie = $_POST['especie'];
    $especie = $_POST['raza'];
    $especie = $_POST['edad'];
    $query = "UPDATE mascota SET nombres = '$nombres', especie = '$especie', raza = '$raza', edad = '$edad' WHERE codigo = $codigo";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "index.php";
        </script>
        <?php 
    }
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
            <input type="text" name="nombres" value="<?php print $nombres;?>"
            class = "form-control" placeholder="Actualizar nombres">
            </div>
            <div class = "form-group">
            <textarea name="especie" rows="2" class="form-control" placeholder="Actualizar Especie"><?php echo $especie;?></textarea>
            </div>
            <div class = "form-group">
            <textarea name="raza" rows="2" class="form-control" placeholder="Actualizar Raza"><?php echo $raza;?></textarea>
            </div>
            <div class = "form-group">
            <textarea name="edad" rows="2" class="form-control" placeholder="Actualizar Edad"><?php echo $edad;?></textarea>
            </div>
            <button class="btn btn-success" name="update2">Actualizar</button>
            </form>
        </div>
    </div> 
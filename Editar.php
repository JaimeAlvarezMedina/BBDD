<?php
            include("Conexion.php");/* Incluimos la conexion */
            
            if(isset($_GET["id"])){/* Seleccionamos la fila a editar */
                $id=$_GET['id'];
                $consulta="SELECT * FROM productos where ID='$id'";
                $resultado=mysqli_query($conexion,$consulta);
                if(mysqli_num_rows($resultado)==1){
                    $fila=mysqli_fetch_array($resultado);
                    $nombre=$fila['Nombre'];
                    $stock=$fila['Stock'];
                }
            }

            if(isset($_POST['actualizar'])){/* Seleccionamos los elementos cambiados y actualizamos la tabla */
                $id=$_GET['id'];
                $Nombre=$_POST['nombre'];
                $Stock=$_POST['stock'];
                $consulta=$conexion->prepare("UPDATE productos SET Nombre=?, Stock=? WHERE id='$id'");
                $consulta->bind_param("si",$Nombre,$Stock);
                $consulta->execute();
                header("Location:Principio.php");

            }

        ?>

        <?php include("includes/header.php") ?><!-- Añadimos el header -->

        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form action="Editar.php?id=<?php echo $_GET['id']?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Pon el nombre del producto" autofocus required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="number" name="stock" value="<?php echo $stock ?>" class="form-control" placeholder="¿Cuantas unidades han llegado?" required>
                            </div>
                            <br>
                            <button class="btn btn-succes" name="actualizar">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
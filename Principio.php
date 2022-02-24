<?php   
    include("Conexion.php"); 
    include("includes/header.php");
?>
        
<div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="Guardar.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Pon el nombre del producto" autofocus required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" name="stock" class="form-control" placeholder="¿Cuantas unidades han llegado?" required>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Fecha de entrada</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                            $consulta="SELECT * FROM productos";
                            $resultado=mysqli_query($conexion,$consulta);
                            while($fila = mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $fila["Nombre"] ?></td>
                            <td><?php echo $fila["Stock"] ?></td>
                            <td><?php echo $fila["Fecha_entrada"] ?></td>
                            <td>
                                <a href="Editar.php?id=<?php echo $fila['ID']?>">Editar</a>
                                <a href="Eliminar.php?id=<?php echo $fila['ID']?>">Borrar</a>
                            </td>
                        </tr>     

                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <button onclick="location.href='Destruir.php'" class="btn btn-success btn-block">Cerrar sesión</button><!--Para cerrar sesion-->

</div>

    </body>
</html>
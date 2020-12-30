<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Empleados</title>
    </head>
    <body>
        <?php
            $aEmpleados = array();
            $aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
            $aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
            $aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 90000);
            $aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 90000);
            function calcularNeto(){
                
            }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-3">
                    <h1>Listado de productos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-hover border">
                        <thead>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            <?php foreach($aEmpleados as $empleado){
                                ?>   
                                <tr>
                                    <td><?php echo $empleado["dni"];?></td>
                                    <td><?php echo $empleado["nombre"];?></td>
                                    <td><?php echo $empleado["edad"];?></td>
                                    <td><?php echo $empleado["peso"];?></td>
                                </tr>
                            <?php }  ?>
                            <tr>
                                <td><?php echo $aProductos[1]["nombre"]; ?></td>
                                <td><?php echo $aProductos[1]["marca"]; ?></td>
                                <td><?php echo $aProductos[1]["modelo"]; ?></td>
                                <td><?php echo $aProductos[1]["stock"] == 0? "No hay stock" : ($aProductos[1]["stock"]> 10? "Hay stock" : "Poco stock"); ?></td>
                                <td><?php echo "$".$aProductos[1]["precio"]; ?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>
                            </tr>
                            <tr>
                                <td><?php echo $aProductos[2]["nombre"]; ?></td>
                                <td><?php echo $aProductos[2]["marca"]; ?></td>
                                <td><?php echo $aProductos[2]["modelo"]; ?></td>
                                <td><?php 
                                        if($aProductos[2]["stock"] == 0){
                                            echo "Sin stock";
                                        }elseif($aProductos[2]["stock"] <= 10){
                                            echo "Poco stock";
                                        }else{
                                            echo "Hay stock";
                                        }
                                    ?></td>
                                <td><?php echo "$".$aProductos[2]["precio"]; ?></td>
                                <td><button class="btn btn-primary" name="txtComprar" id="txtComprar">Comprar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
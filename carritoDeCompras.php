<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrito de compras</title>
</head>
<body>
    <div class="carrito">
        <h2 class="titulo">Productos disponibles</h2>
        <a href="carrito.php"><img class="img-carrito" src="carrito.png" alt="imagen-de-carrito"></a>
    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Acción</th>    
            </tr>           
        </thead>  
        <tbody class="container">
            <tr>
                <td>1</td>
                <td><img class="img-libro" src="1984.jpeg" alt="imagen-libro-1"></td>
                <td>1984</td>
                <td>George Orwell</td>
                <td>$13.600</td>
                <td>
                <form action="carritoDeCompras.php" method="POST">
                    <input type="hidden" name="txtProducto" value="1984">
                    <input type="number" class="btn" name="cant" >
                    <input type="hidden" name="txtPrecio" value="13600">
                    <input type="submit" value="Agregar" name="btnAgregar">
                </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img class="img-libro" src="far.jpeg" alt="imagen-libro-2"></td>
                <td>Fahrenheit 451</td>
                <td>Ray Bradbury</td>
                <td>$15.220</td>
                <td>
                    <form action="carritoDeCompras.php" method="POST">
                        <input type="hidden" name="txtProducto" value="Fahrenheit 451">
                        <input type="number" class="btn" name="cant">
                        <input type="hidden" name="txtPrecio" value="15220">
                        <input type="submit" value="Agregar" name="btnAgregar">
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img class="img-libro" src="un-mundo-feliz.jpg" alt="imagen-libro-3"></td>
                <td>Un mundo feliz</td>
                <td>Aldous Huxley</td>
                <td>$9.940</td>
                <td>
                    <form action="carritoDeCompras.php" method="POST">
                        <input type="hidden" name="txtProducto" value="Un mundo feliz">
                        <input type="number" class="btn" name="cant">
                        <input type="hidden" name="txtPrecio" value="9940">
                        <input type="submit" value="Agregar" name="btnAgregar">
                    </form>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><img class="img-libro" src="req.jpeg" alt="imagen-libro-4"></td>
                <td>Requiem alemán</td>
                <td>Phillip Kerr</td>
                <td>$14.860</td>
                <td>
                    <form action="carritoDeCompras.php" method="POST">
                        <input type="hidden" name="txtProducto" value="Requiem alemán">
                        <input type="number" class="btn" name="cant">
                        <input type="hidden" name="txtPrecio" value="14860">
                        <input type="submit" value="Agregar" name="btnAgregar">
                    </form>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td><img class="img-libro" src="violetas.jpg" alt="imagen-libro-5"></td>
                <td>Violetas de marzo</td>
                <td>Phillip Kerr</td>
                <td>$12.670</td>
                <td>
                    <form action="carritoDeCompras.php" method="POST">
                        <input type="hidden" name="txtProducto" value="Violetas de marzo">
                        <input type="number" class="btn" name="cant">
                        <input type="hidden" name="txtPrecio" value="12670">
                        <input type="submit" value="Agregar" name="btnAgregar">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
    </table>
    </div>
    <?php
    if(isset($_REQUEST["btnAgregar"])){
        $producto = $_REQUEST["txtProducto"];
        $cantidad = $_REQUEST["cant"]+$_SESSION["carrito"][$producto]["cant"];
        $precio = $_REQUEST["txtPrecio"];
        $total_p = 0;
        
        $_SESSION["carrito"][$producto]["cant"] = $cantidad;
        $_SESSION["carrito"][$producto]["precio"] = $precio;

        echo "<script>alert('El libro $producto ha sido agregado con éxito al carrito de compras');</script>";
    };
    ?>
</body>
</html>
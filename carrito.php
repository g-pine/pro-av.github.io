<?php
    session_start();
    //session_destroy();
    echo "<h3>Carrito de compras: </h3>";
    if(isset($_SESSION["carrito"])){
        foreach($_SESSION["carrito"] as $indice => $arreglo){
            print "<hr> producto: <strong>" . $indice . "</strong><br>";
            $total_p += $arreglo["cant"] * $arreglo["precio"];
            foreach($arreglo as $key => $value){
                print $key . ": " . $value . "<br>";
            }
            echo "<a href='carrito.php?item=$indice'>Eliminar item</a>";
        } 
        echo "<h3>El total de tu compra es de $$total_p</h3>";  
        echo '<a href="carritoDeCompras.php">Regresar</a> |
        <a href="carrito.php?vaciar=true">Vaciar carrito</a>';    
    }else{
        print "<script>alert('El carrito está vacío');</script>";
?>
    <a href="carritoDeCompras.php">Regresar</a> 
<?php
    }
    if(isset($_REQUEST["vaciar"])){
        session_destroy();
        header("Location:carrito.php");
    }
    if(isset($_REQUEST["item"])){
        $producto = $_REQUEST["item"];
        unset($_SESSION["carrito"][$producto]);        
    }
?>

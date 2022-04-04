<div id="contenido">
<h2 style="color:white;font-size:32px">Informacion del Coche</h2>
    <p>
    <table border='2' style="background-color:white">
        <tr>
            <td>Numero de bastidor: </td>
            <td>
                <?php
                    echo $car['NBast'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td>
                <?php
                    echo $car['Marca'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Modelo: </td>
            <td>
                <?php
                    echo $car['Modelo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Motor: </td>
            <td>
                <?php
                    echo $car['Motor'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo de Combustible: </td>
            <td>
                <?php
                    echo $car['TComb'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Caballos: </td>
            <td>
                <?php
                    echo $car['Caballos'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Kilometros: </td>
            <td>
                <?php
                    echo $car['Kilometros'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Matricula: </td>
            <td>
                <?php
                    echo $car['Matricula'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Datos Adicionales: </td>
            <td>
                <?php
                    echo $car['DatosAd'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Fecha: </td>
            <td>
                <?php
                    echo $car['fecha'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Extras: </td>
            <td>
                <?php
                    echo $car['EXTRA'];
                ?>
            </td>
        </tr>

    </table>
    </p>
    <p><a href="index.php?page=controller_cars&op=list">Volver</a></p>
</div>
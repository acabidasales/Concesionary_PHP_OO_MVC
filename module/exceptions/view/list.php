<div id="contenido">
    <div class="container">
    	<div class="row">
        <h2 style="color:white;font-size:32px">LISTA DE ERRORES</h2>
    	</div>
    	<div class="row">
        <a href="index.php?page=controller_cars&op=list">Volver</a>
            <table style="background-color:#ACACAC;height:200px" border="1px">
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN COCHE</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                            echo '<tr>';
                    	   	echo '<td>'. $row['ID'].'</td>';
                            echo '<td>'. $row['TYPE'].'</td>';
                            echo '<td>'. $row['DESCR'].'</td>';
                            echo '<td>'. $row['DATE'].'</td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>
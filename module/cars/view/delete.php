<div id="contenido">
    <form autocomplete="on" method="post" name="delete" id="delete" action="index.php?page=controller_cars&op=delete&ID=<?php echo $_GET['ID'];?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Desea seguro borrar el coche <?php echo $_GET['ID'];?>?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_cars&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>
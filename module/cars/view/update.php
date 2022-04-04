<div id="contenido">
    <form method="post" id="update">
        <h2 style="color:white;font-size:32px">Modificar Coche</h2>
        <table border='0'>
        
            <tr>
                <td>Numero de Bastidor: </td>
                <td><input type="text" id="NBast" name="NBast" placeholder="NBast" value="<?php echo $car['NBast'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_NBast" class="error">
                        <?php
                            //echo "$error_Marca";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Marca: </td>
                <td><input type="text" id="Marca" name="Marca" placeholder="Marca" value="<?php echo $car['Marca'];?>"/></td>
                <td><font color="red">
                    <span id="error_Marca" class="error">
                        <?php
                            //echo "$error_Marca";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Modelo: </td>
                <td><input type="text" id="Modelo" name="Modelo" placeholder="Modelo" value="<?php echo $car['Modelo'];?>"/></td>
                <td><font color="red">
                    <span id="error_Modelo" class="error">
                        <?php
                            //echo "$error_Modelo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Motor: </td>
                <td><input type="text" id="Motor" name="Motor" placeholder="Motor" value="<?php echo $car['Motor'];?>"/></td>
                <td><font color="red">
                    <span id="error_Motor" class="error">
                        <?php
                            //echo "$error_nombre";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Tipo de combustible:</td>
                <td><form>
                    <input type="radio" id="Gasolina" name="TComb" placeholder="TComb" value="Gasolina" <?php echo ($car['TComb'] == "Gasolina") ? 'checked="checked"' : ''; ?>>
                    <label for="Gasolina">Gasolina</label><br>
                    <input type="radio" id="Diesel" name="TComb" placeholder="TComb" value="Diesel" <?php echo ($car['TComb'] == "Diesel") ? 'checked="checked"' : ''; ?>>
                    <label for="Diesel">Diesel</label><br>
                    <input type="radio" id="Electrico" name="TComb" placeholder="TComb" value="Electrico" <?php echo ($car['TComb'] == "Electrico") ? 'checked="checked"' : ''; ?>>
                    <label for="Electrico">Electrico</label>
                    <input type="radio" id="Hidrogeno" name="TComb" placeholder="TComb" value="Hidrogeno" <?php echo ($car['TComb'] == "Hidrogeno") ? 'checked="checked"' : ''; ?>>
                    <label for="Hidrogeno">Hidrogeno</label>
                  </form></td>
                <td><font color="red">
                    <span id="error_TComb" class="error">
                        <?php
                            //echo "$error_TComb";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Caballos: </td>
                <td><input id="Caballos" type="text" name="Caballos" placeholder="Caballos" value="<?php echo $car['Caballos'];?>"/></td>
                <td><font color="red">
                    <span id="error_Caballos" class="error">
                        <?php
                            //echo "$error_Caballos";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Kilometros: </td>
                <td><input type="text" id="Kilometros" name="Kilometros" placeholder="Kilometros" value="<?php echo $car['Kilometros'];?>"/></td>
                <td><font color="red">
                    <span id="error_Kilometros" class="error">
                        <?php
                            //echo "$error_Kilometros";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Matricula: </td>
                <td><input type="text" id="Matricula" name="Matricula" placeholder="Ej: 1234 XXX" value="<?php echo $car['Matricula'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_Matricula" class="error">
                        <?php
                            //echo "$error_Matricula";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Datos Adicionales: </td>
                <td><textarea cols="30" rows="5" id="DatosAd" name="DatosAd" placeholder="Datos Adicionales" value="<?php echo $car['DatosAd'];?>"><?php echo $car['DatosAd'];?></textarea></td>
                <td><font color="red">
                    <span id="error_DatosAd" class="error">
                        <?php
                            //echo "$error_DatosAd";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Extras: </td>
                <?php
                    $extra=explode(":", $car['EXTRA']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Cristales Tintados", $extra);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" value="Cristales Tintados" checked/>Cristales Tintados
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" value="Cristales Tintados"/>Cristales Tintados
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Papeleo en regla", $extra);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" value="Papeleo en regla" checked/>Papeleo en regla
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" value="Papeleo en regla"/>Papeleo en regla
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("No se que poner", $extra);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" value="No se que poner" checked/>No se que poner</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" value="No se que poner"/>No se que poner</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_extras" class="error">
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Fecha de Compra: </td>
                <td><input type="text" id="datepicker" name="fecha" value="<?php echo $car['fecha'];?>"></p></td>
            </tr>

            <tr>
                <td>Imagen del Coche: </td>
                <td><input type="text" id="IMG" name="IMG" placeholder="Nombre de la imagen" value="<?php echo $car['IMG'];?>"/></td>
                <!--<td><input type="file" name="file" id="file"></td>!-->
            </tr>
            
            <tr>
                <td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
                <td><input type="button" name="update" id="update" value="Actualizar" onclick="validate_js('update')"/></td>
                <td align="right"><a href="index.php?page=controller_cars&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
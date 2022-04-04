<div id="contenido">
    <form method="post" id="create">
    <h2 style="color:white;font-size:32px">Coche nuevo</h2>
        <table border='0'>
            <tr>
                <td>Numero de Bastidor: </td>
                <td><input type="text" id="NBast" name="NBast" placeholder="NBast" value=""/></td>
                <td><font color="red">
                    <span id="error_NBast" class="error">
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Marca: </td>
                <td><input type="text" id="Marca" name="Marca" placeholder="Marca" value=""/></td>
                <td><font color="red">
                    <span id="error_Marca" class="error">
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Modelo: </td>
                <td><input type="text" id="Modelo" name="Modelo" placeholder="Modelo" value=""/></td>
                <td><font color="red">
                    <span id="error_Modelo" class="error">
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Motor: </td>
                <td><input type="text" id="Motor" name="Motor" placeholder="Motor" value=""/></td>
                <td><font color="red">
                    <span id="error_Motor" class="error">
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Tipo de combustible:</td>
                <td><form>
                    <input type="radio" id="Gasolina" name="TComb" placeholder="TComb" value="Gasolina">
                    <label for="Gasolina">Gasolina</label><br>
                    <input type="radio" id="Diesel" name="TComb" placeholder="TComb" value="Diesel">
                    <label for="Diesel">Diesel</label><br>
                    <input type="radio" id="Electrico" name="TComb" placeholder="TComb" value="Electrico">
                    <label for="Electrico">Electrico</label>
                    <input type="radio" id="Hidrogeno" name="TComb" placeholder="TComb" value="Hidrogeno">
                    <label for="Hidrogeno">Hidrogeno</label>
                  </form></td>
                <td><font color="red">
                    <span id="error_TComb" class="error">
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Caballos: </td>
                <td><input id="Caballos" type="text" name="Caballos" placeholder="Caballos" value=""/></td>
                <td><font color="red">
                    <span id="error_Caballos" class="error">
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Kilometros: </td>
                <td><input type="text" id="Kilometros" name="Kilometros" placeholder="Kilometros" value=""/></td>
                <td><font color="red">
                    <span id="error_Kilometros" class="error">
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Matricula: </td>
                <td><input type="text" id="Matricula" name="Matricula" placeholder="Ej: 1234 XXX" value=""/></td>
                <td><font color="red">
                    <span id="error_Matricula" class="error">
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Datos Adicionales: </td>
                <td><textarea cols="30" rows="5" id="DatosAd" name="DatosAd" placeholder="Datos Adicionales" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_DatosAd" class="error">
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Extras: </td>
                <td><input type="checkbox" id= "EXTRA[]" name="EXTRA[]" placeholder= "EXTRA" value="Cristales Tintados"/>Cristales Tintados
                    <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" placeholder= "EXTRA" value="Papeleo en regla"/>Papeleo en regla
                    <input type="checkbox" id= "EXTRA[]" name="EXTRA[]" placeholder= "EXTRA" value="No se que poner"/>No se que poner</td>
                <td><font color="red">
                    <span id="error_extras" class="error">
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Fecha de Compra: </td>
                <td><input type="text" id="datepicker" name="fecha"></p></td>
            </tr>

            <tr>
                <td>Imagen del Coche: </td>
                <td><input type="text" id="IMG" name="IMG" placeholder="Nombre de la imagen" value=""/></td>
            </tr>
            
            <tr>
                <td><input type="button" name="create" id="create" value="Añadir" onclick="validate_js('create')"/></td>
                <td align="right"><a href="index.php?page=controller_cars&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
<section id="home" class="text-center">

    <div id="carousel-example" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active">

                <img src="view/img/1.jpg" alt="" />
                <div class="carousel-caption">
                    <h4 class="back-light">Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                    </h4>
                </div>
            </div>
            <div class="item">
                <img src="view/img/2.jpg" alt="" />
                <div class="carousel-caption ">
                    <h4 class="back-light">Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                    </h4>
                </div>
            </div>
            <div class="item">
                <img src="view/img/3.jpg" alt="" />
                <div class="carousel-caption ">
                    <h4 class="back-light">Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                    </h4>
                </div>
            </div>
        </div>

        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<div class="w3-container" style="text-align: center;background-color:#222222;margin-top:-20px;">
    <h2 style="color:white;font-size:32px">LISTA DE COCHES</h2>
</div>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <p><a href="index.php?page=controller_cars&op=create"><img src="view/img/anadir.png"></a><a href="index.php?page=controller_cars&op=dummies2"><img src="view/img/dummies.png"></a></p>
        <p><a href="index.php?page=controller_cars&op=dummies"><img src="view/img/redbutton.png"></a></p>
        <p><a href="index.php?page=exceptions&op=list">Error Log</a></p>
        <table id="table_crud" style="background-color:#222222;color:white;height:200px">
            <thead>
                <tr>
                    <td width=125><b>Imagen</b></th>
                    <td width=125><b>Nombre</b></th>
                    <td width=125><b>Opciones</b></th>
                </tr>
            </thead>
            <?php
            if ($rdo->num_rows === 0) {
                echo '<tr>';
                echo '<td align="center"  colspan="3">NO HAY NINGUN COCHE</td>';
                echo '</tr>';
            } else {
                foreach ($rdo as $row) {
                    $imagedata = $row['IMG'];
                    $image = '<img src="view/img/cars/' . $imagedata . '">';
                    print("<td width=100 heith=100 style='background-color:#8C8C8C;color:white;font-size:32px' class='car' id='" . $row['ID'] . "'>$image</td>");
                    echo '<td width=250 align="center" style="vertical-align:center;font-size: 42px;background-color:#8C8C8C;color:white;">' .  $row['Marca'] . " " . $row['Modelo'] . '</td>';
                    echo '<img id="" src="">';
                    echo '<td width=125 style="background-color:#8C8C8C;color:white;">';
                    /* print ("<div class='car' id='".$row['ID']."'>Read</div>");  //READ
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; */
                    //echo '<a class="Button_blue" href="index.php?page=controller_cars&op=read&ID='.$row['ID'].'" style="vertical-align:center;">Read</a>';
                    //echo '&nbsp;';
                    echo '<a class="Button_green" href="index.php?page=controller_cars&op=update&ID=' . $row['ID'] . '" style="vertical-align:center;">Update</a>';
                    echo '&nbsp;';
                    echo '<a class="Button_red" href="index.php?page=controller_cars&op=delete&ID=' . $row['ID'] . '" style="vertical-align:center;">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>
    </div>
</div>
</div>

<!-- modal window -->
<section id="modalcontent">
    <div id="details_cars" hidden>
        <!-- <div id="details">
            <div id="container">
                ID: <div id="ID"></div></br>
                Numero de Bastidor: <div id="NBast"></div></br>
                Marca: <div id="Marca"></div></br>
                Modelo: <div id="Modelo"></div></br>
                Motor: <div id="Motor"></div></br>
                Tipo de Combustible: <div id="TComb"></div></br>
                Caballos: <div id="Caballos"></div></br>
                Kilometros: <div id="Kilometros"></div></br>
                Matricula: <div id="Matricula"></div></br>
                Datos Adicionales: <div id="DatosAd"></div></br>
                Fecha de Compra: <div id="fecha"></div></br>
                Extras: <div id="EXTRA"></div></br>
            </div>
        </div> -->
    </div>
</section>
<?php
require_once('views/header.php');
?>
<div class="main" style="flex-direction: column;align-items:center;">
    <h1 class="center">bienvenidos a la consulta</h1>
    <div id="respuesta"></div>
</div>
<div class="main">
    <table border="3" width="80%">
        <thead>
            <tr>
                <th>matricula</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>opciones</th>
                <th>opciones</th>
                <!-- <form action="" method="post"> <input type="text" name="id" style="display: none;"> <button><a href="">eliminar</a></button> </form>
                <form action="" method="post"> <input type="text" name="id" style="display: none;"> <button><a href="">eliminar</a></button> </form> -->
                
            </tr>
        </thead>
        <tbody id="tbody-alumnos">
            <?php
            foreach($this->datos as $row){
                // $alumno = new Alumno();
                // $alumno = $row;
                // print("<pre>");
                // print_r($alumno->nombre);
                // print("</pre><br>");
                print('<tr id ="fila-'.$row->matricula.'">');
                print('<td>'.$row->matricula.'</td>');
                print('<td>'.$row->nombre.'</td>');
                print('<td>'.$row->apellido.'</td>');
                print('<td><button class="bEliminar" data-matricula="'.$row->matricula.'">eliminar</button></td>');
                // print('<td><a href="'.constant('URL').'consulta/verAlumno/'.$row->matricula.'">editar</a> <a href="'.constant('URL').'consulta/eliminarAlumno/'.$row->matricula.'">eliminar</a> </td>');
                print('<td><a href="'.constant('URL').'consulta/verAlumno/'.$row->matricula.'">editar</a>  </td>');
                print('</tr>');
            }
            ?>
        </tbody>
    </table>
</div>
<script src="<?php echo(constant('URL')); ?>public/js/app.js"></script>
<?php
require_once('views/footer.php');
?>
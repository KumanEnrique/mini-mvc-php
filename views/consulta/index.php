<?php
require_once('views/header.php');
?>
<div class="main">
    <h1 class="center">bienvenidos a la consulta</h1>
</div>
<div class="main">
    <table border="3" width="80%">
        <thead>
            <tr>
                <th>matricula</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>opciones</th>
                <!-- <form action="" method="post"> <input type="text" name="id" style="display: none;"> <button><a href="">eliminar</a></button> </form>
                <form action="" method="post"> <input type="text" name="id" style="display: none;"> <button><a href="">eliminar</a></button> </form> -->
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($this->datos as $row){
                // $alumno = new Alumno();
                // $alumno = $row;
                // print("<pre>");
                // print_r($alumno->nombre);
                // print("</pre><br>");
                print('<tr>');
                print('<td>'.$row->matricula.'</td>');
                print('<td>'.$row->nombre.'</td>');
                print('<td>'.$row->apellido.'</td>');
                print('<td><a href="#">eliminar</a> <a href="#">editar</a> </td>');
                print('</tr>');
            }
            ?>
        </tbody>
    </table>
</div>
<?php
require_once('views/footer.php');
?>
<?php
require_once('views/header.php');
?>
    <h1 style="display:flex;justify-content: center;">bienvenidos al nuevo</h1>
<div style="display:flex;justify-content: center;">
    <br>
    <form action="<?php echo(constant('URL')); ?>nuevo/registrarAlumno" method="post">
        <br>
        <p>matricula</p>
        <input type="text" name="matricula" id="" required autofocus>
        <br>
        <p>apellido</p>
        <input type="text" name="apellido" id="" required>
        <br>
        <p>nombre</p>
        <input type="text" name="nombre" id="" required>
        <button type="submit">Enviar</button>
    </form>
</div>
<?php
require_once('views/footer.php');
?>
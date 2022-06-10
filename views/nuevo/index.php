<?php
require_once('views/header.php');
?>
<div style="display:flex;justify-content: center;">
    <h1>bienvenidos al nuevo</h1>
    <br>
    <form action="<?php echo(constant('URL')); ?>nuevo/registrarAlumno" method="post">
        <br>
        <p>matricula</p>
        <input type="text" name="matricula" id="">
        <br>
        <p>apellido</p>
        <input type="text" name="apellido" id="">
        <br>
        <p>nombre</p>
        <input type="text" name="nombre" id="">
        <button type="submit">Enviar</button>
    </form>
</div>
<?php
require_once('views/footer.php');
?>
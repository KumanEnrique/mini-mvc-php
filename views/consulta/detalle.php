<?php
require_once('views/header.php');
?>
    <h1 style="display:flex;justify-content: center;">detalle de <?php echo($this->datos->matricula) ?></h1>
    <div style="display:flex;justify-content: center;"><?php echo($this->mensaje); ?></div>
    <div style="display:flex;justify-content: center;"></div>
<div style="display:flex;justify-content: center;">
    <br>
    <form action="<?php echo(constant('URL')); ?>consulta/actualizarAlumno" method="post">
        <br>
        <p>matricula</p>
        <input type="text" name="matricula" id="" disabled value="<?php echo($this->datos->matricula) ?>" required autofocus>
        <br>
        <p>apellido</p>
        <input type="text" name="apellido" id="" value="<?php echo($this->datos->apellido) ?>" required>
        <br>
        <p>nombre</p>
        <input type="text" name="nombre" id="" value="<?php echo($this->datos->nombre) ?>" required>
        <button type="submit">actualizar Alumno</button>
    </form>
</div>
<?php
require_once('views/footer.php');
?>
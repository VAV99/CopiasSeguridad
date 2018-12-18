<?php
include 'header.php';
echo'<h2>Este formulario es para hacer copias de seguridad</h2>';
echo'<from action = "RealizarCopia.php>" method = "POST">
Solo una BD
<input type="radio" name="rbcopia" value="0" checked="checked"/> 
<br>
Todas las BD 
<input type="radio" name="rbcopia" value="0" /><input type="text" name="text" value="" />
<br>
<input type="submit" value="Realizar" name="realizar"/>
</form>';
        



        
<?php
$imagenes = glob("*.{jpg,png,gif}", GLOB_BRACE);
echo json_encode($imagenes);

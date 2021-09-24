<?php

/**
 * Ejemplo para copiar archivos de un cpanel a otro con el fin de evitar descargar a local
 * 1. Haga un zip de los archivos a copiar
 * 2. Haga que ese zip sea visible en internet - modifique permisos
 * 3. Identifique la ruta y remplace en $remote_file_url
 * 4. Agregue el nombre para el nuevo zip a descargar en el nuevo cpanel
 * 5. Ejecute en el nuevo cpanel el script
 */

$remote_file_url = 'https://midomain.com/document.zip';
$local_file = 'document.zip';
$copy = copy($remote_file_url, $local_file);
 
if ($copy) {
    echo "Archivo copiado exitosamente!";
} else {
    echo "Operacion fallida: El archivo no se copio...";
}
?>

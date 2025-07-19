<?php

namespace App\Library;

class Guild
{
    public function getEmblem($string, $width = 50)
    {
        // Separar los valores del string que representa el emblema
        $i = explode(',', $string);

        // Convertir de base 36 a base 10 para fondo y logo
        $bg_src = isset($i[0]) ? base_convert($i[0], 36, 10) : '0';
        $logo_src = isset($i[2]) ? base_convert($i[2], 36, 10) : '0';

        // Construir el nombre del archivo
        $filename = "{$bg_src}_{$logo_src}.png";

        // Ruta relativa al archivo dentro de la carpeta 'public'
        $path = asset("style/flash/guild/pages_persos/emblems/{$filename}");

        // Verificación opcional si quieres asegurarte de que el archivo existe
        // Si lo activas, necesitas usar file_exists con public_path()
        /*
        $fullPath = public_path("style/flash/guild/pages_persos/emblems/{$filename}");
        if (!file_exists($fullPath)) {
            return '<span style="color:red;">Emblema no disponible</span>';
        }
        */

        return '<img src="' . $path . '" width="' . $width . '" height="' . $width . '" alt="Emblema de gremio" style="display:block; margin:auto;">';

    }
}

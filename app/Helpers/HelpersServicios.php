<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Cache;




class HelpersServicios
{

    public static function get_servicios()
    {
        return [
                [
                 'name'        => 'Terapia Gestalt',
                 'descripcion' => 'Basada en el desarrollo del potencial humano centrándose en el aquí y el ahora, el darse cuenta, tomando conciencia de lo que le ocurre a uno mismo y haciéndose responsable de sus actos, lo que conlleva a unos resultados de saber guiarse a uno mismo convirtiéndose en una filosofía de vida.',
                 'img'         => url().'/imagenes/Servicios/gestalt.jpg',
                 'frase'       => '‘El proceso terapéutico consiste en pasar de la necesidad de apoyarse en otro a la capacidad de apoyarse en uno mismo‘',
                 'cita'        => 'Fritz Perls'
                ],
                [
                 'name'        => 'Coaching y PNL',
                 'descripcion' => 'El Coaching para resultados , acompañamiento mediante  la conversación basada en la confianza y el   compromiso focalizada en preguntas potenciadoras para el alcance del objetivo deseado. El coaching requiere de planes de acción  que cada persona se compromete a poner en marcha y realizar en un plazo determinado para alcanzar dicho objetivo respetando sus propios ritmos. La PNL  ( Programación Neuro Lingüística) es una metodología de acompañamiento al cambio, basada en el modelaje de programas ya aprendidos a través del lenguaje y los sentidos. Gracias a ciertas habilidades y técnicas se consigue pensar y actuar de forma efectiva  incrementando las opciones y mejorando la calidad de vida.',
                 'frase'       => '‘Tus creencias no están hechas de realidades, sino más bien es la realidad la que está hecha de tus creencias‘',
                 'cita'        => 'Richard Bandler',
                 'img'         => url().'/imagenes/Servicios/pnl-y-coaching.jpg'
                ],
                [
                 'name'        => 'Astrología Humanista',
                 'descripcion' => 'Es una herramienta de autoconocimiento la cual representa la psique humana a través de un mapa simbólico,llamado Carta Natal dada por la fecha, hora y lugar de nacimiento de la persona. Su interpretación nos permite ver los potenciales, recursos, dificultades, bloqueos, talentos, conflictos... del individuo, entre otras muchas cosas. Es una poderosa herramienta de autodesarrollo personal gracias a la toma de conciencia ,lo que conduce a entender y sanar el mundo emocional.',
                 'img'         => url().'/imagenes/Servicios/astrologia-humanista.jpg',
                 'frase'       => '‘Conócete a ti mismo y conocerás el Universo‘',
                 'cita'        => 'Sócrates'
                ],
             ];  

    }

    
}
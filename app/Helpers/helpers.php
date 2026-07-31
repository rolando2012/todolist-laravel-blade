<?php

if (!function_exists('active_link')) {
    /**
     * Devuelve las clases CSS activas o inactivas según la ruta actual.
     *
     * @param string $routeName Nombre de la ruta (acepta comodines como tasks.*)
     * @param string $activeClass Clases cuando la ruta está activa
     * @param string $inactiveClass Clases cuando la ruta no está activa
     * @return string
     */
    function active_link($routeName, $activeClass = 'active bg-white text-dark fw-semibold', $inactiveClass = 'text-white-50') {
        return request()->routeIs($routeName) ? $activeClass : $inactiveClass;
    }
}

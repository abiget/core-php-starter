<?php
if (!function_exists('view')) {
    function view($viewName, $data = null)
    {
        include_once 'Resources/views/' . $viewName . '.php';
    }
}

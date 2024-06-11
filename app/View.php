<?php

namespace App\View;
function view($viewName, $data = [])
{
    extract($data);
    include_once 'Resources/views/'.$viewName.'.php';
}

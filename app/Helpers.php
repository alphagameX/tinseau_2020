<?php

global $script;

use JetBrains\PhpStorm\NoReturn;

#[NoReturn]  function register_script($path) : void
{
    global $script;
    $script .= '<script src="' . asset($path) . '"></script>';
}

#[NoReturn] function enqueue_script() : void
{
    global $script;
    echo $script;
}

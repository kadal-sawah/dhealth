<?php

function printr($print, $exit = true)
{
    echo '<pre>' . print_r($print, true) . '</pre>';
    if ($exit != false)
        exit(1);
}
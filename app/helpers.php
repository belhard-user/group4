<?php

function flash($title=null, $message=null)
{
    $flash = app(\App\Flash::class);

    if(is_null($title)){
        return $flash;
    }

    $flash->success($title, $message);
}
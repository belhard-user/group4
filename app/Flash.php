<?php

namespace App;

class Flash
{
    private function create($title, $message, $type)
    {
        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'type' => $type
        ]);
    }

    /*public function __call($type, $args)
    {
        $this->create(array_get($args, 0), array_get($args, 1), $type);
    }*/

    public function success($title, $message)
    {
        $this->create($title, $message, 'success');
    }

    public function error($title, $message)
    {
        $this->create($title, $message, 'error');
    }

    public function info($title, $message)
    {
        $this->create($title, $message, 'info');
    }
}
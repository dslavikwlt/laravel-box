<?php

namespace Daveismyname\Box\Api;

trait Files {

    public function file($id)
    {
        return self::get('files/'.$id);
    }
}

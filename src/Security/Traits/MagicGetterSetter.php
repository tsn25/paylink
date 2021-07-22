<?php

namespace App\Security\Traits;

use Symfony\Component\Config\Definition\Exception\Exception;

trait MagicGetterSetter
{
    public $magic;

    public function magicGetter()
    {
        if (!$this->magic)
            throw new Exception('Invalid');
        else
            return $this->magic;
    }

    public function magicSetter($magic)
    {
        if (!$magic)
            throw new Exception('Invalid');
        else
            return $magic;
    }
}

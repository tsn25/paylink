<?php
namespace App\Security;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Security\Traits\MagicGetterSetter;

class MagicGetterSetterClass
{
    use MagicGetterSetter;

    public $magic;
    public function getter()
    {
        return $this->magicGetter();
    }
    
    public function setter(string $magic)
    {
        return $this->magicSetter($magic);
    }
}

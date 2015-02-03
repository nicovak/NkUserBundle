<?php

namespace Nk\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NkUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

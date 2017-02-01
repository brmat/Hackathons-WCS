<?php

namespace FindMeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FindMeBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

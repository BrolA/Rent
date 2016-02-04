<?php

namespace RentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RentBundle extends Bundle
{

public function getParent()
{
return 'FOSUserBundle';
}

}

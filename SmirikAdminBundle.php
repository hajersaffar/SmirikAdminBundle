<?php

namespace Smirik\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SmirikAdminBundle extends Bundle
{
  
  public function getParent()
  {
    return 'SonataAdminBundle';
  }
  
}

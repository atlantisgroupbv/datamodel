<?php

namespace AtlantisGroupBV\OrmModel;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\PhpFileLoader;

class OrmModel extends Bundle
{
    public function boot()
    {
        \AtlantisGroupBV\OrmModel\Service\ServiceFactory::setDirContainer($this->container);
    }
}
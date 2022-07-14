<?php

namespace AtlantisGroupBV\DataModel;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\PhpFileLoader;

class DataModel extends Bundle
{
    public function boot()
    {
        \AtlantisGroupBV\DataModel\Service\ServiceFactory::setDirContainer($this->container);
    }
}
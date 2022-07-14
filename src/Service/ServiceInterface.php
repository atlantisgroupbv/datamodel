<?php

namespace AtlantisGroupBV\DataModel\Service;

use AtlantisGroupBV\DataModel;

/**
 * Interface ServiceInterface
 * @package AtlantisGroupBV\OrmModel\Service
 */
interface ServiceInterface
{
    /**
     * @param array $rules
     * @return OrmModel\Entity\EntityInterface|null
     */
    public function getOne(array ...$rules): ? OrmModel\Entity\EntityInterface;
}
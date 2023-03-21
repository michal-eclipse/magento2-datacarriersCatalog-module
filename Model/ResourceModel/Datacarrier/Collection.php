<?php

namespace MichalEclipse\DatacarriersCatalog\Model\ResourceModel\Datacarrier;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MichalEclipse\DatacarriersCatalog\Model\Datacarrier;
use MichalEclipse\DatacarriersCatalog\Model\ResourceModel\Datacarrier as DatacarrierResource;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(Datacarrier::class, DatacarrierResource::class);
    }
}

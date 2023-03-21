<?php

namespace MichalEclipse\DatacarriersCatalog\Model;

use MichalEclipse\DatacarriersCatalog\Model\ResourceModel\Datacarrier as DatacarrierResource;

class Datacarrier extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init(DatacarrierResource::class);
    }
}

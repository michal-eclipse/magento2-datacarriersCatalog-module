<?php

namespace MichalEclipse\DatacarriersCatalog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Datacarrier extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('michaleclipse_datacarrierscatalog_datacarrier', 'dc_id');
    }
}

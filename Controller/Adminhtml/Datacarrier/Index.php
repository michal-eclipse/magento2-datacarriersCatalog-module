<?php

declare(strict_types=1);

namespace MichalEclipse\DatacarriersCatalog\Controller\Adminhtml\Datacarrier;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    public function execute(): Page
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('MichalEclipse_DatacarriersCatalog::datacarrier');
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Datacarriers'));

        return $resultPage;
    }
}

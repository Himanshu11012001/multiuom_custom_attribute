<?php

namespace MySeller\Myform\Controller\Index;

class ListAction extends \Magento\Framework\App\Action\Action

{
	public function execute()

    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();

    }
}

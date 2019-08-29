<?php
namespace Learning\CustomForm\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public function retrieveData()
    {
        return $this->scopeConfig->getValue('customform/general/fields', ScopeInterface::SCOPE_STORE);
    }
    public function retrieveData1()
    {
        return $this->scopeConfig->getValue('customform/general/enable', ScopeInterface::SCOPE_STORE);
    }
}

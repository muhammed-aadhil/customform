<?php

namespace Learning\CustomForm\Block;

class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array  $data= [])
    {
        parent::__construct($context, $data);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    public function getFormAction()
    {
//        die('getFormAction');
        return $this->getUrl('customform/index/save');
    }
}

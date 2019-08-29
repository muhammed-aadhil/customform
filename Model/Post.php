<?php
namespace Learning\CustomForm\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'new_form';

    protected $_cacheTag = 'new_form';

    protected $_eventPrefix = 'new_form';

    protected function _construct()
    {
        $this->_init('Learning\CustomForm\Model\ResourceModel\Post');/* showing the identity to resource model*/
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

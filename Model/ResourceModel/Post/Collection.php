<?php

namespace Learning\CustomForm\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'customer_id'; /*primary key mentioned in the table name*/
    protected $_eventPrefix = 'new_form'; /*table name */
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Learning\CustomForm\Model\Post', 'Learning\CustomForm\Model\ResourceModel\Post');/* to show who is model and resource model */
    }
}

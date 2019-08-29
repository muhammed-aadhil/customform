<?php

namespace Learning\CustomForm\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_postFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Learning\CustomForm\Model\Post $post
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $post;
        return parent::__construct($context);
    }

    public function execute()
    {
        $post = $this->_postFactory;
        $collection = $post->getCollection();
        $posts = $this->getRequest()->getParams();
        //print_r($posts);

        $collection = $post;
        $post->setFirstname($posts['firstname']);
        $post->setLastname($posts['lastname']);
        $post->setMobile($posts['mobile']);
        $post->setEmail($posts['email']);
        $post->setAddress($posts['address']);
        $post->save();
        $post->unsetData();
        unset($post);
        $this->_redirect('customform/index/display');
        $this->messageManager->addSuccessMessage("Thank you contacting us. Our customer care will contact you soon");

//        $posts = $this->getRequest()->getParams();
//
//        echo "<pre>";
//        echo "HI";
//        print_r($post);
//        exit();
//
//        $collection = $this->_getPostCollection->getCollection();

//        if (!empty($post)) {
//            // Retrieve your form data
//            $fname = $post['firstname'];
//            $lname = $post['lastname'];
//            $mob = $post['mobile'];
//            $mail = $post['email'];
//            $add = $post['address'];

//            $collection->set('fname', $fname);
//            $collection->setData('lname', $lname);
//            $collection->setData('mob', $mob);
//            $collection->setData('mail', $mail);
//            $collection->setData('add', $add);
//            $collection->save();
//
//            $this->messageManager->addSuccessMessage('Form saved !');
//
//            // Redirect to your form page (or anywhere you want...)
//            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
//            $resultRedirect->setUrl('/customform/index/display');
//            return $resultRedirect;
//        }
//        $this->_view->loadLayout();
//        $this->_view->renderLayout();
//        return $this->_pageFactory->create();
        echo "DONE!";
    }
}

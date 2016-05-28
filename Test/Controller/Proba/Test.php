<?php
namespace Magento2Proba\Test\Controller\Proba;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
		
		//Dodaje se parent::__construct() da se osigura da se provede construct u roditeljskoj klasi
        return parent::__construct($context);
    }
 
    public function execute()
    {        
        var_dump(__METHOD__);
        $page_object = $this->pageFactory->create();;
        return $page_object;
    }    
}
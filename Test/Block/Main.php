<?php
namespace Magento2Proba\Test\Block;
use Magento\Framework\View\Element\Template;
 
class Main extends Template
{    


// postavljanje poruke	
	protected function _prepareLayout()
{
    $this->setMessage('Ovo je proba i testiranje Magento 2 modula!');
}
}
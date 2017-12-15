<?php
class Magentotutorial_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {        
 
    public function indexAction() {
        Mage::getSingleton('core/session')->addSuccess("Hello world message from the controller"); 
 
        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->renderLayout();
    }
}
<?php
class Magentotutorial_Helloworld_Adminhtml_HelloworldController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {   
        // Load layout.
        $this->loadLayout();
         
        // Set block and template to use for admin.
        $this->_addContent( $this->getLayout()
        ->createBlock( 'helloworld/adminhtml_adminhelloworld' )
        ->setTemplate( 'helloworld/adminhelloworld.phtml' ) );
 
        // Render layout.
        $this->renderLayout();
    }    
}
?>
<?php
class Xy30_Moduleversion_ModuleVersionController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $layout = $this->loadLayout();
        $block = $this->getLayout()->createBlock('adminhtml/template',"name", array("template" => "moduleversion/index.phtml"));
        $layout->_addContent($block);
        $layout->renderLayout();
    }
}
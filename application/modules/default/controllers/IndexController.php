<?php

class Default_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $def = new Default_Model_Model();
        $this->view->value1 = $def->useStandardModel() . ' by ' . get_class($def);
        $this->view->value2 = new Standard_Model_Standard();
    }


}


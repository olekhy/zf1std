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
        echo $def->useStandardModel();
        echo new Standard_Model_Standard();
    }


}


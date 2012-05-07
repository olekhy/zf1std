<?php

class Default_Model_Model
{

    public function useStandardModel()
    {
        echo "used in " . __CLASS__ . ': ';
        return new Standard_Model_Standard();
    }
}


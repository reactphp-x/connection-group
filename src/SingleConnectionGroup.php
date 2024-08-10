<?php

namespace ReactphpX\ConnectionGroup;

class SingleConnectionGroup extends ConnectionGroup
{
    use \ReactphpX\Single\Single;

    protected function init()
    {
       parent::init();
    }
}
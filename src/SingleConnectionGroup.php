<?php

namespace Reactphp\Framework\ConnectionGroup;

class SingleConnectionGroup extends ConnectionGroup
{
    use \Reactphp\Framework\Single\Single;

    protected function init()
    {
       parent::init();
    }
}
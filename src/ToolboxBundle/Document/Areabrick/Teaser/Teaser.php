<?php

namespace ToolboxBundle\Document\Areabrick\Teaser;

use ToolboxBundle\Document\Areabrick\AbstractAreabrick;
use Pimcore\Model\Document\Tag\Area\Info;

class Teaser extends AbstractAreabrick
{
    public function action(Info $info)
    {
        parent::action($info);
    }

    public function getName()
    {
        return 'Teaser';
    }

    public function getDescription()
    {
        return 'Toolbox Teaser';
    }
}
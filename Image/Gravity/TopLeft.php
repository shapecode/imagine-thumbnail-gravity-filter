<?php

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\Point;

/**
 * Class TopLeft
 * @package Shapecode\Imagine\ThumbnailGravity\Image\Gravity
 * @author Nikita Loges
 * @company tenolo GbR
 * @date 23.06.14
 */
class TopLeft extends AbstractGravity
{

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return 0;
    }
}
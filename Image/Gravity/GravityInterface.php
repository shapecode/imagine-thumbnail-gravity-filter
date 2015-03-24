<?php

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\PointInterface;

/**
 * Class GravityInterface
 * @package Shapecode\Imagine\ThumbnailGravity\Image\Gravity
 * @author Nikita Loges
 * @company tenolo GbR
 * @date 23.06.14
 */
interface GravityInterface extends PointInterface
{

    /**
     * @param  BoxInterface $box
     * @return PointInterface
     */
    public function getStartPoint(BoxInterface $box);

    /**
     * @param  BoxInterface $box
     * @return PointInterface
     */
    public function getEndPoint(BoxInterface $box);

    /**
     * Returns another point, moved by a given amount from current coordinates
     *
     * @param  integer $amount
     * @return PointInterface
     */
    public function moveY($amount);

    /**
     * Returns another point, moved by a given amount from current coordinates
     *
     * @param  integer $amount
     * @return PointInterface
     */
    public function moveX($amount);

    /**
     * Returns another point, moved by a given amount from current coordinates
     *
     * @param  BoxInterface $box
     * @return PointInterface
     */
    public function moveBox(BoxInterface $box);
}
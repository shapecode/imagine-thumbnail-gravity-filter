<?php

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;

/**
 * Class BottomRight
 * @package Shapecode\Imagine\ThumbnailGravity\Image\Gravity
 * @author Nikita Loges
 * @company tenolo GbR
 * @date 23.06.14
 */
class BottomRight extends AbstractGravity
{
    /**
     * @var BoxInterface
     */
    private $box;

    /**
     * Constructs coordinate with size instance, it needs to be relative to
     *
     * @param BoxInterface $box
     */
    public function __construct(BoxInterface $box)
    {
        $this->box = $box;
    }

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return $this->box->getWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return $this->box->getHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getStartPoint(BoxInterface $box)
    {
        return new Point($this->getX() - $box->getWidth(), $this->getY() - $box->getHeight());
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint(BoxInterface $box)
    {
        return $this;
    }
}

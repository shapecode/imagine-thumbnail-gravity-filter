<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;
use function ceil;

class MiddleRight extends AbstractGravity
{
    public function getX() : int
    {
        return $this->box->getWidth();
    }

    public function getY() : int
    {
        return (int) ceil($this->box->getHeight() / 2);
    }

    public function getStartPoint(BoxInterface $box) : PointInterface
    {
        $y = (int) ($this->getY() - ($box->getHeight() / 2));

        return new Point($this->getX() - $box->getWidth(), $y);
    }

    public function getEndPoint(BoxInterface $box) : PointInterface
    {
        $y = (int) ($this->getY() + ($box->getHeight() / 2));

        return new Point($this->getX(), $y);
    }
}

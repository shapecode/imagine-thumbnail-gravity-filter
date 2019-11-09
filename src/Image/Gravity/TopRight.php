<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;

class TopRight extends AbstractGravity
{
    public function getX() : int
    {
        return $this->box->getWidth();
    }

    public function getStartPoint(BoxInterface $box) : PointInterface
    {
        $x = $this->getX() - $box->getWidth();

        return new Point($x, $this->getY());
    }

    public function getEndPoint(BoxInterface $box) : PointInterface
    {
        return new Point($this->getX(), $this->getY() + $box->getHeight());
    }
}

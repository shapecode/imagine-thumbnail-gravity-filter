<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;

class TopLeft extends AbstractGravity
{
    public function getStartPoint(BoxInterface $box) : PointInterface
    {
        return new Point($this->getX(), $this->getY());
    }

    public function getEndPoint(BoxInterface $box) : PointInterface
    {
        return new Point($this->getX() + $box->getWidth(), $this->getY() + $box->getHeight());
    }
}

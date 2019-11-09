<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;
use function ceil;

class TopMiddle extends AbstractGravity
{
    public function getX() : int
    {
        return (int) ceil($this->box->getWidth() / 2);
    }

    public function getStartPoint(BoxInterface $box) : PointInterface
    {
        $x = (int) ($this->getX() - ($box->getWidth() / 2));

        return new Point($x, $this->getY());
    }

    public function getEndPoint(BoxInterface $box) : PointInterface
    {
        $x = (int) ($this->getX() + ($box->getWidth() / 2));

        return new Point($x, $this->getY() + $box->getHeight());
    }
}

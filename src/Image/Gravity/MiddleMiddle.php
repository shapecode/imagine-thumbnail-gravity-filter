<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;
use function ceil;

class MiddleMiddle extends AbstractGravity
{
    public function getX() : int
    {
        return (int) ceil($this->box->getWidth() / 2);
    }

    public function getY() : int
    {
        return (int) ceil($this->box->getHeight() / 2);
    }

    public function getStartPoint(BoxInterface $box) : PointInterface
    {
        $x = (int) ($this->getX() - ($box->getWidth() / 2));
        $y = (int) ($this->getY() - ($box->getHeight() / 2));

        return new Point($x, $y);
    }

    public function getEndPoint(BoxInterface $box) : PointInterface
    {
        $x = (int) ($this->getX() + ($box->getWidth() / 2));
        $y = (int) ($this->getY() + ($box->getHeight() / 2));

        return new Point($x, $y);
    }
}

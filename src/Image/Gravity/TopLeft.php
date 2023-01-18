<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;

class TopLeft extends AbstractGravity
{
    public function getStartPoint(BoxInterface $currentSize, BoxInterface $cropSize): PointInterface
    {
        return new Point(0, 0);
    }
}

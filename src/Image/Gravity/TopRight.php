<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;

class TopRight extends AbstractGravity
{
    public function getStartPoint(
        BoxInterface $currentSize,
        BoxInterface $cropSize,
    ): PointInterface {
        $x = $currentSize->getWidth() - $cropSize->getWidth();
        $y = 0;

        return new Point($x, $y);
    }
}

<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;
use function ceil;

class TopMiddle extends AbstractGravity
{
    public function getStartPoint(BoxInterface $currentSize, BoxInterface $cropSize) : PointInterface
    {
        $x = (int) ceil(($currentSize->getWidth() / 2) - ($cropSize->getWidth() / 2));
        $y = 0;

        return new Point($x, $y);
    }
}

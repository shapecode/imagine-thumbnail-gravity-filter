<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;
use Imagine\Image\PointInterface;

use function ceil;

class MiddleRight extends AbstractGravity
{
    public function getStartPoint(BoxInterface $currentSize, BoxInterface $cropSize): PointInterface
    {
        $x = $currentSize->getWidth() - $cropSize->getWidth();
        $y = (int) ceil(($currentSize->getHeight() / 2) - ($cropSize->getHeight() / 2));

        return new Point($x, $y);
    }
}

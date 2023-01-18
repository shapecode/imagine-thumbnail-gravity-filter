<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\PointInterface;

interface GravityInterface
{
    public function getSize(): BoxInterface;

    public function getStartPoint(BoxInterface $currentSize, BoxInterface $cropSize): PointInterface;
}

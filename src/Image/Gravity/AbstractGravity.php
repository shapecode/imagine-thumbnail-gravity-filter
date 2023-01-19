<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;

abstract class AbstractGravity implements GravityInterface
{
    public function __construct(
        private readonly BoxInterface $box,
    ) {
    }

    public function getBox(): BoxInterface
    {
        return $this->box;
    }
}

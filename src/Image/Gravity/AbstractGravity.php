<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;

abstract class AbstractGravity implements GravityInterface
{
    /** @var BoxInterface */
    protected $box;

    public function __construct(BoxInterface $box)
    {
        $this->box = $box;
    }

    public function getSize() : BoxInterface
    {
        return $this->box;
    }
}

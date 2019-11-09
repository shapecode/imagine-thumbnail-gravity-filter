<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use function sprintf;

abstract class AbstractGravity implements GravityInterface
{
    /** @var BoxInterface */
    protected $box;

    public function __construct(BoxInterface $box)
    {
        $this->box = $box;
    }

    public function getX() : int
    {
        return 0;
    }

    public function getY() : int
    {
        return 0;
    }

    public function getSize() : BoxInterface
    {
        return $this->box;
    }

    public function __toString() : string
    {
        return sprintf('(%d, %d)', $this->getX(), $this->getY());
    }
}

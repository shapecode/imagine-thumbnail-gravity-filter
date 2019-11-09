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

    public function getWidth() : int
    {
        return $this->box->getWidth();
    }

    public function getHeight() : int
    {
        return $this->box->getHeight();
    }

    public function isWeightGreaterThanHeight() : bool
    {
        return $this->getWidth() > $this->getHeight();
    }

    public function getRatio() : float
    {
        return $this->getHeight() / $this->getWidth();
    }

    public function equalsRation(float $ratio) : bool
    {
        return $this->getRatio() === $ratio;
    }

    public function __toString() : string
    {
        return sprintf('(%d, %d)', $this->getX(), $this->getY());
    }
}

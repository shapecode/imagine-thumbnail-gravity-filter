<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Util;

use Imagine\Image\BoxInterface;

class BoxUtil
{
    /** @var BoxInterface */
    protected $box;

    public function __construct(BoxInterface $box)
    {
        $this->box = $box;
    }

    public function isWeightGreaterThanHeight() : bool
    {
        return $this->box->getWidth() > $this->box->getHeight();
    }

    public function getRatio() : float
    {
        return $this->box->getHeight() / $this->box->getWidth();
    }

    public function equalsRation(BoxInterface $box) : bool
    {
        $ratio = $box->getHeight() / $box->getWidth();

        return $this->getRatio() === $ratio;
    }
}

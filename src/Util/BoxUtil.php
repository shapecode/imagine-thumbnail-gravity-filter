<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Util;

use Imagine\Image\BoxInterface;

class BoxUtil
{
    public function __construct(
        private readonly BoxInterface $box,
    ) {
    }

    public function isWeightGreaterThanHeight(): bool
    {
        return $this->box->getWidth() > $this->box->getHeight();
    }

    public function getRatio(): float
    {
        return $this->box->getHeight() / $this->box->getWidth();
    }

    public function equalsRation(BoxInterface $box): bool
    {
        $ratio = (float) ($box->getHeight() / $box->getWidth());

        return $this->getRatio() === $ratio;
    }
}

<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Filter\Advanced;

use Imagine\Filter\FilterInterface;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\ManipulatorInterface;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\GravityInterface;

class ThumbnailGravity implements FilterInterface
{
    /** @var BoxInterface */
    private $size;

    /** @var GravityInterface */
    private $gravity;

    public function __construct(BoxInterface $size, GravityInterface $gravity)
    {
        $this->size    = $size;
        $this->gravity = $gravity;
    }

    public function apply(ImageInterface $image) : ManipulatorInterface
    {
        $currentSize = $image->getSize();

        $ratioCurrent = $currentSize->getHeight() / $currentSize->getWidth();
        $ratioNew     = $this->size->getHeight() / $this->size->getWidth();

        // ratio inverse of original and thumb image
        $ratioInverseNew = 1 / $ratioNew;

        // image has to crop
        if ($ratioCurrent !== $ratioNew) {
            if ($this->size->getWidth() > $this->size->getHeight()) {
                $cropHeight = $currentSize->getWidth() * $ratioNew;
                $cropWidth  = $currentSize->getWidth();

                if ($cropHeight > $currentSize->getHeight()) {
                    $correction  = 1 / ($cropHeight / $currentSize->getHeight());
                    $cropWidth  *= $correction;
                    $cropHeight *= $correction;
                }
            } else {
                $cropWidth  = $currentSize->getHeight() * $ratioInverseNew;
                $cropHeight = $currentSize->getHeight();

                if ($cropWidth > $currentSize->getWidth()) {
                    $correction  = 1 / ($cropWidth / $currentSize->getWidth());
                    $cropWidth  *= $correction;
                    $cropHeight *= $correction;
                }
            }

            $cropWidth  = (int) $cropWidth;
            $cropHeight = (int) $cropHeight;

            $cropSize   = new Box($cropWidth, $cropHeight);
            $startPoint = $this->gravity->getStartPoint($cropSize);

            $image = $image->crop($startPoint, $cropSize);
        }

        return $image->resize($this->size);
    }
}

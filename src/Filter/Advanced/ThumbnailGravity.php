<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Filter\Advanced;

use Imagine\Filter\FilterInterface;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Imagine\Image\ManipulatorInterface;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\GravityInterface;
use Shapecode\Imagine\ThumbnailGravity\Util\BoxUtil;

class ThumbnailGravity implements FilterInterface
{
    public function __construct(private GravityInterface $gravity)
    {
    }

    public function apply(ImageInterface $image): ManipulatorInterface
    {
        $currentSize = $image->getSize();
        $gravitySize = $this->gravity->getSize();
        $util        = new BoxUtil($gravitySize);

        $ratioNew        = $util->getRatio();
        $ratioInverseNew = 1 / $ratioNew;

        // image has to crop
        if (! $util->equalsRation($currentSize)) {
            if ($util->isWeightGreaterThanHeight()) {
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

            $cropSize = new Box($cropWidth, $cropHeight);

            $startPoint = $this->gravity->getStartPoint($currentSize, $cropSize);

            $image = $image->crop($startPoint, $cropSize);
        }

        return $image->resize($gravitySize);
    }
}

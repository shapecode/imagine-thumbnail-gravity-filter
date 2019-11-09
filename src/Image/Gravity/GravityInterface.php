<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Image\Gravity;

use Imagine\Image\BoxInterface;
use Imagine\Image\PointInterface;

interface GravityInterface
{
    public function getX() : int;

    public function getY() : int;

    public function getSize() : BoxInterface;

    public function getWidth() : int;

    public function getHeight() : int;

    public function isWeightGreaterThanHeight() : bool;

    public function getRatio() : float;

    public function equalsRation(float $ratio) : bool;

    public function getStartPoint(BoxInterface $box) : PointInterface;

    public function getEndPoint(BoxInterface $box) : PointInterface;
}

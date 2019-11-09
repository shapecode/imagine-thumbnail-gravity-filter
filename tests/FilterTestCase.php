<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Tests;

use Imagine\Image\BoxInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\ImagineInterface;
use PHPStan\Testing\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

abstract class FilterTestCase extends TestCase
{
    protected function getImage() : MockObject
    {
        return $this->createMock(ImageInterface::class);
    }

    protected function getBox() : BoxInterface
    {
        return $this->createMock(BoxInterface::class);
    }

    protected function getImagine() : ImagineInterface
    {
        return $this->createMock(ImagineInterface::class);
    }
}

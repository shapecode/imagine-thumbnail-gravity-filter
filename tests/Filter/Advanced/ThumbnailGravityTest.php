<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Tests\Filter\Advanced;

use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Shapecode\Imagine\ThumbnailGravity\Filter\Advanced\ThumbnailGravity;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\MiddleMiddle;
use Shapecode\Imagine\ThumbnailGravity\Tests\FilterTestCase;

class ThumbnailGravityTest extends FilterTestCase
{
    public function testGravity() : void
    {
        $width  = 100;
        $height = 100;

        $dimension = new Box($width, $height);
        $box       = new Box(25, 25);

        $return = $this->createMock(ImageInterface::class);

        $image = $this->createMock(ImageInterface::class);
        $image->expects($this->once())
            ->method('resize')
            ->willReturn($return);

        $image->expects($this->once())
            ->method('getSize')
            ->willReturn($dimension);

        $gravity = new MiddleMiddle($box);

        $filter = new ThumbnailGravity($gravity);
        $this->assertSame($return, $filter->apply($image));
    }
}

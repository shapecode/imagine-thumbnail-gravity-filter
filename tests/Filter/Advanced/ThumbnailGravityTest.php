<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Tests\Filter\Advanced;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use PHPStan\Testing\TestCase;
use Shapecode\Imagine\ThumbnailGravity\Filter\Advanced\ThumbnailGravity;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\MiddleMiddle;

class ThumbnailGravityTest extends TestCase
{
    public function testGravity() : void
    {
        $box = new Box(25, 25);

        $imagine = new Imagine();
        $image   = $imagine->open(__DIR__ . '/../../_data/test.jpg');

        $gravity = new MiddleMiddle($box);

        $filter = new ThumbnailGravity($gravity);
        $middleMiddle = $filter->apply($image);

        $middleMiddle->save(__DIR__ . '/../../_data/middle_middle.jpg');

    }
}

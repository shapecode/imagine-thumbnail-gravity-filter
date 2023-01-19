<?php

declare(strict_types=1);

namespace Shapecode\Imagine\ThumbnailGravity\Tests\Filter\Advanced;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use PHPUnit\Framework\TestCase;
use Shapecode\Imagine\ThumbnailGravity\Filter\Advanced\ThumbnailGravity;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\BottomLeft;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\BottomMiddle;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\BottomRight;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\MiddleLeft;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\MiddleMiddle;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\MiddleRight;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\TopLeft;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\TopMiddle;
use Shapecode\Imagine\ThumbnailGravity\Image\Gravity\TopRight;

class ThumbnailGravityTest extends TestCase
{
    public function testGravity(): void
    {
        $box = new Box(25, 25);

        $gravities = [
            'top_left'      => new TopLeft($box),
            'top_middle'    => new TopMiddle($box),
            'top_right'     => new TopRight($box),
            'middle_left'   => new MiddleLeft($box),
            'middle_middle' => new MiddleMiddle($box),
            'middle_right'  => new MiddleRight($box),
            'bottom_left'   => new BottomLeft($box),
            'bottom_middle' => new BottomMiddle($box),
            'bottom_right'  => new BottomRight($box),
        ];

        $imagine = new Imagine();

        foreach ($gravities as $name => $gravity) {
            $image = $imagine->open(__DIR__ . '/../../_data/a_test.jpg');

            $filter = new ThumbnailGravity($gravity);
            $thumb  = $filter->apply($image);

            $thumb->save(__DIR__ . '/../../_data/tmp/' . $name . '.jpg');
        }

        $this->expectNotToPerformAssertions();
    }

    public function testGravity2(): void
    {
        $box = new Box(25, 30);

        $gravities = [
            'top_left'      => new TopLeft($box),
            'top_middle'    => new TopMiddle($box),
            'top_right'     => new TopRight($box),
            'middle_left'   => new MiddleLeft($box),
            'middle_middle' => new MiddleMiddle($box),
            'middle_right'  => new MiddleRight($box),
            'bottom_left'   => new BottomLeft($box),
            'bottom_middle' => new BottomMiddle($box),
            'bottom_right'  => new BottomRight($box),
        ];

        $imagine = new Imagine();

        foreach ($gravities as $name => $gravity) {
            $image = $imagine->open(__DIR__ . '/../../_data/a_test.jpg');

            $filter = new ThumbnailGravity($gravity);
            $thumb  = $filter->apply($image);

            $thumb->save(__DIR__ . '/../../_data/tmp/2_' . $name . '.jpg');
        }

        $this->expectNotToPerformAssertions();
    }
}

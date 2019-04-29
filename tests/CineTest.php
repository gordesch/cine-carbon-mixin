<?php

use PHPUnit\Framework\TestCase;
use Carbon\Carbon;
use Gordesch\CineCarbonMixin;

final class CineTest extends TestCase
{
    public function testFirstDayOfWeekIsWednesday(): void
    {
        Carbon::mixin(new CineCarbonMixin);
        $this->assertEquals(
            Carbon::now()->cine()->startOfWeek()->dayOfWeek,
            Carbon::WEDNESDAY
        );
    }
}

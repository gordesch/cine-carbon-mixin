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

    public function testProgrammingWeekIsDifferentFromCalendarWeek(): void
    {
        Carbon::mixin(new CineCarbonMixin());
        $monday = Carbon::parse('next monday')->cine();
        $programming_week_number = $monday->programmingWeek();
        $this->assertNotEquals(
            $monday->isoFormat('WW'),
            $programming_week_number
        );
    }
}

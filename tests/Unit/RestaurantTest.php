<?php

namespace Tests\Unit;

use App\Http\Controllers\RestaurantController;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;


class RestaurantTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_timeConversion()
    {
        $time = Carbon::parse('2020/1/1 12:10');
        $returnTime = RestaurantController::GetClosestHalfHour($time);

        $this->assertEquals(Carbon::parse('2020/1/1 12:30')->toISOString(), $returnTime->toISOString());
    }
}

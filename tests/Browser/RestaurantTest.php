<?php
namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RestaurantTest extends DuskTestCase
{

    public function testRestaurantIndexFromHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Show restaurants')
                ->assertSee('All Restaurants');
        });
    }

    public function testRestaurantShow()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/restaurants')
                ->clickLink('De Lindehof')
                ->assertSee('Selected Restaurant');
        });
    }
}

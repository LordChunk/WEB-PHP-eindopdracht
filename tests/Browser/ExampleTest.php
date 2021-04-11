<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    //use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Show restaurants')
                    ->assertSee('Show festivals and cinemas');
        });
    }

    public function testRestaurantIndexFromHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Show restaurants')
                ->assertSee('All Restaurants');
        });
    }

    public function testOrderablesIndexFromHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Show festivals and cinemas')
                ->assertSee('All Orderables');
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

    public function testCinemaIndex()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cinema')
                ->assertSee('Vue Eindhoven');
        });
    }

    public function testCinemaIndexFromOrderables()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/orderables')
                ->clickLink('filter cinemas')
                ->assertSee('All Cinemas');
        });
    }

    public function testCinemaShow()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cinema')
                ->clickLink('Vue')
                ->assertSee('Selected Cinema');
        });
    }

    public function testFestivalIndex()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/festivals')
                ->assertSee('Wildeburg');
        });
    }

    public function testFestivalIndexFromOrderables()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/orderables')
                ->clickLink('filter festivals')
                ->assertSee('All Festivals');
        });
    }

    public function testFestivalShow()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/festivals')
                ->clickLink('Wildeburg')
                ->assertSee('Selected Festival');
        });
    }
}

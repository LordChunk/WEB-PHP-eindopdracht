<?php
namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class OrderableTest extends DuskTestCase
{

    public function testOrderablesIndexFromHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Show festivals and cinemas')
                ->assertSee('All Orderables');
        });
    }
}

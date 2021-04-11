<?php
namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CinemaTest extends DuskTestCase
{

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

    public function testCinemaBuy()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cinema')
                ->clickLink('Vue')
                ->clickLink('Book show')
                ->clickLink('3')
                ->assertSee('Email');
        });
    }
}

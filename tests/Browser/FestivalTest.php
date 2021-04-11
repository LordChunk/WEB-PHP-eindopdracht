<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FestivalTest extends DuskTestCase
{

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

    public function testFestivalBuy()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/festivals')
                ->clickLink('Wildeburg')
                ->clickLink('Buy tickets')
                ->assertSee('Email');
        });
    }
}

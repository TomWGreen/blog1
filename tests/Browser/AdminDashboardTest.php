<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminDashTest extends DuskTestCase
{
    /**
     * A Dusk test.
     *
     * @return void
     */
    public function test_user_able_to_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
                    ->type('email', 'tom.william.green@gmail.com')
                    ->type('password','Password')
                    ->click('button[type="submit"]')
                    ->assertSee('blog1');
        });
    }

    /**
     * A Dusk test.
     *
     * @return void
     */
    public function test_we_can_see_categories()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                    ->visit('/admin/resources/categories')
                    ->waitForText('Create Category')
                    ->assertSee('Create Category');
        });
    }

    /**
     * A Dusk test.
     *
     * @return void
     */
    public function test_creation_of_category()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                    ->visit('/admin/resources/categories/new')
                    ->waitForText('Create Category')
                    ->assertSee('Create Category')
                    ->type('#name', 'Category 99')
                    ->type('#description','Category 99 description')
                    ->click('button[type="submit"]')
                    ->waitForText('Category 99')
                    ->assertSee('Category 99');
                    /**
                     */
        });
    }
}

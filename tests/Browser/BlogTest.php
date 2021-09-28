<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BlogTest extends DuskTestCase
{
    /**
     * A Dusk test.
     *
     * @return void
     */
    public function test_blog_posts_visible()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Post 1');
        });
    }

    /**
     * A Dusk test.
     *
     * @return void
     */
    public function test_individual_blog_selection()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('a.btn.btn-primary')
                    ->waitForText('Posted on')
                    ->assertSee('Posted on');
        });
    }

    /**
     * A Dusk test.
     *
     * @return void
     */
    public function test_blog_posts_visibility_by_category()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Category1')
            ->waitForText('Post 1 content')
            ->assertSee('Post 1 content');
});
    }

}

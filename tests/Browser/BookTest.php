<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class BookTest extends DuskTestCase
{

    public function testCreateBook()
    {
        $admin = \App\User::find(1);
        $book = factory('App\Book')->make();

        $relations = [
            factory('App\Category')->create(), 
            factory('App\Category')->create(), 
        ];

        $this->browse(function (Browser $browser) use ($admin, $book, $relations) {
            $browser->loginAs($admin)
                ->visit(route('admin.books.index'))
                ->clickLink('Add new')
                ->type("name", $book->name)
                ->select('select[name="category[]"]', $relations[0]->id)
                ->select('select[name="category[]"]', $relations[1]->id)
                ->press('Save')
                ->assertRouteIs('admin.books.index')
                ->assertSeeIn("tr:last-child td[field-key='name']", $book->name)
                ->assertSeeIn("tr:last-child td[field-key='category'] span:first-child", $relations[0]->name)
                ->assertSeeIn("tr:last-child td[field-key='category'] span:last-child", $relations[1]->name)
                ->logout();
        });
    }

    public function testEditBook()
    {
        $admin = \App\User::find(1);
        $book = factory('App\Book')->create();
        $book2 = factory('App\Book')->make();

        $relations = [
            factory('App\Category')->create(), 
            factory('App\Category')->create(), 
        ];

        $this->browse(function (Browser $browser) use ($admin, $book, $book2, $relations) {
            $browser->loginAs($admin)
                ->visit(route('admin.books.index'))
                ->click('tr[data-entry-id="' . $book->id . '"] .btn-info')
                ->type("name", $book2->name)
                ->select('select[name="category[]"]', $relations[0]->id)
                ->select('select[name="category[]"]', $relations[1]->id)
                ->press('Update')
                ->assertRouteIs('admin.books.index')
                ->assertSeeIn("tr:last-child td[field-key='name']", $book2->name)
                ->assertSeeIn("tr:last-child td[field-key='category'] span:first-child", $relations[0]->name)
                ->assertSeeIn("tr:last-child td[field-key='category'] span:last-child", $relations[1]->name)
                ->logout();
        });
    }

    public function testShowBook()
    {
        $admin = \App\User::find(1);
        $book = factory('App\Book')->create();

        $relations = [
            factory('App\Category')->create(), 
            factory('App\Category')->create(), 
        ];

        $book->category()->attach([$relations[0]->id, $relations[1]->id]);

        $this->browse(function (Browser $browser) use ($admin, $book, $relations) {
            $browser->loginAs($admin)
                ->visit(route('admin.books.index'))
                ->click('tr[data-entry-id="' . $book->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='name']", $book->name)
                ->assertSeeIn("tr:last-child td[field-key='category'] span:first-child", $relations[0]->name)
                ->assertSeeIn("tr:last-child td[field-key='category'] span:last-child", $relations[1]->name)
                ->logout();
        });
    }

}

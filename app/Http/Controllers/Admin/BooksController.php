<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBooksRequest;
use App\Http\Requests\Admin\UpdateBooksRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BooksController extends Controller
{
    /**
     * Display a listing of Book.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('book_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Book::query();
            $query->with("category");
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('book_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'books.id',
                'books.name',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'book_';
                $routeKey = 'admin.books';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('category.name', function ($row) {
                if(count($row->category) == 0) {
                    return '';
                }

                return '<span class="label label-info label-many">' . implode('</span><span class="label label-info label-many"> ',
                        $row->category->pluck('name')->toArray()) . '</span>';
            });

            $table->rawColumns(['actions','massDelete','category.name']);

            return $table->make(true);
        }

        return view('admin.books.index');
    }

    /**
     * Show the form for creating new Book.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('book_create')) {
            return abort(401);
        }
        
        $categories = \App\Category::get()->pluck('name', 'id');


        return view('admin.books.create', compact('categories'));
    }

    /**
     * Store a newly created Book in storage.
     *
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksRequest $request)
    {
        if (! Gate::allows('book_create')) {
            return abort(401);
        }
        $book = Book::create($request->all());
        $book->category()->sync(array_filter((array)$request->input('category')));



        return redirect()->route('admin.books.index');
    }


    /**
     * Show the form for editing Book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('book_edit')) {
            return abort(401);
        }
        
        $categories = \App\Category::get()->pluck('name', 'id');


        $book = Book::findOrFail($id);

        return view('admin.books.edit', compact('book', 'categories'));
    }

    /**
     * Update Book in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooksRequest $request, $id)
    {
        if (! Gate::allows('book_edit')) {
            return abort(401);
        }
        $book = Book::findOrFail($id);
        $book->update($request->all());
        $book->category()->sync(array_filter((array)$request->input('category')));



        return redirect()->route('admin.books.index');
    }


    /**
     * Display Book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('book_view')) {
            return abort(401);
        }
        $book = Book::findOrFail($id);

        return view('admin.books.show', compact('book'));
    }


    /**
     * Remove Book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('book_delete')) {
            return abort(401);
        }
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.books.index');
    }

    /**
     * Delete all selected Book at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('book_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Book::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('book_delete')) {
            return abort(401);
        }
        $book = Book::onlyTrashed()->findOrFail($id);
        $book->restore();

        return redirect()->route('admin.books.index');
    }

    /**
     * Permanently delete Book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('book_delete')) {
            return abort(401);
        }
        $book = Book::onlyTrashed()->findOrFail($id);
        $book->forceDelete();

        return redirect()->route('admin.books.index');
    }
}

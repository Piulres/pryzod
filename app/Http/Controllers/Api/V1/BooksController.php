<?php

namespace App\Http\Controllers\Api\V1;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBooksRequest;
use App\Http\Requests\Admin\UpdateBooksRequest;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BooksController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }

    public function update(UpdateBooksRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        

        return $book;
    }

    public function store(StoreBooksRequest $request)
    {
        $book = Book::create($request->all());
        

        return $book;
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return '';
    }
}

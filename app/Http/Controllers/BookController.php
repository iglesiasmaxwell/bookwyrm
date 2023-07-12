<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Library;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function indexhome(Request $request)
    {
        // $book_info = Book::get();
        // return view('home', [
        //     'book_info' => $book_info
        // ]);

        $book_info_read = DB::select('SELECT * FROM `book_info` WHERE `condition` = "reading"');
        $book_info_plan = DB::select('SELECT * FROM `book_info` WHERE `condition` = "planning"');
        $book_info_end = DB::select('SELECT * FROM `book_info` WHERE `condition` = "completed"');
        return view('home', [
            'book_info_read' => $book_info_read,
            'book_info_plan' => $book_info_plan,
            'book_info_end' => $book_info_end
        ]);
    }
    public function indexreading(Request $request): View
    {
        $book_info_read = DB::select('SELECT * FROM `book_info` WHERE `condition` = "reading"');
        return view('reading', [
            'book_info' => $book_info_read
        ]);
    }
    public function indexplanning(Request $request): View
    {
        $book_info_plan = DB::select('SELECT * FROM `book_info` WHERE `condition` = "planning"');
        return view('planning', [
            'book_info' => $book_info_plan
        ]);
    }
    public function indexcompleted(Request $request): View
    {
        $book_info_end = DB::select('SELECT * FROM `book_info` WHERE `condition` = "completed"');
        return view('completed', [
            'book_info' => $book_info_end
        ]);
    }
    
    public function indexlibrary(Request $request): View
    {
        $library_info = DB::select('SELECT * FROM `library_info`');
        return view('netlib', [
            'library_info' => $library_info
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => ['required', 'max:200'],
            'subtitle' => ['max:150'],
            'author' => ['required', 'max:100'],
            'pages' => ['max:11'],
            'year' => ['max:4'],
            'rating' => ['exclude_unless:condition,completed', 'max:1'],
            'condition'=>['required'],
        ]);

        Book::create($input);
        return redirect()->route('home');
    }
    
    public function storelibrary(Request $request)
    {
        $input = $request->validate([
            'library_name' => ['required', 'max:200'],
            'library_url' => ['required', 'max:200'],
        ]);

        Library::create($input);
        return redirect()->route('library');
    }

    public function edit(Request $request, Book $book_info)
    {
        return view('edit', [
            'book_info' => $book_info
        ]);
    }
    
    public function editlibrary(Request $request, Library $library_info)
    {
        return view('editlib', [
            'library_info' => $library_info
        ]);
    }

    public function update(Request $request, Book $book_info)
    {
        $input = $request->validate([
            'title' => ['required', 'max:200'],
            'subtitle' => ['max:150'],
            'author' => ['required', 'max:100'],
            'pages' => ['max:11'],
            'year' => ['max:4'],
            'rating' => ['max:1'],
            'condition'=>['required'],
        ]);

        $book_info->update($input);
        return redirect()->route('home');
    }
    
    public function updatelibrary(Request $request, Library $library_info)
    {
        $input = $request->validate([
            'library_name' => ['required', 'max:200'],
            'library_url' => ['required', 'max:200'],
        ]);

        $library_info->update($input);
        return redirect()->route('library');
    }

    public function delete(Request $request, Book $book_info)
    {
        $book_info->delete();
        return redirect()->back();
    }
    
    public function deletelibrary(Request $request, Library $library_info)
    {
        $library_info->delete();
        return redirect()->back();
    }
}

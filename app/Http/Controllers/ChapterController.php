<?php

namespace App\Http\Controllers;

use App\Book;
use App\Chapter;
use App\Http\Requests\ChapterRequest;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    
    function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book)
    {
        $this->authorize('create', [Chapter::class ,$book]);
        $chapter = new Chapter;
        return view('chapter.create', compact('book', 'chapter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Book $book, ChapterRequest $request)
    {
        $this->authorize('storeChapter', [Chapter::class ,$book]);
        $chapter = (new Chapter)->fill($request->validated());
        $chapter->book_id = $book->id;
        $chapter->save();
        return redirect(route('book.show', $book))->with('status', 'chapter has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book, Chapter $chapter)
    {
        return view('chapter.show', compact('book', 'chapter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, Chapter $chapter)
    {
        return view('chapter.edit', compact('book', 'chapter')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(ChapterRequest $request, Book $book, Chapter $chapter)
    {
        $chapter->update($request->validated());
        return redirect(route('book.show', $book))->with('status', 'chapter has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, Chapter $chapter)
    {
        $chapter->delete();
        return back()->with('status', 'chapter has been deleted');
    }
}

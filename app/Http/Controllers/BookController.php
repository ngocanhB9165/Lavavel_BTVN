<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookAddRequest;
use App\Http\Requests\BookEditRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function list_book()
    {
        $book = Book::orderByDesc('id')->paginate(3);
        return view('admin.book.list_book',compact('book'));
    }
    public function add_book()
    {
        $author = Author::all();
        return view('admin.book.add_book',compact('author'));
    }
    public function create(BookAddRequest $req)
    {
        $req->validated();
        if($req->has('file')){
            $file = $req->file;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        }
        
        try {
            $req->merge(['image'=>$file_name]);
            Book::create($req->all());
            return redirect()->route('list_book')->with('success','Add Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Thêm mới thất bại');
        }
    }
    public function update_book($id)
    {
        $book = Book::find($id);
        $author = Author::all();
        return view('admin.book.update_book',compact('book','author'));
    }
    public function edit(BookEditRequest $req,$id)
    {
        $req->validated();
        $book = Book::find($id);
        if($req->has('file')){
            $file = $req->file;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
            
        }else{
            $file_name = $book->image;
        }
        
        try {
            $req->merge(['image'=>$file_name]);
            $book->update($req->all());
            return redirect()->route('list_book')->with('update_success','Sửa thành công');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function delete($id)
    {
        $book = Book::find($id);
        if($book->delete()){
            return redirect()->route('list_book');
        }
    }
}

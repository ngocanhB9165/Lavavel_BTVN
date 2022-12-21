<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorAddRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use PhpParser\Node\Stmt\TryCatch;

class AuthorController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function list_author()
    {
        $author = Author::orderByDesc('id')->paginate(3);
        return view('admin.author.list_author',compact('author'));
    }
    public function add_author()
    {
        return view('admin.author.add_author');
    }
    public function insert(AuthorAddRequest $req)
    {
        // $author = Author::create([
        //     'name' =>$req->name,
        //     'status' =>$req->status
        // ]);
        $req->validated();
        try {
            $author = Author::create($req->all());      
            return redirect()->route('list_author')->with('success','Thêm mới thành công');
        } catch (\Throwable $th) {
            dd('serve đang bảo trì');
        }
        
    }
    public function update_author($id)
    {
        $author = Author::find($id);
        return view('admin.author.update_author',compact('author'));
    }
    public function update(Request $req,$id)
    {
        $author = Author::find($id);
        $author->update($req->all());
        if($author){
            return redirect()->route('list_author');
        }
    }
    public function delete($id)
    {
        $author = Author::find($id);
        if($author->delete()){
            return redirect()->route('list_author');
        }
    }
}

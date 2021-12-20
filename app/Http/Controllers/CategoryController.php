<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Policies\CategoryPolicy;
use App\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(){
        $categories =Category::where('user_id',Auth::user()->id)->get();
        return view('category.index',['categories'=>$categories]);
    }

    public function create(){
        return view('category.create');
    }

    public function store(CategoryRequest $request){
        $category= new Category();
        $this->authorize('create',$category);
        $category->name=$request->name;
        $category -> user_id = Auth::user() -> id;
        $category->save();
        
        return redirect('category');
    }

    public function show($id){
        $category= Category::findOrFail($id);
        $this->authorize('view',$category);
        return view('category.show',['category'=>$category]);
    }

    public function edit($id){
        $category=Category::findOrFail($id);
        $this->authorize('update',$category);
        return view('category.edit',['category'=>$category]);
    }

    public function update(CategoryRequest $request, $id){
        $category= Category::findOrFail($id);
        $this->authorize('update',$category);
        $category->name=$request->name;
        $category -> user_id = Auth::user() -> id;
        $category->save();

        return redirect('category');
    }

    public function destroy($id){
        $category= Category::find($id);
        $this->authorize('delete',$category);
        $category->delete();
        return redirect('category'); 
    }
}

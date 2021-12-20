<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $products =Product::where('user_id',Auth::user()->id)->get();
        $categories= Category::where('user_id',Auth::user()->id)->get();
        return view('product.index',['products'=>$products,'categories'=>$categories]);
    }

    public function create(){
        $category=Category::where('user_id',Auth::user()->id)->get();
        return view('product.create',['category'=>$category]);
    }

    public function store(ProductRequest $request){
        $product =new Product();
        $this->authorize('create',$product);
        $product->name=$request->name;
        $category=Category::where('user_id',Auth::user()->id)->get();

        foreach($category as $categ){
            if($categ->name===$request->category){
                $product->category_id=$categ->id;
            }
        }
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $product -> image=$image->move('images', $name);
        }

        $product->buyPrice=$request->buyPrice;
        $product->sellPrice=$request->sellPrice;
        $product->quantity=$request->quantity;  
        $product -> user_id = Auth::user() -> id;
        $product->save();

        return redirect('product');
    }

    public function show($id){
        $product=Product::with('categories')->findOrFail($id);
        $this->authorize('view',$product);
        $category=Category::find($product->category_id);
        return view('product.show',['product'=>$product,'category'=>$category]);
    }

    public function edit($id){
        $product=Product::with('categories')->findOrFail($id);
        $category=Category::findOrFail($product->category_id);
        $listCategory =  Category::where('user_id',Auth::user()->id)->get();
        return view('product.edit',['product'=>$product,'category'=>$category,'listCategory'=>$listCategory]);
    }

    public function update(ProductRequest $request,$id){
        $product=Product::findOrFail($id);
        $this->authorize('update',$product);

        $category=Category::find($product->category_id);

        if($category->name===$request->category){
            $product->category_id=$category->id;
        }
        
         
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $product -> image=$image->move('images', $name);
        }
           
        $product->name=$request->name;
        $product->buyPrice=$request->buyPrice;
        $product->sellPrice=$request->sellPrice;
        $product->quantity=$request->quantity;
        $product -> user_id = Auth::user() -> id;
        $product->save();
        return redirect('product');
    }

    public function destroy($id){
        $product=Product::with('categories')->findOrFail($id);
        $this->authorize('delete',$product);
        $product->delete();
        return redirect('product');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\SellRequest;
use App\Product;
use App\Provider;
use App\Sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $sells=Sell::where('user_id',Auth::user()->id)->get();
        $providers=Provider::where('user_id',Auth::user()->id)->get();
        $products=Product::where('user_id',Auth::user()->id)->get();   
     
        return view('sell.index',['sells'=>$sells,'providers'=>$providers,'products'=>$products]);
    }
    public function create(){
        $providers=Provider::where('user_id',Auth::user()->id)->get();
        $products=Product::where('user_id',Auth::user()->id)->get();
        return view('sell.create',['providers'=>$providers,'products'=>$products]);
    }
    public function store (SellRequest $request){
        $sell= new Sell();
        $this->authorize('create',$sell);

        $providers=Provider::where('user_id',Auth::user()->id)->get();
        $products=Product::where('user_id',Auth::user()->id)->get();

        foreach($providers as $provider){
            if($provider->fullName===$request->provider){
                $sell->provider_id=$provider->id;
            }
        }

        foreach($products as $product){
            if($product->name===$request->product){
                $sell->product_id=$product->id;
            }
        }

        $sell->sellDate=$request->sellDate;
        $sell->quantity=$request->quantity;
        $sell -> user_id = Auth::user() -> id;
        $sell->save();

        return redirect('sell');
    }
    public function show($id){
        $sell=Sell::findOrFail($id);
        $this->authorize('view',$sell);

        $providers=Provider::findOrFail($sell->provider_id);
        $products=Product::findOrFail($sell->product_id);
        return view('sell.show',['sell'=>$sell,'provider'=>$providers,'product'=>$products]);
    }
    public function edit($id){
        $sell=Sell::findOrFail($id);
        $this->authorize('update',$sell);

        $provider=Provider::findOrFail($sell->provider_id);
        $providers =  Provider::where('user_id',Auth::user()->id)->get();
        $product=Product::findOrFail($sell->product_id);
        $products=  Product::where('user_id',Auth::user()->id)->get();
        return view('sell.edit',['sell'=>$sell,'provider'=>$provider,'product'=>$product,'providers'=>$providers,'products'=>$products]);
    }
    public function update(SellRequest $request,$id){
        $sell=Sell::findOrFail($id);
        $this->authorize('update',$sell);

        $provider=Provider::find($sell->provider_id);
        $product=Product::find($sell->product_id);

        if($provider->name===$request->provider){
            $sell->provider_id=$provider->id;
        }
    
        if($product->name===$request->product){
            $sell->product_id=$product->id;
        }
        
        $sell->sellDate=$request->sellDate;
        $sell->quantity=$request->quantity;
        $sell -> user_id = Auth::user() -> id;
        $sell->save();

        return redirect('sell');
    }
    public function destroy($id){
        $sell=Sell::findOrFail($id);
        $this->authorize('delete',$sell);

        $sell->delete();
        return redirect('sell');
    }
}

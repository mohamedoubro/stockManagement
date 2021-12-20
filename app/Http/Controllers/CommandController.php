<?php

namespace App\Http\Controllers;

use App\Command;
use App\Http\Requests\CommandRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){
        $commands =Command::where('user_id',Auth::user()->id)->get();
        $products = Product::where('user_id',Auth::user()->id)->get();
        return view('command.index',['commands'=>$commands,'products'=>$products]);
    }

    public function create(){
        $products = Product::where('user_id',Auth::user()->id)->get();
        return view('command.create',['products'=>$products]);
    }

    public function store(CommandRequest $request){
        $command =new Command();
        $this->authorize('create',$command);
        $products= Product::where('user_id',Auth::user()->id)->get();

        foreach($products as $product){
            if ($product->name=$request->product){
                $command->product_id=$product->id;
            }
        }        
        $command->commandDate=$request->commandDate;
        $command->quantity=$request->quantity;
        $command -> user_id = Auth::user() -> id;
        $command->save();

        return redirect('command');
    }

    public function show($id){
        $command=Command::findOrFail($id);
        $this->authorize('view',$command);
        $product = Product::find($command->product_id);
        return view('command.show',['command'=>$command,'product'=>$product]);
    }

    public function edit($id){
        $command=Command::findOrFail($id);
        $this->authorize('update',$command);
        $product = Product::find($command->product_id);
        $products = Product::where('user_id',Auth::user()->id)->get();
        return view('command.edit',['command'=>$command,'products'=>$products,'product'=>$product]);
    }

    public function update(CommandRequest $request,$id){
        $command=Command::findOrFail($id);
        $this->authorize('update',$command);
        $product= Product::find($command->product_id);        
        $command->product_id=$product->id;
        $command->commandDate=$request->commandDate;
        $command->quantity=$request->quantity;
        $command -> user_id = Auth::user() -> id;
        $command->save();
        return redirect('command');
    }

    public function destroy($id){
        $command=Command::findOrFail($id);
        $this->authorize('delete',$command);
        $command->delete();
        return redirect('command');
    }
}

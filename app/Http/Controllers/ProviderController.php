<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProviderRequest;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $providers=Provider::where('user_id',Auth::user()->id)->get();
        return view('provider.index',['providers'=>$providers]);
    }
    public function create(){
        return view('provider.create');
    }
    public function store(ProviderRequest $request){
        $provider = new Provider();
        // $this->authorize('create',$provider);
        $provider->fullName=$request->fullName;
        $provider->dateOfBirth=$request->dateOfBirth;
        $provider->phone=$request->phone;
        $provider->email=$request->email;
        $provider->adress=$request->adress;
        $provider->city=$request->city;        
        $provider -> user_id = Auth::user() -> id;
        $provider->save();

        return redirect('provider');
    }
    public function show($id){
        $provider=Provider::findOrFail($id);
        $this->authorize('view',$provider);
        return view('provider.show',['provider'=>$provider]);
    }
    public function edit($id){
        $provider=Provider::findOrFail($id);
        $this->authorize('update',$provider);

        return view('provider.edit',['provider'=>$provider]);
    }
    public function update(ProviderRequest $request,$id){
        $provider=Provider::findOrFail($id);
        $this->authorize('update',$provider);

        $provider->fullName=$request->fullName;
        $provider->dateOfBirth=$request->dateOfBirth;
        $provider->phone=$request->phone;
        $provider->email=$request->email;
        $provider->adress=$request->adress;
        $provider->city=$request->city;
        $provider -> user_id = Auth::user() -> id;

        $provider->save();

        return redirect('provider');
    }
    public function destroy($id){
        $provider=Provider::findOrFail($id);
        $this->authorize('delete',$provider);

        $provider->delete();
        return redirect('provider');   
    }
}

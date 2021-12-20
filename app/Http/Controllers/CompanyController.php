<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $companies =Company::where('user_id',Auth::user()->id)->get();
        return view('company.index',['companies'=>$companies]);
    }

    public function create(){
        return view('company.create');
    }

    public function store(CompanyRequest $request){
        $company =new Company();
        $this->authorize('create',$company);
        $company->name=$request->name;
        $company->specialty=$request->specialty;
        $company->content=$request->content;
        if ($request->hasFile('image')){
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $company -> image=$image->move('images', $name);
        }
        $company->dateOfBirth=$request->dateOfBirth;
        $company->phone=$request->phone;
        $company->email=$request->email;
        $company->adress=$request->adress;
        $company->city=$request->city;
        $company -> user_id = Auth::user() -> id;

        $company->save();

        return redirect('company');
    }

    public function show($id){
        $company=Company::findOrFail($id);
        $this->authorize('view',$company);
        return view('company.show',['company'=>$company]);
    }
    public function details(){
        $company=Company::where('user_id',auth::user()->id)->first();
        if($company){  
            return view('home',['company'=>$company]);
        }
        else{
            return view('company.create');
        }
    }

    public function edit($id){
        $company=Company::findOrFail($id);
        $this->authorize('update',$company);
        return view('company.edit',['company'=>$company]);
    }

    public function update(CompanyRequest $request,$id){
        $company=Company::findOrFail($id);
        $this->authorize('update',$company);
        $company->name=$request->name;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $company -> image=$image->move('images', $name);
        }
        $company->specialty=$request->specialty;
        $company->content=$request->content;
        $company->dateOfBirth=$request->dateOfBirth;
        $company->phone=$request->phone;
        $company->email=$request->email;
        $company->adress=$request->adress;
        $company->city=$request->city;
        $company -> user_id = Auth::user() -> id;
        $company->save();
        return redirect('company');
    }

    public function destroy($id){
        $company=Company::findOrFail($id);
        $this->authorize('delete',$company);
        $company->delete();
        return redirect('company');
    }
}

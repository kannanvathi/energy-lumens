<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:career-list|career-create|career-edit|career-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:career-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:career-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:career-delete', ['only' => ['delete']]);

    }

    public function index()
    {
        $careers = Career::all();
        return view('careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
          'candidate_name' => 'required',
          'email' => 'required|email|unique:careers,email',
           'phone_no' => 'required',
         /*  'attachment' => 'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048',*/
           'attachment' => 'required|mimes:pdf,xlx,csv|max:2048',
       ]);

        $career = $request->all();
/*
        if ($image = $request->file('attachment')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $career['attachment'] = "$profileImage";
        }*/

        $fileName = time().'.'.$request->attachment->extension();
        $request->attachment->move(public_path('uploads'), $fileName);
        $career['attachment'] = "$fileName";

       Career::create($career);
       return redirect()->route('careers.index')->with('success', 'Form submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {

        return view('careers.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $request->validate([
            'candidate_name' => 'required',
            'phone_no' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('attachment')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['attachment'] = "$profileImage";
        }else{
            unset($input['attachment']);
        }

        $career->update($input);
        return redirect()->route('careers.index')->with('success', 'Forms updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Career deleted successfully');

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Models\Categories;
use App\Models\Departments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    protected $departments;
    public function __construct(Departments $departments)
    {
        $this->departments = $departments;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->departments::all();

        return  view('admin.pages.Department.list',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();

        return  view('admin.pages.Department.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $this->departments::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
        ]);

        Alert::success('Created Department Successfully');

        return redirect()->route('department.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departments = $this->departments::findOrFail($id);

        return view('admin.pages.Department.show',compact('departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $departments = $this->departments::findOrFail($id);
        return view('admin.pages.Department.edit',compact('departments','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departments = $this->departments::findOrFail($id);

        $departments->name = $request->name;
        $departments->category_id = $request->category_id;

        $departments->save();

        if (!$departments){

        }

        Alert::success('Update Department Successfully');
        return redirect()->route('department.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departments = $this->departments::findOrFail($id);
        $departments->delete();

        return redirect()->route('department.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Categories;
use App\Models\Items;
use App\Models\Companies;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    protected $categories;

    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categories::all();


        return view('admin.pages.Category.list', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories::all();
        $companies = Companies::all();
        $items = Items::all();


        return view('admin.pages.Category.create', compact('categories', 'companies', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/categories/', $filename);
            $request->image = $filename;
        }
        $this->categories::create([
            'name' => $request->name,
            'company_id' => $request->company_id,
            'item_id' => $request->item_id,
            'image' => $request->image,
        ]);
        Alert::success('Created Category Successfully');



        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categories::findOrFail($id);
        $categories = $this->categories::with('items','companies')->get();
        return view('admin.pages.Category.show',compact('category','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Companies::all();
        $items = Items::all();
        $categories = $this->categories::findOrFail($id);


        return view('admin.pages.Category.edit', compact('categories', 'companies', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = $this->categories::findOrFail($id);
        $categories->name = $request->name;
        $categories->company_id = $request->company_id;
        $categories->item_id = $request->item_id;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/categories/', $filename);
            $categories->image = $filename;
        }

        $categories->save();

        Alert::success('Update Category Successfully');

        return redirect()->route('category.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = $this->categories::findOrFail($id);
        $categories->delete();

        return redirect()->route('category.index');


    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;
use App\Models\Items;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    protected $items;
    public function __construct(Items $items)
    {
        $this->items = $items;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::all();
        return view('admin.pages.Items.list',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return  view('admin.pages.Items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/items/', $filename);
            $request->image = $filename;
        }
        $this->items::create([
           'name'=>$request->name,
           'price'=>$request->price,
           'description'=>$request->description,
            'image'=>$request->image
        ]);

        Alert::success('Created Item Successfully');

        return redirect()->route('item.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items= $this->items::findOrFail($id);

        return view('admin.pages.Items.show',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items= $this->items::findOrFail($id);

        return view('admin.pages.Items.edit',compact('items'));
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
        $items= $this->items::findOrFail($id);
        $items->name = $request->name;
        $items->price=$request->price;
        $items->description= $request->description;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/items/', $filename);
            $request->image = $filename;

        }

        $items->save();
        if (!$items){

        }
        Alert::success('Update Item Successfully');

        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $items= $this->items::findOrFail($id);
        $items->delete();
        return redirect()->route('item.index');


    }
}

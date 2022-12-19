<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //list-of-items/res/{{$id}}/cat/{{$value->id}}
    public function index($id, $catid)
    {
        $items = Item::all()->where("res_id", $id)->where('cat_id', $catid);

        return view('list.list-of-items', ["items" => $items, "resid" => $id, "catid" => $catid]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getCategories()
    {
        $categories = Category::all()->where("res_id", Auth::user()->res_id);
        return view('add.add-item', ['categories' => $categories]);
    }


    public function getItem($id)
    {
        $item = Item::find($id);
        $categories = Category::all()->where("res_id", Auth::user()->res_id);
        return view('add.update-item', compact('item', "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newItem = new Item();
        $newItem->name = $request->name;
        $newItem->price = $request->price;
        $newItem->image = $request->image;
        $newItem->cat_id = $request->catid;
        $newItem->res_id = Auth::user()->res_id;
        $newItem->description = $request->description;

        $newItem->save();
        return redirect('home');
    }

    public function deleteItem($id)
    {
        Item::destroy($id);

        return redirect('home');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->cat_id = $request->catid;
        $item->res_id = Auth::user()->res_id;
        $item->image = $request->image;
        $item->save();
        return redirect('home');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $items = Item::when($query, function ($query, $search) {
            return $query->where('name', 'like', "%$search%");
        })->get();

        return view('items.index', compact('items', 'query'));
    }

    public function update(Request $request)
    {
        $item = Item::find($request->input('id'));
        if ($item) {
            $item->name = $request->input('name');
            $item->description = $request->input('description');
            $item->save();
        }
        return redirect()->route('items.index');
    }

    public function destroy(Request $request)
    {
        $item = Item::find($request->input('id'));
        if ($item) {
            $item->delete();
        }
        return redirect()->route('items.index');
    }
}

<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use App\Http\Resources\ItemResource;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ItemResource::collection(Item::all());
    }

    public function store(ItemRequest $request)
    {
        $item = Item::create($request->validated());
        return new ItemResource($item);
    }
    public function show(Item $item)
    {
        return new ItemResource($item);
    }
    public function update(ItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        return new ItemResource($item);
    }
    public function destroy(Item $item)
    {
        $item->delete();
        return response()->noContent();
    }


}

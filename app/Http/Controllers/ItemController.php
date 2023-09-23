<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use App\Services\ItemService;

class ItemController extends Controller
{
    public function __construct(protected ItemService $itemService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['message' => 'Items Fetched successfully.', 'data' => $this->itemService->index()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        return response()->json(['message' => 'Items created successfully.', 'data' => $this->itemService->store($request->validated())]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        return response()->json(['message' => 'Item updated successfully.', 'data' => $this->itemService->update($item, $request->validated())]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        return response()->json(['message' => 'Item deleted successfully.', 'data' => $this->itemService->delete($item)]);
    }
}

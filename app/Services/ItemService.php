<?php

namespace App\Services;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

class ItemService
{
    /**
     * Retrieve all items, ordered by the most recent.
     */
    public function index(): Collection
    {
        return Item::latest()->get();
    }

    /**
     * Create a new item.
     */
    public function store(array $data): Item
    {
        return Item::create($data);
    }

    /**
     * Update an existing item.
     */
    public function update(Item $item, array $data): bool
    {
        return $item->update($data);
    }

    /**
     * Delete an item.
     */
    public function delete(Item $item): ?bool
    {
        return $item->delete();
    }
}

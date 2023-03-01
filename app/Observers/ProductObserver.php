<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the Product "creating" event.
     */
    public function creating(Product $product)
    {
        Log::info('Creating Event Call' . $product);
        $product->slug = Str::slug($product->name);
    }

    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        Log::info('Created Event Call' . $product);
    }

    /**
     * Handle the Product "updating" event.
     */
    public function updating(Product $product): void
    {
        Log::info('Updating Event Call' . $product);
        $product->slug = Str::slug($product->name);
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        Log::info('Updated Event Call');
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        Log::info('Deleted Event Call' . $product);
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}

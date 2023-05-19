<?php

namespace App\Services\Categories;

use App\Models\Categories;

class Service
{
    public function store($request)
    {
        $validated = $request->safe()->only(['category']);

        Categories::firstOrCreate($validated);
    }

}

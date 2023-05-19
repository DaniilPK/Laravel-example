<?php

namespace App\Services\Data;

use App\Models\Categories;
use App\Models\Datacollecting;

class Service
{
    public function store($request)
    {
        $validated = $request->safe()->only(['category_id', 'name', 'price']);
        Datacollecting::firstOrCreate($validated);
    }

    public function pagination(){
        $data = Datacollecting::paginate(1);
        $categories = Categories::find($data[0]['category_id']);

        return compact( 'categories', 'data');
    }

}

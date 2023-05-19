<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\Datacollecting;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $data = Datacollecting::findOrFail($id);
        $category = $data->category;

        return view('data.show', [
            'name' => $data['name'],
            'price' => $data['price'],
            'category' => $category['category'],
        ]);
    }
}

<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataRequest;
use App\Models\Categories;
use App\Models\Datacollecting;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = Categories::all();
        return view('data.category.index', compact('categories'));
    }

}

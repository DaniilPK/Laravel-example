<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Datacollecting;

class IndexController extends BaseController
{
    public function __invoke()
    {
        return view('data.index', $this->service->pagination());
    }
}

<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Categories;

class StoreController extends BaseController
{
    public function __invoke(CategoryRequest $request)
    {
        $request->validated();

        $this->service->store($request);

        return redirect()->route('category.index');
    }
}

<?php

namespace App\Http\Controllers\Data;

use App\Http\Requests\DataRequest;
use App\Models\Datacollecting;

class StoreController extends BaseController
{
    public function __invoke(DataRequest $request)
    {
        $request->validated();

        $this->service->store($request);

        return redirect()->route('data.index');
    }
}

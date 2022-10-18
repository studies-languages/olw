<?php

namespace App\Http\Controllers;

use App\Exports\BeerExport;
use App\Http\Requests\BeerRequest;
use App\Services\PunkapiServices;
use Maatwebsite\Excel\Facades\Excel;


class BeerController extends Controller
{
    //
    public function index(BeerRequest $request, PunkapiServices $service)
    {
        return $service->getBeers(...$request->validated());
    }

    public function export()
    {
        $params = [
            ['name' => 'Tom', 'age' => 30],
            ['name' => 'Virgu', 'age' => 27]
        ];

        Excel::store(new BeerExport($params), 'olw-report.xlsx');

        return 'export';
    }
}

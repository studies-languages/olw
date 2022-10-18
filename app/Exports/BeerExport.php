<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class BeerExport implements FromCollection
{
    public function __construct(
        private array $reporData
    )
    {

    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect($this->reporData);
    }
}

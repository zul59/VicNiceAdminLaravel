<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use App\Models\Risk;
// use Maatwebsite\Excel\Concerns\FromCollection;

// class RiskExport implements FromCollection
class RiskExport implements FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Risk::all();
    // }

    public function view(): View
    {
        return view('excels.risks', [
            'risks' => Risk::all()
        ]);
    }
}
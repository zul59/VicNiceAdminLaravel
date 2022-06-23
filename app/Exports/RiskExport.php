<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

use App\Models\Risk;
// use Maatwebsite\Excel\Concerns\FromCollection;

// class RiskExport implements FromCollection
class RiskExport implements FromView
{
    public function __construct($risks)
    {
        $this->risks = $risks;
    }

    public function view(): View
    {
        return view('excels.risks', [
            'risks' => $this->risks
        ]);
    }
}
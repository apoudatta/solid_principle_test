<?php

namespace App\Solid;

use Illuminate\Support\Facades\DB;


class SaleReports
{
    public function getSaleReport()
    {
        return DB::table('sales')->latest()->get();
    }
}
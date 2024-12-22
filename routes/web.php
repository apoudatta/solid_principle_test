<?php

use App\Solid\JsonExport;
use App\Solid\PdfExport;
use App\Solid\SaleReports;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $saleReports = new SaleReports;
    $pdfExport = new PdfExport;
    $jsonExport = new JsonExport;

    return $jsonExport->export(
        $saleReports->getSaleReport()
    );
});

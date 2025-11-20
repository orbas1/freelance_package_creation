<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Invoice\InvoiceCollection;
use App\Services\TransactionsService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use ApiResponser;
    
    public function getInvoices(Request $request)
    {
        $per_page = $request?->per_page ?? 20;
        $data = (new TransactionsService)->getInvoices($per_page);
        return $this->success(new InvoiceCollection($data));
    }
}

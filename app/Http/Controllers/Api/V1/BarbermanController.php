<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\BarbermanFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreBarbermanRequest;
use App\Models\Barberman;
use App\Http\Resources\V1\BarbermanResource;
use App\Http\Resources\V1\BarbermanCollection;

class BarbermanController extends Controller
{
    public function index(Request $request)
    {
        $filter = new BarbermanFilter();
        $filterItems = $filter->transform($request);
        
        $includeTransaksis = $request->query('includeTransaksi');
        $barbermans = Barberman::where($filterItems);
        if ($includeTransaksis) {
            $barbermans = $barbermans->with('transaksi');
        }
        return new BarbermanCollection($barbermans->orderBy("id", "desc")->paginate()->appends($request->query()));
    }
    public function show (Barberman $barberman)
    {
        $includeTransaksis = request()->query('includeTransaksi');
        if ($includeTransaksis) {
            return new BarbermanResource($barberman->loadMissing('transaksi'));
        }
        return new BarbermanResource($barberman);
    }
    
    public function store(StoreBarbermanRequest $request)
    {
        return new BarbermanResource(Barberman::create($request->all()));
    }
    
    // public function store(StoreBarbermanRequest $request)
    // {
    //     return new BarbermanResource (Barberman::create($request->all()));
    // }
}
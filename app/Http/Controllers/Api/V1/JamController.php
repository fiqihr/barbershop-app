<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\JamFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreJamRequest;
use App\Models\Jam;
use App\Http\Resources\V1\JamResource;
use App\Http\Resources\V1\JamCollection;

class JamController extends Controller
{
    public function index(Request $request)
    {
        $filter = new JamFilter();
        $filterItems = $filter->transform($request);
        
        $includeTransaksis = $request->query('includeTransaksi');
        $jams = Jam::where($filterItems);
        if ($includeTransaksis) {
            $jams = $jams->with('transaksi');
        }
        return new JamCollection($jams->paginate()->appends($request->query()));
    }
    public function show (Jam $jam)
    {
        $includeTransaksis = request()->query('includeTransaksi');
        if ($includeTransaksis) {
            return new JamResource($jam->loadMissing('transaksi'));
        }
        return new JamResource($jam);
    }
    
    public function store(StoreJamRequest $request)
    {
        return new JamResource(Jam::create($request->all()));
    }
    
    // public function store(StoreBarbermanRequest $request)
    // {
    //     return new BarbermanResource (Barberman::create($request->all()));
    // }
}
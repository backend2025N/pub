<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ReserveRequest;
use App\Policies\ReservePolicy;
use App\Services\ReserveService;

class ReserveController extends Controller {
    
    public function __construct( protected ReserveService $reserveService ){}

    public function reserveTable( ReserveRequest $request ) {

        $validated = $request->validated();

        $this->reserveService->reserve( $validated );
    }
}

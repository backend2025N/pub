<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReserveService {

    /**
     * Create a new class instance.
     */
    public function __construct() {}

    public function reserve( array $validated ): bool {

        $startTime = Carbon::parse( $validated[ "start_time" ]);
        $endTime = $startTime->copy()->addHours( 2 );
        $tableNumber = $validated[ "table_number" ];
        $user_id = Auth::user( "auth:sanctum" )->id;


       
        return true;
    }
}

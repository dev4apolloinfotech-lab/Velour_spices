<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersApiController extends Controller
{
    public function test(Request $request)
    {
        return response()->json([
            'ok' => true,
            'data' => $request->all(),
        ]);
    }
}

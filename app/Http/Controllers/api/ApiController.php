<?php

namespace App\Http\Controllers\api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function create() {
        return view('api.create');
    }

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'capital' => ['required', 'string'],
            'currency' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->messages(),
            ]);
        }

        $data = [
            'name' => $request->name,
            'capital' => $request->capital,
            'currency' => $request->currency,
        ];

        if(Country::create($data)) {
            return response()->json([
                'success' => "Magic has been spelled!"
            ]);
        } else {
            return response()->json([
                'failure' => "Operation Failed!"
            ]);
        }

    }
}

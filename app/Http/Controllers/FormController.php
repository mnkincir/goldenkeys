<?php

namespace App\Http\Controllers;

use App\Models\FranchiseApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function franchiseApply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'birthDate' => 'required|date',
            'education' => 'required|string',
            'city' => 'required|string',
            'district' => 'required|string',
            'street' => 'required|string',
            'sectorExperience' => 'nullable|string',
            'brandExperience' => 'nullable|string',
            'importantFactor' => 'required|string',
            'budget' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $request->merge([
            'ip_address' => $request->ip(),
        ]);
        
        // Örneğin: Veritabanına kaydet
        FranchiseApplication::create($request->all());

        return response()->json([
            'message' => 'Başvurunuz başarıyla alındı.'
        ]);
    }
}

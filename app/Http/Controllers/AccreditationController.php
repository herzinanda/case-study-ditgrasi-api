<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyProgramAccreditations;
use Exception;

class AccreditationController extends Controller
{
    public function index()
    {
        try {
            $accreditations = StudyProgramAccreditations::all();

            return response()->json([
                'status' => 'success',
                'message' => 'Accreditations retrieved successfully',
                'data' => $accreditations,
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Accreditations not found',
                'errors' => $e->getMessage(),
            ], 404);    
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve accreditations',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }
}

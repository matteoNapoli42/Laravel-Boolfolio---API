<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function getAll()
    {
        return response()->json(
            [
                'status' => 'success',
                'result' => Project::all()
            ]
        );
    }
}

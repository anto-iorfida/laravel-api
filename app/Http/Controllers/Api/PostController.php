<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PostController extends Controller
{
    public function index()
    {
        // esempio semplice
        // $data = [
        //     'nome' => 'michele',
        //     'cognome' => 'rossi'
        // ];

        // return response()->json($data);

        $projects = Project::all();

        // nel success si potrà vedre se lìoperazione è andata a buon fine e nel result il data
        return response()->json([
            'success' => true,
            'result' => $projects
        ]);
    }
}

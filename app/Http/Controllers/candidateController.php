<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class candidateController extends Controller
{

    protected $votes = [
        1 => 'Excellent',
        2 => 'Good',
        3 => 'Average',
        4 => 'Bad',
    ];

}

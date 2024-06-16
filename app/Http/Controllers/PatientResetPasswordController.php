<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PatientResetPasswordController extends Controller
{
    public function create()
    {
        return Inertia::render('Patient/Auth/ResetPassword');
    }
}

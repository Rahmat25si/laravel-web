<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|max:10',
            'email'     => ['required', 'email'],
            'pertanyaan' => 'required|max:300|min:8',
        ]);

        return view('terimakasih', [
    'nama'       => $request->nama,
    'email'      => $request->email,
    'pertanyaan' => $request->pertanyaan,
]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ThreatLog;
use Illuminate\Http\Request;

class ThreatLogController
{
    /**
     * Display a listing of the resource.
     */
       public function index()
{
    $logs = ThreatLog::latest()->paginate(10);
    return view('dashboard', compact('logs'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ThreatLog $threatLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ThreatLog $threatLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ThreatLog $threatLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ThreatLog $threatLog)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Talk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('talks.index');
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
    public function store(Request $request):RedirectResponse
    {
        $validated = $request->validate([

            'message' => 'required|string',

        ]);

        $request->user()->talks()->create($validated);

        return redirect(route('talks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talk $talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talk $talk)
    {
        //
    }
}

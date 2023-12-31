<?php

namespace App\Http\Controllers;

use App\Models\Talk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('talks.index', [
            'talks' => Talk::with('user')->oldest()->get(),
        ]);
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
    public function edit(Talk $talk):View
    {
        $this->authorize('update', $talk);
        return view('talks.edit', [
            'talk' => $talk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talk $talk):RedirectResponse
    {
        $this->authorize('update', $talk);

        $validated = $request->validate([

            'message' => 'required|string|max:255',

        ]);

        $talk->update($validated);

        return redirect(route('talks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talk $talk):RedirectResponse
    {
        $this->authorize('delete', $talk);
        $talk->delete();
        return redirect(route('talks.index'));
    }
}

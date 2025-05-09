<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sample;
use App\Repository\SampleRepositoryInterface;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    protected $sampleRepo;

    public function __construct(SampleRepositoryInterface $sampleRepo)
    {
        $this->sampleRepo = $sampleRepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->sampleRepo->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        return response()->json($this->sampleRepo->create($data), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        return response()->json($this->sampleRepo->find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        return response()->json($this->sampleRepo->update($id, $data));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $this->sampleRepo->delete($id);
        return response()->json(null, 204);
    }
}

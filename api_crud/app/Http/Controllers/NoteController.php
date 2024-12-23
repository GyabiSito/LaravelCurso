<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return response()->json(Note::all(), 200);
       return NoteResource::collection(Note::all());
    }
    public function store(NoteRequest $request): JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json(['success' => true, 'data' => new NoteResource($note)], 201);
    }

    public function show(string $id): NoteResource
    {
        $note = Note::find($id);
        //return response()->json($note, 200);
        return new NoteResource($note);
    }

    public function update(NoteRequest $request, string $id): JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json(['success' => true,'data'=>new NoteResource($note)], 200);
    }

    public function destroy(string $id): JsonResponse
    {
        Note::find($id)->delete();
        return response()->json(['success' => true], 200);
    }
}

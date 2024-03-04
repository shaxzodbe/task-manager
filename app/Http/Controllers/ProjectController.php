<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ProjectResource
    {
        $projects = QueryBuilder::for(Project::class)
          ->allowedFilters('title')
          ->defaultSort('-created_at')
          ->allowedSorts(['title', 'created_at'])
          ->paginate();

        return new ProjectResource($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request): ProjectResource
    {
        $validated = $request->validated();

        $project = Auth::user()->projects()->create($validated);

        return new ProjectResource($project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                all {{ Auth::user()->name }}'s projects
            </h1>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created on</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project )
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->author }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td>{{ $project->languages }}</td>
                        <td>{{ substr($project->description, 0, 45 )}}...</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}">
                                <button class="btn btn-sm btn-primary">
                                    View
                                </button>
                            </a>
                            <a href="{{ route('admin.projects.edit', $project) }}">
                                <button class="btn btn-sm btn-success">
                                    Edit
                                </button>
                            </a>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $project->id }}">
                                    Delete
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Delete project</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you really sure you want to delete "<strong>{{ $project->title }}</strong>" project?<br>
                                            After deleting, you'll find it in the "Deleted Projects" menu where you can restore it.
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
            
                                            <button class="btn btn-danger" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
    </div>
</div>
@endsection

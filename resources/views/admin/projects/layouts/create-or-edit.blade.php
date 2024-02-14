@extends('layouts.admin')

@section('title')
    @yield('page-title')
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                @include('partials.errors')
    
                <form action="@yield('form-action')" method="POST">
                    @csrf
                    @yield('form-method')
    
                    <div class="mb-3 input-group">
                        <label for="title" class="input-group-text">Title:</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="author" class="input-group-text">Author:</label>
                        <input class="form-control" type="text" name="author" id="author" value="{{ old('author', $project->author) }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="creation_date" class="input-group-text">Creation date:</label>
                        <input class="form-control" type="date" name="creation_date" id="creation_date" value="{{ old('creation_date', $project->creation_date) }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="cover_image" class="input-group-text">Project image url:</label>
                        <input class="form-control" type="text" name="cover_image" id="cover_image" value="{{ old('cover_image', $project->cover_image) }}">
                    </div>
                    <div class="mb-2">
                        <img src="" alt="Project cover preview" class="d-none" id="cover-image-preview">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="languages" class="input-group-text">Languages:</label>
                        <input class="form-control" type="text" name="languages" id="languages" value="{{ old('languages',$project->languages) }}">
                    </div>
    
                    <div class="mb-3 input-group">
                        <label for="description" class="input-group-text">Short description:</label>
                        <textarea class="form-control"  name="description" id="description" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <div class="mb-3 input-group">
                        <button type="submit" class="btn btn-xl btn-primary">
                            @yield('page-title')
                        </button>
                        <button type="reset" class="btn btn-xl btn-warning">
                            Reset all fields
                        </button>
                    </div>
    
                </form>
            </div>
        </div>
    </div>

    <script>
        //quando il valore dell'input cambia, cambio l'attributo src dell'img con classe cover-image-preview inserendo il value dell'input. Poi tolgo la classe d-none per visualizzare l'img.
        document.getElementById('cover_image').addEventListener('change', function(event){
            const coverImagePreviewEl = document.getElementById('cover-image-preview')
            coverImagePreviewEl.setAttribute('src', this.value)
            coverImagePreviewEl.classList.remove('d-none')
        });
    </script>
@endsection
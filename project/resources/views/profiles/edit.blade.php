@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PATCH')
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <h2>Edit Profile</h2>

                        <div class="form-group row">
                                <label for="title" class="col-form-label">Title</label>
            
                                <input id="title" name="title" type="text" class="form-control @error('caption') is-invalid @enderror" caption="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>
    
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            
                                <label for="description" class="col-form-label">Description</label>
                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" caption="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description">
    
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
    
    
                                <label for="url" class="col-form-label">Link</label>
                                <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" caption="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url">
    
                                @if ($errors->has('url'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                                
    
    
                                <label for="image" class="col-form-label">Profile Image</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
    
                            </div>
                                    <div class="row pt-4">
                                        <button class="btn btn-primary">Save profile</button>
                                    </div>
                        </div>
                    </div>
                </div>
            </form>
</div>
@endsection

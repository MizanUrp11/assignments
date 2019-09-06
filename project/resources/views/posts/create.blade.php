@extends('layouts.app')
@section('content')
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <h2>Add new Post</h2>
                        <div class="form-group row">
                                <label for="caption" class="col-form-label">Post Caption</label>
            
                               
                                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
            
                                    @if ($errors->has('caption'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                        </span>
                                    @endif
                                
                                    <label for="image" class="col-form-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control-file">
                                    <input type="submit" value="submit" name="addPost" class="btn btn-primary mt-2 btn-block">
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
    </form>
@endsection
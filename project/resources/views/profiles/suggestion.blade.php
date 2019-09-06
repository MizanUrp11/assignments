@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @foreach ($user as $user)
                <div class="row my-3">
                    <div class="col-3">
                    <img src="/storage/{{ $user->profile->image }}" alt="" class="w-100">
                    </div>
                    <div class="col-5">
                    <h3>{{ $user->profile->title}}</h3>
                    </div>
                    <div class="col-4">
                            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        
    </div>
    
@endsection
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div>
                        <img style="width:40px" src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle mr-3">
                    </div>
                    <div>
                    <div class="font-weight-bold pr-2">
                        <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        <a href="" class="btn btn-primary btn-sm">Follow</a>
                    </div>
                    </div>
                    
                </div>
                {{-- -------------------------------------------------------------- --}}
                <hr>
                <div class="pt-3">
                    <p><span class="font-weight-bold pr-2"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span>{{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection
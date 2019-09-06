@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img style="width:inherit" src="{{ $user->profile->profileImage() }}" alt="" class="w-100 rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div><h2>{{ $user->profile->title }}</h2></div>
                

            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

                
                @can('update', $user->profile)
                <a class="btn btn-primary ml-2" href="{{ route('post.create') }}">Add New Post</a>
                @endcan
            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
                <div class="d-flex py-3">
                <div class="pr-4"><strong class="pr-1">{{ $postsCount }}</strong>posts</div>
                    <div class="pr-4"><strong class="pr-1">{{$followersCount }}</strong>followers</div>
                    <div class="pr-4"><strong class="pr-1">{{$followingCount}}</strong>following</div>
                </div>
            <div class="font-weight-bold mb-0">{{ $user->username ?? '' }}</div>
                <div>
                    <p class="mb-0">{{$user->profile->description ?? ''}}</p>
                </div>
                <div>
                <a class="font-weight-bold" href="#">{{$user->profile->url ?? ''}}</a>
                </div>
            </div>


        </div>
    

    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 mb-4">
            <a href="/p/{{ $post->id }}">
                <img class="w-100" src="/storage/{{ $post->image }}" alt="">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection

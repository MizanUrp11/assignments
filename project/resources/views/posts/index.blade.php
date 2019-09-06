@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
                <div class="card-columns">
        @foreach ($posts as $post)



            <div class="card">
                    <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" class="card-img-top" alt="...">
                    </a>
                <div class="card-body">
                <h5 class="card-title">
                        <a href="/profile/{{ $post->user->id }}">
                            {{ $post->user->username }}</a>
                        
                        </h5>
                <p class="card-text">{{ $post->caption }}</p>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=www.freelancer-mizan.com&display=popup"> <i class="fab fa-facebook-square"></i> Share</a>
                </div>
                <div class="card-footer">
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                </div>
            </div>




        {{-- <div class="row mb-3">
                <div class="col-8 offset-2">
                    <div>
                        <a href="/p/{{$post->id}}">
                            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                        </a>
                    </div>
                    <p><span class="font-weight-bold pr-2"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span>{{ $post->caption }}</p>
                </div>
                
            </div> --}}



        @endforeach
    </div>
    </div>


    
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    
@endsection
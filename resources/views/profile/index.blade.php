@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-2"
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ \Str::limit($headline->name, 30) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <p class="body mx-auto">{{ \Str::limit($headline->gender, 30) }}</p>
                        </div>
                         <div class="col-md-4">
                            <p class="body mx-auto">{{ \Str::limit($headline->hobby, 30) }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="body mx-auto">{{ \Str::limit($headline->introduction, 30) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-10 mx-auto">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-2">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                             </div>
                            <div class="title col-md-2">
                                {{ \Str::limit($post->name, 30) }}
                            </div>
                            <div class="body col-md-2">
                                {{ \Str::limit($post->gender, 30) }}
                            </div>
                             <div class="title col-md-2">
                                {{ \Str::limit($post->hobby, 30) }}
                            </div>
                            <div class="body col-md-2">
                                {{ \Str::limit($post->introduction, 100) }}
                            </div>

                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
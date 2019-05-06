@extends('layouts/app', [
'siteTitle' => "Főoldal"
])

@section('content')
    <div class="row justify-content-center">
        <h1>Utazási iroda</h1>
    </div>
    <div class="row justify-content-center">
        <div class="alert alert-warning">
            Kérem vegye figyelembe, hogy csak egy utazásra jelentkezhet egyszerre, amennyiben jelentkezik egy második utazásra is, az első jelentkezése törlődik.
        </div>
    </div>
    </br>
    <div class="container">
        <div class="row">
            @foreach($utazas as $post)

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->megnevezes }}</h5>
                            <p class="card-text">{{ $post->rovidleiras }}</p>
                            <a href="/utazas/{{ $post->id }}" class="btn btn-primary">Részletes leírás</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
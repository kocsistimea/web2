@extends( 'layouts/app', [
'siteTitle' => $utazasok->megnevezes
])

@section('content')
    <div class="cointainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h3>{{$utazasok->megnevezes}}</h3></div>
                    <div class="card-body">
                        <h5>Dátum kezdete: </h5><p>{{$utazasok->datum}}</p>
                        <h5>Dátum vége: </h5><p>{{$utazasok->dateig}}</p>
                        <h5>Helyszín:</h5><p> {{$utazasok->helyszin}}</p>
                        <h5>Ára: </h5><p>{{$utazasok->ar}}</p>
                        <h5>Hosszú leírás:</h5><p>{{$utazasok->hosszuleiras}}</p>
                        <h5>Maximum létszám/Jelentkezettek:</h5><p>{{$utazasok->maxletszam}}/{{ $utazo }}</p>

                        @if(Auth::user() !=NULL)
                            @if($utazasok->id !=Auth::user()->utazasid)
                                @if($utazo <$utazasok->maxletszam)
                                    <form method="POST" action="/jelentkezes/{{$utazasok->id}}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">Jelentkezés</button>
                                    </form>
                                @else
                                    <div class="alert alert-light" role="alert">
                                        Megtelt az utazás!
                                    </div>
                                @endif
                            @else
                                <form method="POST" action="/lemond/{{$utazasok->id}}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">Lemondás</button>
                                </form>
                            @endif
                        @else
                            <div class="alert alert-warning" role="alert">
                                Kérlek <a href="{{ route('login') }}">jelentkezz be</a> vagy <a href="{{ route('register') }}">regisztrálj</a>!
                            </div>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
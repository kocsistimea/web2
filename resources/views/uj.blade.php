@extends( 'layouts/app', [
'siteTitle' => 'Új utazás'
])

@section('content')
    <div class="cointainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Új utazás felvitele') }}</div>

                    <div class="card-body">
                        <form method="POST">
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="megnevezes" class="col-md-4 col-form-label text-md-right">Utazás megnevezése</label>
                                <div class="col-md-6">
                                    <input type="text" name="megnevezes" class="form-control{{ $errors->has('megnevezes') ? ' is-invalid' : '' }}" value="{{ old('megnevezes') }}" required>
                                </div>
                            <!--  <input type="text" name="megnevezes" value="{{ old('megnevezes') }}" placeholder="Utazás megnevezése"required>-->
                            </div>
                            <div class="form-group row">
                                <label for="ar" class="col-md-4 col-form-label text-md-right">Ár</label>
                                <div class="col-md-6">
                                    <input type="text" name="ar" class="form-control{{ $errors->has('ar') ? ' is-invalid' : '' }}" value="{{ old('ar') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="datum" class="col-md-4 col-form-label text-md-right">Dátum kezdete</label>
                                <div class="col-md-6">
                                    <input type="date" name="datum" class="form-control{{ $errors->has('datum') ? ' is-invalid' : '' }}" value="{{ old('datum') }}" required>
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label for="dateig" class="col-md-4 col-form-label text-md-right">Dátum vége</label>
                                    <div class="col-md-6">
                                        <input type="date" name="dateig" class="form-control{{ $errors->has('dateig') ? ' is-invalid' : '' }}" value="{{ old('dateig') }}" required>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="helyszin" class="col-md-4 col-form-label text-md-right">Helyszín</label>
                                <div class="col-md-6">
                                    <input type="text" name="helyszin" class="form-control{{ $errors->has('helyszin') ? ' is-invalid' : '' }}" value="{{ old('helyszin') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="maxletszam" class="col-md-4 col-form-label text-md-right">Maximum létszám</label>
                                <div class="col-md-6">
                                    <input type="text" name="maxletszam" class="form-control{{ $errors->has('mexletszam') ? ' is-invalid' : '' }}" value="{{ old('helyszin') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rovidleiras" class="col-md-4 col-form-label text-md-right">Rövid leírás</label>
                                <div class="col-md-6">
                                    <textarea name="rovidleiras" style="resize:none" class="form-control{{ $errors->has('rovidleiras') ? ' is-invalid' : '' }}"placeholder="Hasznos információk" required>{{ old('rovidleiras') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hosszuleiras" class="col-md-4 col-form-label text-md-right">Hosszú leírás</label>
                                <div class="col-md-6">
                                    <textarea name="hosszuleiras" style="resize:none" class="form-control{{ $errors->has('hosszuleiras') ? ' is-invalid' : '' }}" placeholder="Írja le részletesen az utazást" required>{{ old('hosszuleiras') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"  class="btn btn-primary">Mentés</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
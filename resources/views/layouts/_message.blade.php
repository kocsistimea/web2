@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@elseif(session()->has('cancel'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('cancel') }}
    </div>
@elseif(session()->has('reg'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('reg') }}
    </div>
@endif
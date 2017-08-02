@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ Session::get('error') }}
    </div>
@endif

@if(count($errors))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

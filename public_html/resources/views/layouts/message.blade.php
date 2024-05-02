@if(count($errors))

    <div class="alert alert-danger text-white" role="alert">
        <a href="#" class="close">x</a>
        <strong class="text-capitalize">Oops!</strong><br>
        @foreach ($errors->all() as $error)

            {{ $error }}<br>

        @endforeach
    </div>

@else 
    @if (session('success'))
        <div class="alert alert-success text-white" role="alert">
            <a href="#" class="close">x</a>
            <strong class="text-capitalize">Success!</strong><br>

            {{ session('success') }}
            
        </div>
    @endif

@endif

    @if (Session::has('success_message'))
            <div class="alert alert-success" style="background: lightgreen; color: darkgreen">
                {{ Session::get('success_message') }}
            </div>

    @endif

    @if (Session::has('error_user_message'))
    <div class="alert alert-error" style="background: rgb(238, 144, 144); color: rgb(100, 12, 0)">
        {{ Session::get('error_user_message') }}
    </div>
    @endif


    @if (count($errors) > 0)
        <div class="alert alert-error" style="background: rgb(238, 144, 144); color: rgb(100, 12, 0)" >
            <ul>
                @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

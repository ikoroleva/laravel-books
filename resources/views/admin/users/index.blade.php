@extends('layouts/main')

@section('content')

<h1>List of users</h1>
<noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>

    <script src={{ mix('js/user-list.js')}}></script>

@endsection
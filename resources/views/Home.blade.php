@include('component.Header')
@include('component.Hero')
@include('component.Team')
@include('component.Footer')

{{--
<html>
    <head>
        <title>Laravel App</title>

        <meta name="author" content="OS">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" >
    </head>

    <body>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <button class="btn btn-success">Hello</button>
                    <img src="{{asset('images/img.png')}}">
                </div>
            </div>
        </div>

        <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    </body>
</html>
--}}

{{--
<h1>
    My name is {{$name}}.
    This is a Blade comment
    My result is {{$result}}.
</h1>
--}}


{{--
@if($result>4)
    <h1>surplus</h1>
@elseif($result<4)
    <h1>shortage</h1>
@elseif($result==4)
    <h1>You are OS</h1>
@endif
--}}

{{--
@switch($result)
    @case(4)
        <h1>This is 4</h1>
        @break
    @case(44)
        <h1>This is 44</h1>
        @break
    @case(444)
        <h1>This is 444</h1>
        @break
    @case(4444)
        <h1>This is 4444</h1>
        @break
    @default
        <h1>this is default</h1>
@endswitch
--}}

{{--
<ul>
    @for($i=0; $i<4; $i++)
        <li>{{$i}}</li>
    @endfor
</ul>
--}}

{{--
<ul>
    @foreach($users as $eachUser)
        <li>My name is {{ $eachUser['name'] }} and city is {{ $eachUser['city'] }}</li>
    @endforeach
</ul>
--}}

<h1>Home : First Page</h1>

{{5 + 10}}

<br><br>

{{" Hello World"}}

<br><br>

{{" <h1>Hello World</h1>"}}

{!!" <h1>Hello World</h1>"!!}

<!-- {!!"<script>alert ('Hello World')</script>"!!} -->

<!-- @php
    $user = "Hello";
@endphp

{{$user}} -->

@php
    $names = ["Salman khan", "Alia Bhatt"]
@endphp

<ul>
@foreach ( $names as $n)
<li> {{$loop->index }} - {{ $n }}</li>
@endforeach
</ul>
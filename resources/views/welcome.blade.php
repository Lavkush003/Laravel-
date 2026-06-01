
<h1>Home: First Page</h1>

<a href="/about">About</a>

<a href="/post">Post Page</a>

{{5+2}}
<br><br>
{{"Hello World"}}
<br><br>
{{"<h1>Hello World</h1>"}}

@php
    $names=["Sanjay Singh", "John Abraham","Sahid Kapoor"]

@endphp

<ul>
@foreach ($names as $n)
<li>{{$n}}</li>
@endforeach
</ul>
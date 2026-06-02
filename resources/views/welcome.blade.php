{{-- 
<h1>Home: First Page</h1>

<a href="/about">About</a>

<a href="/post">Post Page</a>

{{5+2}}
<br><br>
{{"Hello World"}}
<br><br>
{{"<h1>Hello World</h1>"}}

@php
    $names=["Sanjay Singh", "John Abraham","Sahid Kapoor",
    "Sanjay Singh", "John Abraham","Sahid Kapoor"];

@endphp

<ul>
@foreach ($names as $n)
<li>{{$n}}</li>
@endforeach
</ul>

{{-- foreach loop --}}

{{-- 
<ul>
@foreach ($names as $n)
@if ($loop->first)
    <li style="color:red;">{{ $n }}</li>
    @elseif($loop->odd)
     <li style="color:green;">{{$n}}</li>
     @endif
@endforeach

</ul> --}}

 {{-- --}} 



@php
$fruits=["Apple","Banana", "Mango", "Grapes"];

@endphp 
@include('pages.header', ['name'=>$fruits])

<h1>Home Page</h1>

@include('pages.footer')

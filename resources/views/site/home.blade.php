@extends('site.layouts.basic')
@section('title', $title)
@section('content')

<div>
    <h1> Hello World! </h1>
</div>
<div>
        @component('site.layouts._components.form')
        @endcomponent
    </div>

@endsection
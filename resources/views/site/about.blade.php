@extends('site.layouts.basic')
@section('title', $title)
@section('content')

<div>
    <h1> About! </h1>
</div>
<div>
        @component('site.layouts._components.form')
        @endcomponent
    </div>

@endsection
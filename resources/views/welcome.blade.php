@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="hero">

  @include('components.hero')

</section>

<section>

  @include('components.dinamica')

</section>

<section class="participantes">

  @include('components.participantes')

</section>

<section id="ganadores">

  @include('components.ganadores')

</section>


@endsection
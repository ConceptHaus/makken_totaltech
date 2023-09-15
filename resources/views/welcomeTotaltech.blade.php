@extends('layouts.appTotaltech')

@section('content')

<!-- Header -->
<section class="hero">

  @include('totaltech.components.hero')

</section>

<section class="dinamica_ganador">

  @include('totaltech.components.dinamica')

</section>

<section class="participantes">

  @include('totaltech.components.participantes')

</section>

<section id="ganadores">

  @include('totaltech.components.ganadores')

</section>


@endsection
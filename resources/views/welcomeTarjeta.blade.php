@extends('layouts.appTarjeta')

@section('content')

<!-- Header -->
<section class="hero">

  @include('components.tarjeta.hero')

</section>

<section class="dinamica_ganador">

  @include('components.tarjeta.dinamica')

</section>

<section class="participantes">

  @include('components.tarjeta.participantes')

</section>

<section id="ganadores">

  @include('components.tarjeta.ganadores')

</section>


@endsection
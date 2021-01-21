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
<div id="popup" class="overlay">
            <div id="popupBody">
                <a id="cerrar" href="#popup">&times;</a>
                <div class="popupContent">
                    
                </div>
            </div>
</div>

@endsection
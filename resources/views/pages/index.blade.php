@extends('layouts.app')

@section('content')
    <!-- start home -->
    <section id="home" class="picture">
        @include('pages.sections.home')
    </section>
    <!-- end home -->

    <!-- start about -->
    <section id="about">
        @include('pages.sections.about')
    </section>
    <!-- end about -->

    <!-- start services -->
    <section id="services" style="background-color: #f6f6f6;">
        @include('pages.sections.services')
    </section>
    <!-- end services -->

    <!-- start clients -->
    <section id="clients" class="picture">
        @include('pages.sections.counter')
    </section>
    <!-- end clients -->

    <!-- start contact -->
    <section id="contacts">
        @include('pages.sections.contact')
    </section>
    <!-- start footer -->
@endsection

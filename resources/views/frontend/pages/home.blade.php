@extends('frontend.layouts.app')

@section('title','Pratap Chakraborty')

@section('content')

<main class="relative z-10">
    @include('frontend.sections.home.hero')

    @include('frontend.sections.home.marquee')

    @include('frontend.sections.home.about')

    @include('frontend.sections.home.why')

    @include('frontend.sections.home.skills')

    @include('frontend.sections.home.objective')

    @include('frontend.sections.home.career')

    @include('frontend.sections.home.experience')

    @include('frontend.sections.home.education')

    @include('frontend.sections.home.cta')
</main>

@endsection

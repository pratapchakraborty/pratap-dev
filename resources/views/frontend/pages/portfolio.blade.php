@extends('frontend.layouts.app')

@section('title','Portfolio | Pratap Chakraborty')

@section('content')

<main class="relative z-10 pt-36 pb-24">
    @include('frontend.sections.protfolio.hero')

    @include('frontend.sections.protfolio.projectone')

    @include('frontend.sections.protfolio.projecttwo')

    @include('frontend.sections.protfolio.projectthree')

    @include('frontend.sections.protfolio.cta')
</main>

@endsection

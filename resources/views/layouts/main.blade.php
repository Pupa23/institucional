@extends('layouts.layout')

@section('main')
    @include('components.carousel.index')
    @include('components.about.index')
{{--    @include('components.whyUs.index')--}}
    @include('components.services.index')
    @include('components.callToAction.index')
    @include('components.portfolio.index')
{{--    @include('components.pricing.index')--}}
    @include('components.faq.index')
    @include('components.contact.index')
@endsection

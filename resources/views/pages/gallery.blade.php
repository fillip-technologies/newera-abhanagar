@section('content')
<!-- about-->

<x-hero-banner
    data-title="Gallery"
    data-description="A glimpse into campus life, events, celebrations, and learning moments that shape our students’ journey."
    data-image="/images/gallery-hero.jpg"
    data-breadcrumb="Gallery" />




<x-other.gallery />

@endsection
@extends('layouts.app')
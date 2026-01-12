@section('content')
<!-- about-->

<x-hero-banner
    data-title="School Notices & Circulars"
    data-description="Stay updated with the latest announcements, circulars, holidays, examinations, and important information for students and parents."
    data-image="/images/notice-hero.jpg"
    data-breadcrumb="Notices" />





<x-other.notice-section />

@endsection
@extends('layouts.app')
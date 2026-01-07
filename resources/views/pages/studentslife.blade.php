@section('content')
<x-hero-banner
    data-title="Student Life at New Era"
    data-description="A vibrant journey of learning, creativity, sports, friendships, and values that shape confident, responsible individuals."
    data-image="/images/student-life-hero.jpg"
    data-breadcrumb="Student Life" />


<x-students.students-life />

@endsection
@extends('layouts.app')
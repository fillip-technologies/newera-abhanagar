@section('content')
<!-- about-->

<x-hero-banner
    data-title="Admission Procedure"
    data-description="A clear, transparent, and merit-based admission process for every learner."
    data-image="/images/procedure-hero.jpg"
    data-breadcrumb="Procedure" />


<x-admission.procedure-section />

@endsection
@extends('layouts.app')
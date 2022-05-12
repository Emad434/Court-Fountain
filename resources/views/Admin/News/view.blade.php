@extends('layouts.Admin.admin')
@section('title')
    News
@endsection
@section('page')
    @php
        $page = 'news';
    @endphp
@endsection
@section('content')
    <div class="main_content top-fixed">
        <section class="lg-padding" style="padding-left:40px; padding-right:40px;">
            <h1 class="thin">{{$title}}</h1>
            <div>
                {!!$file_content!!}
            </div>
        </section>
    </div>
    <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>
@endsection

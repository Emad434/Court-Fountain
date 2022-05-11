@extends('layouts.Admin.admin')
@section('title')Courses @endsection
@section('page')
    @php
        $page = 'courses';
    @endphp
@endsection
@section('content')
    <div class="main_content top-fixed">
        <section class="lg-padding" style="display: flex; justify-content: center;">
            <div style="box-shadow: 0 0 10px rgba(0,0,0,.2); border-radius: 5px; max-width:300px; min-width: 700px;" class="pl-2 pr-2 pt-2 pb-2">
                <h1 class="thin text-gray text-center">@if (isset($id)) Edit @else Create @endif</h1>
                <form action="{{ route('course.store') }}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="title" value="{{ old('title') }}" style="width: 100%; font-size: 16px; border-radius: 8px" placeholder="Title">
                        @error('title')
                            <small style="color: red;">{{$message}}</small>
                        @enderror
                        <input type="hidden" name="id">
                    </div>
                    <div class="d-flex  @if ($errors->any)mb-1 @endif" style="justify-content: space-between">
                        <div style="width: 49%">
                            <input type="text" name="subtitle" value="{{ old('subtitle') }}" style="font-size: 16px; border-radius: 8px" placeholder="Subtitle">
                            @error('subtitle')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div style="width: 49%">
                            <input type="text" name="code" value="{{ old('code') }}" style="font-size: 16px; border-radius: 8px;" placeholder="Code">
                            @error('code')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-full btn-primary" style="width: 100%;">Submit</button>
                </form>
            </div>
        </section>
    </div>
    <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>
@endsection


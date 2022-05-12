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
            <form
                action="@if (isset($id)) {{ route('news.update') }}@else{{ route('news.store') }} @endif"
                method="post" id="form">
                @csrf
                @error('title')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
                <input type="hidden" name="id" value="@if (isset($id)) {{ $id }} @endif">
                <input type="text" name="title" style="font-size: 16px; border-radius: 8px;" placeholder="Post Title"
                    value="@if (isset($title)) {{ $title }} @endif">
                <input type="hidden" id="html" name="html">
            </form>
            <div id="toolbar">
                <!-- Add buttons as you would before -->
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-strike"></button>
                <button class="ql-blockquote"></button>
                <button class="ql-code-block"></button>
                <button class="ql-header" value="1"></button>
                <button class="ql-header" value="2"></button>
                <button class="ql-list" value="ordered"></button>
                <button class="ql-list" value="bullet"></button>
                <button class="ql-script" value="sub"></button>
                <button class="ql-script" value="super"></button>
                <button class="ql-indent" value="-1"></button>
                <button class="ql-indent"></button>
                <button class="ql-direction" value="rtl"></button>
                <select class="ql-size">
                    <option selected value="small"></option>
                    <option value="normal"></option>
                    <option value="large"></option>
                    <option value="huge"></option>
                </select>
                <select class="ql-header">
                    <option selected value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    <option value="6"></option>
                </select>
                <button class="ql-link"></button>
                <button class="ql-image"></button>
                <select class="ql-color"></select>
                <select class="ql-font"></select>
                <select class="ql-align"></select>


                <!-- But you can also add your own -->
                <button onclick="getHtml()">Save</button>
            </div>
            <div id="editor" style="height: 500px;"></div>
        </section>
    </div>
    <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>
@endsection
@section('js')
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kensnyder/quill-image-resize-module@3411c9a7/image-resize.min.js"></script>
    <script>
        var options = {
            modules: {
                imageResize: {
                    displaySize: true
                },
                toolbar: '#toolbar'
            },
            placeholder: '',
            theme: 'snow'
        };
        var editor = new Quill('#editor', options);

        function getHtml(event) {
            const html = editor.root.innerHTML;
            let hiddenInput = document.getElementById('html');
            const form = document.getElementById('form');
            hiddenInput.value = html;
            form.submit();
        }
        @if (isset($id))
            editor.root.innerHTML = '{!! $file_content !!}'
        @endif
    </script>
@endsection

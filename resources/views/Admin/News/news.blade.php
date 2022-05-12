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
            <a class="btn btn-primary" style="float: right;" href="{{ route('news.editor') }}"><i
                    class="fa-solid fa-plus"></i></a>
            <table id="table" class="table table-striped table-bordered" width="100%"></table>
        </section>
    </div>
    <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>
@endsection
@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable({
                responsive: true,
                data: {!! json_encode($news) !!},
                columns: [{
                        title: "Title",
                        data: 'title'
                    },
                    {
                        title: "Created Date",
                        data: 'created_at',
                        render: function(data) {
                            const date = new Date(data);
                            return date.toLocaleDateString()
                        }
                    },
                    {
                        title: "Updated Date",
                        data: 'updated_at',
                        render: function(data) {
                            const date = new Date(data);
                            return date.toLocaleDateString()
                        }
                    },
                    {
                        title: "Actions",
                        data: null,
                        render: function(data, type, row) {
                            let viewUrl = '{{ route('news.view', ':id') }}';
                            viewUrl = viewUrl.replace(':id', row.id);
                            let editUrl = '{{ route('news.edit', ':id') }}';
                            editUrl = editUrl.replace(':id', row.id);
                            let deleteUrl = '{{ route('news.delete', ':id') }}';
                            deleteUrl = deleteUrl.replace(':id', row.id);
                            return '<div class="d-flex"><a href="' + viewUrl +
                                '" class="btn btn-circle d-flex btn-md btn-primary mr-1" style="justify-content: center; align-items: center;" ><i class="fa-solid fa-eye"></i></a> <a href="' +
                                editUrl +
                                '" class="btn btn-circle d-flex btn-md btn-primary mr-1" style="justify-content: center; align-items: center;"><i class="fa-solid fa-pen-to-square"></i></a> <a href="' +
                                deleteUrl +
                                '" class="btn btn-circle d-flex btn-md btn-primary mr-1" style="justify-content: center; align-items: center;" ><i class="fa-solid fa-trash"></i></a></div>';
                        }
                    }
                ],
                dom: 'Bfrtip',
                buttons: [
                    'excel',
                    'print',
                    'pdfHtml5',
                ]
            });
        });
    </script>
@endsection

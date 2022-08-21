@extends('backend.master')
@section('title', $title)
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/node_modules/summernote/dist/summernote-bs4.css')}}">
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{ route('admin.about.update') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="card">
                <div class="card-header">
                    <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
                    {{ $title }} Update
                </div>
                <div class="card-body table-responsive">
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="summernote">{!! $data->description !!}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<script src="{{asset('backend/assets/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#data_table').DataTable();
        $('#summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

    });
 </script>

@endpush

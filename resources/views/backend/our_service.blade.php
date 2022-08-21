@extends('backend.master')
@section('title', $title)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <button style="float: right;" class="btn btn-info" data-toggle="modal" data-target="#addModal"><i class="icon-plus"></i> Add {{ $title }}</button>
                <h4>{{ $title }} List</h4>
            </div>
           <div class="card-body table-responsive">
                <table class="mb-0 table table-bordered table-striped" id="data_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $key=>$list)
                        <tr>
                            <th>{{ $key+1}}</th>
                            <td>{{ $list->description }}</td>
                            <td>{{ $list->link }}</td>
                            <td><img width="80" src="{{ ($list->image)? asset('storage/uploads/'.$list->image) : '' }}"></td>
                            <td>
                                <button onclick="return editData({{json_encode($list)}})" class="btn btn-warning btn-sm"><i class="icon-pencil"></i></button>
                                <button class="btn btn-danger waves-effect btn-sm" onclick="return deleteCertification(<?php echo $list->id; ?>)"><i class="icon-trash"></i></button>
                                <form id="delete-form-{{$list->id}}" action="{{url('admin/our-services',$list->id)}}" method="post" style="display: none;">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- start Add Modal -->
            <div class="modal fade" id="addModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add {{ $title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('admin/our-services') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                
                                <div class="form-group">
                                    <label>Description <span class="required">*</span></label>
                                    <textarea class="form-control" name="description" placeholder="Enter Description" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Link <span class="required">*</span></label>
                                    <input type="text" name="link" class="form-control form-control-sm" placeholder="Enter Link" required="">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Add Modal -->

            <!-- start Add Modal -->
            <div class="modal fade" id="editModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add {{ $title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('admin/our-services-update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                
                                <div class="form-group">
                                    <label>Description <span class="required">*</span></label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Link <span class="required">*</span></label>
                                    <input type="text" id="link" name="link" class="form-control form-control-sm" placeholder="Enter Link" required="">
                                </div>
                                <div class="form-group">
                                    <img src="" width="80" id="image">
                                    <br>
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="service_id" id="service_id">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Add Modal -->
           
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data_table').DataTable();
    });

    function editData(value){
        $('#editModal').modal('show')
        $('#service_id').val(value.id)
        $('#description').val(value.description)
        $('#link').val(value.link)
        if(value.image){
            $('#image').attr('src','/storage/uploads/'+value.image)
        }
    }
 </script>

@endpush

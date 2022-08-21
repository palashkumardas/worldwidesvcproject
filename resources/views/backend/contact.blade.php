@extends('backend.master')
@section('title', $title)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
           <div class="card-body table-responsive">
                <table class="mb-0 table table-bordered table-striped" id="data_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Create</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $key=>$list)
                        <tr>
                            <th>{{ $key+1}}</th>
                            <td>{{ $list->first_name }} {{ $list->last_name }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->phone }}</td>
                            <td>{{ $list->created_at }}</td>
                            <td>
                                @if($list->status == true)
                                Active
                                @else
                                <span class="text-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                @if($list->status == true)
                                <a href="{{route('user.inactive',$list->id)}}" title="Inactive" class="btn btn-danger"><i class="icon-arrow-down"></i></a>
                                @else
                                <a href="{{ route('user.active',$list->id) }}" title="Active" class="btn btn-success"><i class="icon-arrow-up"></i></a>
                                @endif
                                <!-- <button class="btn btn-danger waves-effect btn-sm" onclick="return deleteCertification(<?php echo $list->id; ?>)"><i class="icon-trash"></i></button>
                                <form id="delete-form-{{$list->id}}" action="{{url('contact-us',$list->id)}}" method="post" style="display: none;">
                                    @method('DELETE')
                                    @csrf
                                </form> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

           
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data_table').DataTable();
    });
 </script>

@endpush

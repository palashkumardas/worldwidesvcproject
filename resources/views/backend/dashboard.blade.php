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
                            <th>Address</th>
                            <th>Contact Preferences</th>
                            <th>Register</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $key=>$list)
                        <tr>
                            <th>{{ $key+1}}</th>
                            <td>{{ $list->first_name }} {{ $list->last_name }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->phone }}</td>
                            <td title="{{ $list->address }}">{{ $list->address }}</td>
                            <td>{{ !empty($list->contact_preferences) ? str_replace(',',' / ',$list->contact_preferences) :''  }}</td>
                            <td>{{ $list->created_at->diffForHumans() }}</td>
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

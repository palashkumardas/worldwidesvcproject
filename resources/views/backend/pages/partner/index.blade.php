@extends('backend.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-8">
        <div class="card">
           <div class="card-body table-responsive">
                <table class="mb-0 table table-bordered table-striped" id="data_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partners as $key=>$list)
                        <tr>
                            <th>{{ $key+1}}</th>
                            <td>{{ $list->title }} </td>
                            <td>{{ $list->description }}</td>
                            <td><img src="{{ asset($list->picture) }}" alt="{{ $list->title }}" width="100" height="30"></td>
                            <td>
                               <a href="{{ route('partner.edit',$list->id)}}" data-toggle="modal" data-target="#editModal{{ $list->id }}" class="btn btn-outline-info" title="Edit"><i class="fa fa-pencil"></i></a>

                               <a href="" data-toggle="modal" data-target="#deleteModal-{{ $list->id }}" class="btn btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>


                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal-{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Are You Sure You Want to Delete It!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <!-- <div class="modal-body">
                                Are You Sure You Want to Delete It!
                              </div> -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <form method="POST" action="{{ url('admin/partner/'.$list->id) }}">
                                   @csrf
                                   @method('DELETE') 
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>


                        <!-- Update Modal -->
                        <div class="modal fade" id="editModal{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Update Payout Partner</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="{{ url('admin/partner/'.$list->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input id="title" type="text" class="form-control" name="title" value="{{ $list->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" class="form-control" >{!! $list->title !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input id="image" type="file" class="form-control" name="image" accept="image/*">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body table-responsive">
                <form method="POST" action="{{ route('partner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


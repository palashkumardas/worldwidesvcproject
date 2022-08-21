@extends('backend.master')
@section('title', $title)
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/node_modules/summernote/dist/summernote-bs4.css')}}">
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{ route('admin.contact.update') }}">
            @csrf
            
            <div class="card">
                <div class="card-header">
                    <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
                    {{ $title }} Update
                </div>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="card-body table-responsive">
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $data->title }}">
                        </div>
                        <div class="col">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $data->address }}">
                        </div>
                        <div class="col">
                            <label for="office_hours">Office Hours</label>
                            <input type="text" class="form-control" id="office_hours" name="office_hours" placeholder="Office Hours" value="{{ $data->office_hours }}">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="phone_one">Phone One</label>
                            <input type="text" class="form-control" id="phone_one" name="phone_one" placeholder="Phone One" value="{{ $data->phone_one }}">
                        </div>
                        <div class="col">
                            <label for="phone_two">Phone Two</label>
                            <input type="text" class="form-control" id="phone_two" name="phone_two" placeholder="Phone Two" value="{{ $data->phone_two }}">
                        </div>
                        <div class="col">
                            <label for="phone_three">Phone Three</label>
                            <input type="text" class="form-control" id="phone_three" name="phone_three" placeholder="Phone Three" value="{{ $data->phone_three }}">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="email_one">Email One</label>
                            <input type="text" class="form-control" id="email_one" name="email_one" placeholder="Email One" value="{{ $data->email_one }}">
                        </div>
                        <div class="col">
                            <label for="email_two">Email Two</label>
                            <input type="text" class="form-control" id="email_two" name="email_two" placeholder="Email Two" value="{{ $data->email_two }}">
                        </div>
                        <div class="col">
                            <label for="email_three">Email Three</label>
                            <input type="text" class="form-control" id="email_three" name="email_three" placeholder="Email Three" value="{{ $data->email_three }}">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="www.facebook.com/" value="{{ $data->facebook }}">
                        </div>
                        <div class="col">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="www.twitter.com/" value="{{ $data->twitter }}">
                        </div>
                        <div class="col">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="www.linkedin.com/" value="{{ $data->linkedin }}">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="youtube">Youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" placeholder="www.youtube.com/" value="{{ $data->youtube }}">
                        </div>
                        <div class="col">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="www.instagram.com/" value="{{ $data->instagram }}">
                        </div>
                        <div class="col">
                            <!-- <label for="map_location">Map Location</label>
                            <input type="text" class="form-control" id="map_location" name="map_location" placeholder="www.google.com/" value="{{ $data->map_location }}"> -->
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="sort description" value="{{ $data->description }}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@extends('backend.master')

@section('title', isset($contact) ? 'Edit' : 'Create'.' Contact ')

@section('body')
    <div class="row py-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($contact) ? 'Edit' : 'Create' }} Contact </h3>
                    <a href="{{ route('contacts.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($contact))
                            @method('put')
                        @endif

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Phone*</label>
                            <div class="col-md-9">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ isset($contact) ? $contact->phone: '' }}" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Email*</label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ isset($contact) ? $contact->email: '' }}" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea name="address" id="" class="form-control ckeditor" placeholder="Address">{{ isset($contact) ? $contact->address : '' }}</textarea>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Social Link*</label>
                            <div class="col-md-9">
                                <input type="text" name="social_link" class="form-control" placeholder="Social Link" value="{{ isset($contact) ? $contact->social_link: '' }}" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($contact) && $contact->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($contact) ? 'Update' : 'Create' }} Contact ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    image<script>
        $(document).ready(function() {
            $('#imagez').change(function() {
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#imagePreview').attr('src', imgURL).css({
                    height: 150+'px',
                    width: 150+'px',
                    marginTop: '5px'
                });
            });
        });
    </script>
@endpush

@extends('backend.master')

@section('title', isset($service) ? 'Edit' : 'Create'.' Service ')

@section('body')
    <div class="row py-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($service) ? 'Edit' : 'Create' }} Service </h3>
                    <a href="{{ route('servicees.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($service) ? route('servicees.update', $service->id) : route('servicees.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($service))
                            @method('put')
                        @endif

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Title*</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ isset($service) ? $service->title: '' }}" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Service Icon*</label>
                            <div class="col-md-9">
                                <input type="text" name="service_icon" class="form-control" placeholder="Service Icon" value="{{ isset($service) ? $service->service_icon: '' }}" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="" class="form-control ckeditor" placeholder="description">{{ isset($service) ? $service->description : '' }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($service) && $service->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($service) ? 'Update' : 'Create' }} Service ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush

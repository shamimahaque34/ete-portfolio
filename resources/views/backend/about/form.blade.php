@extends('backend.master')

@section('title', isset($about) ? 'Edit' : 'Create'.' About ')

@section('body')
    <div class="row py-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($about) ? 'Edit' : 'Create' }} About </h3>
                    <a href="{{ route('abouts.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($about) ? route('abouts.update', $about->id) : route('abouts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($about))
                            @method('put')
                        @endif

                        <div class="row mt-4">
                            <label for="" class="col-md-3">CV</label>
                            <div class="col-md-9">
                                <input type="file" name="cv" class="form-control"  />
                                @if(isset($about))
                                    <img src="{{ asset($about->cv) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($about) && $about->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($about) ? 'Update' : 'Create' }} About ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



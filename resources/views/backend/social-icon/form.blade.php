@extends('backend.master')

@section('title', isset($socialIcon) ? 'Edit' : 'Create'.' Social Icon ')

@section('body')
    <div class="row py-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($socialIcon) ? 'Edit' : 'Create' }} Skill Category </h3>
                    <a href="{{ route('social-icons.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($socialIcon) ? route('social-icons.update', $socialIcon->id) : route('social-icons.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($socialIcon))
                            @method('put')
                        @endif

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Name*</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ isset($socialIcon) ? $socialIcon->name: '' }}" />
                            </div>
                        </div>
                         
                          <div class="row mt-4">
                            <label for="" class="col-md-3">Link*</label>
                            <div class="col-md-9">
                                <input type="text" name="link" class="form-control" placeholder="Social Link" value="{{ isset($socialIcon) ? $socialIcon->link: '' }}" />
                            </div>
                        </div> 

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($socialIcon) && $socialIcon->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($socialIcon) ? 'Update' : 'Create' }} Social Icon ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



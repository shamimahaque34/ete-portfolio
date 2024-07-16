@extends('backend.master')

@section('title', isset($skill) ? 'Edit' : 'Create'.' Skill ')

@section('body')
    <div class="row py-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($skill) ? 'Edit' : 'Create' }} Skill </h3>
                    <a href="{{ route('skills.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($skill) ? route('skills.update', $skill->id) : route('skills.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($skill))
                            @method('put')
                        @endif


                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="" class=""> Skill Category Name</label>
                                <div class="">
                                    <select name="skill_category_id" class=" form-control " data-toggle="select"
                                        data-placeholder="Choose ...">
                                        <option value="">Select a Skill category</option>
                                        @foreach ($skillcategories as $skillcategory)
                                            <option value="{{ $skillcategory->id }}"
                                                {{ $errors->any() ? old('skill_category_id') : (isset($skill) && $skill->skill_category_id == $skillcategory->id ? 'selected' : '') }}>
                                                {{ $skillcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Name*</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ isset($skill) ? $skill->name: '' }}" />
                            </div>
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($skill) && $skill->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($skill) ? 'Update' : 'Create' }} skill ">
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

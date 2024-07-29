@extends('backend.master')

@section('title', isset($portfolio) ? 'Edit' : 'Create'.' Portfolio ')

@section('body')
    <div class="row py-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($portfolio) ? 'Edit' : 'Create' }} Portfolio </h3>
                    <a href="{{ route('portfolios.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($portfolio) ? route('portfolios.update', $portfolio->id) : route('portfolios.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($portfolio))
                            @method('put')
                        @endif

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($portfolio))
                                    <img src="{{ asset($portfolio->image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            <div class="col-md-3 mt-2">
                                <div>
                                    <img src="" id="imagePreview" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Website Link*</label>
                            <div class="col-md-9">
                                <input type="text" name="website_link" class="form-control" placeholder="Website Link" value="{{ isset($portfolio) ? $portfolio->website_link: '' }}" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($portfolio) && $portfolio->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($portfolio) ? 'Update' : 'Create' }} Portfolio ">
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

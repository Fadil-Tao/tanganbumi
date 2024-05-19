@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('edit Gallery')}}</h1>
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.galleries.update' ,$gallery->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="catalog_id">{{ __('Catalogs') }}</label>
                    <select name="catalog_id" class="form-control" id="catalog_id">
                        <option value="">{{ __('Select Catalog') }}</option>
                        @foreach($catalogs as $catalog)
                        <option value="{{ $catalog->id }}" {{ $catalog->id == $gallery->catalog_id ? 'selected' : '' }}>
                            {{ $catalog->title }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">{{ __('title') }}</label>
                    <input type="text" class="form-control" id="title" placeholder="{{ __('title') }}" name="title" value="{{ old('title' , $gallery->title)}}" />
                </div>
                <div class="form-group">
                    <label for="photo">{{ __('photo') }}</label>
                    <input type="file" class="form-control" id="photo" placeholder="{{ __('photo') }}" name="photo" value="{{ old('photo') }}" />
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
            </form>
        </div>
    </div>
</div>


<!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.select-multiple').select2();
</script>
@endpush
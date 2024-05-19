@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
            <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover datatable datatable-role" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                               
                                <th>No</th>
                                <th>{{ __('Photo') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
    @forelse($catalog->galleries as $gallery)
    <tr data-entry-id="{{ $gallery->id }}">
        <td>{{ $loop->iteration }}</td>
        <td>
            <img src="{{ Storage::url($gallery->photo) }}" width="200" alt="">
        </td>
        <td>
            <div class="btn-group btn-group-sm">
                <a href="{{ route('admin.galleries.edit', [$catalog, $gallery]) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <form onclick="return confirm('Are you sure?')" class="d-inline" action="{{ route('admin.galleries.destroy',$gallery) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
    </tr>
    @endforelse
</tbody>

                    </table>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.catalogs.update', $catalog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="title">{{ __('title') }}</label>
                        <input type="text" class="form-control" id="title" placeholder="{{ __('title') }}" name="title" value="{{ old('title', $catalog->title) }}" />
                    </div>
                    <div class="form-group">
                        <label for="bahan">{{ __('bahan') }}</label>
                        <input type="text" class="form-control" id="bahan" placeholder="{{ __('bahan') }}" name="bahan" value="{{ old('bahan', $catalog->bahan) }}" />
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">{{ __('deskripsi') }}</label>
                        <textarea class="form-control" id="deskripsi" placeholder="{{ __('deskripsi') }}" name="deskripsi" value="{{ old('deskripsi', $catalog->deskripsi) }}" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">{{ __('harga') }}</label>
                        <input type="number" class="form-control" id="harga" placeholder="{{ __('harga') }}" name="harga" value="{{ old('harga', $catalog->harga) }}" />
                    </div>
                    <div class="form-group">
                        <label for="banner">{{ __('banner') }}</label>
                        <input type="file" class="form-control" id="banner" placeholder="{{ __('banner') }}" name="banner" value="{{ old('banner', $catalog->banner) }}" />
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush
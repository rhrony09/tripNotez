@extends('layouts.dashboard')

@section('top-btn')
    <a class="btn btn-primary btn-sm" href="{{ route('dashboard.area.create') }}"><i class="fa fa-plus"></i> Add Area</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Area List</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle datatable">
                <thead>
                    <tr>
                        <th width="50px">S/N</th>
                        <th width="150px">Image</th>
                        <th width="15%">Area</th>
                        <th width="15%">City</th>
                        <th>Description</th>
                        <th width="50px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $area)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img class="area-featured-image" src="{{ asset('/uploads/areas/' . $area->image) }}" alt=""></td>
                            <td>{{ $area->name }}</td>
                            <td>{{ $area->city->name }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($area->description, $limit = 120, $end = '...') }}</td>
                            <td>
                                <x-dropdown>
                                    <x-dropdownLink icon="eye" link="#">View</x-dropdownLink>
                                    <x-dropdownLink icon="pen-to-square" link="{{ route('dashboard.area.edit', $area->id) }}">Edit</x-dropdownLink>
                                    <x-dropdownButton class="delete" icon="trash-can" id="{{ $area->id }}">Delete</x-dropdownButton>
                                </x-dropdown>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('.delete').click(function() {
            let id = $(this).data('id');
            let url = "{{ route('dashboard.area.delete', ':id') }}";
            url = url.replace(':id', id);
            delete_warning(url);
        });
    </script>
@endpush

@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <form id="add-area" method="POST" enctype="multipart/form-data">
                <div id="form-errors"></div>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <x-forms.text fieldId="name" fieldLabel="Area Name" fieldName="name" :fieldRequired="true">
                        </x-forms.text>
                    </div>
                    <div class="col-md-4">
                        <x-forms.select fieldId="city" fieldLabel="City" fieldName="city" :fieldRequired="true">
                            <option value="">--</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div class="col-md-8">
                        <x-forms.text fieldId="best_time" fieldLabel="Best Time to Visit" fieldName="best_time">
                        </x-forms.text>
                    </div>
                    <div class="col-md-12">
                        <x-forms.textarea fieldId="description" fieldLabel="Description" fieldName="description" fieldPlaceholder="Write a short description about the place" :fieldRequired="true">
                        </x-forms.textarea>
                    </div>
                    <div class="col-md-12">
                        <x-forms.file fieldId="image" fieldLabel="Upload a Featured Image" fieldName="image" fieldHelp="Supported: JPG & PNG. Size: 1920x540px" :fieldRequired="true">
                        </x-forms.file>
                    </div>
                    <div class="col-md-12">
                        <x-button icon="plus" type="submit">Add</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#add-area').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.area.store') }}",
                    disableButton: true,
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            location.reload();
                        }
                    },
                    error: function(response) {
                        let errors = response.responseJSON.errors;
                        let errorsHtml = '<div class="alert alert-danger alert-dismissible fade show"><ul class="m-0">';

                        $.each(errors, function(key, value) {
                            errorsHtml += '<li>' + value + '</li>';
                        });
                        errorsHtml += '</ul><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

                        $('#form-errors').html(errorsHtml);
                    }
                });
            });
        });
    </script>
@endpush

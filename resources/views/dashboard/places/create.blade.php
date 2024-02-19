@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <form id="add-place" method="POST" enctype="multipart/form-data">
                <div id="form-errors"></div>
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <x-forms.text fieldId="name" fieldLabel="Place Name" fieldName="name" :fieldRequired="true">
                        </x-forms.text>
                    </div>
                    <div class="col-md-4">
                        <x-forms.select fieldId="price_range" fieldLabel="Price Range" fieldName="price_range" :fieldRequired="true">
                            <option value="">--</option>
                            <option value="৳">৳</option>
                            <option value="৳৳">৳৳</option>
                            <option value="৳৳৳">৳৳৳</option>
                            <option value="৳৳৳৳">৳৳৳৳</option>
                            <option value="৳৳৳৳৳">৳৳৳৳৳</option>
                        </x-forms.select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <x-forms.select fieldId="area_id" fieldLabel="Area" fieldName="area_id" :fieldRequired="true">
                            <option value="">--</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div class="col-md-3">
                        <x-forms.select fieldId="type" fieldLabel="Type" fieldName="type" :fieldRequired="true">
                            <option value="">--</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Resort">Resort</option>
                        </x-forms.select>
                    </div>
                    <div class="col-md-3">
                        <x-forms.select fieldId="food_categories" fieldLabel="Food Categories" fieldName="food_categories[]" :multiple="true">
                            <option value="">--</option>
                            @foreach ($food_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div class="col-md-3">
                        <x-forms.select fieldId="vendor_id" fieldLabel="Vendor" fieldName="vendor_id">
                            <option value="">--</option>
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-forms.textareaQuill fieldId="description" fieldLabel="Description" fieldName="description">
                        </x-forms.textareaQuill>
                    </div>
                    <div class="col-md-12">
                        <x-forms.text fieldId="address" fieldLabel="Address" fieldName="address" :fieldRequired="true">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="mobile" fieldLabel="Mobile Number" fieldName="mobile" :fieldRequired="true" fieldPlaceholder="01*********">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.url fieldId="website" fieldLabel="Website" fieldName="website" fieldPlaceholder="https://www.example.com">
                        </x-forms.url>
                    </div>
                    <div class="col-md-12">
                        <x-forms.label class="mt-3" fieldId="highlights" fieldLabel="Highlights" :fieldRequired="true"></x-forms.label>
                        <div class="d-flex">
                            @foreach ($highlights as $highlight)
                                <x-forms.checkbox fieldId="highlights-{{ $highlight->id }}" fieldLabel="{{ $highlight->name }}" fieldName="highlights[]" fieldValue="{{ $highlight->id }}"></x-forms.checkbox>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <x-forms.label class="mt-3" fieldId="social_media_list" fieldLabel="Social Medias"></x-forms.label>
                        <div class="social-details">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="social_media_name[]" class="form-select select-picker-social">
                                        <option value=""></option>
                                        @foreach ($social_medias as $social_media)
                                            <option value="{{ $social_media->id }}" data-icon="{{ $social_media->icon }}">{{ $social_media->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <input type="url" name="social_media_url[]" class="form-control" placeholder="Enter social media url">
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-secondary btn-sm add-social">Add Row</button>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <x-forms.label fieldId="opening_hour_list" fieldLabel="Open & Closing Time"></x-forms.label>
                        <div class="accordion">
                            @foreach ($days as $day)
                                <div class="accordion-item p-2 pb-1">
                                    <x-forms.checkbox class="opening-hour" data-id="{{ $day->id }}" fieldId="opening-hour-{{ $day->id }}" fieldLabel="{{ $day->name }}" fieldName="opening_days[]" fieldValue="{{ $day->id }}"></x-forms.checkbox>
                                    <div class="collapse time-element-{{ $day->id }} mb-2">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <x-forms.label fieldId="opening-time-{{ $loop->iteration }}" fieldLabel="Opening Time"></x-forms.label>
                                                <input type="text" class="form-control timepicker" name="opening_time[]" id="opening-time-{{ $loop->iteration }}">
                                            </div>
                                            <div class="col-md-3">
                                                <x-forms.label fieldId="closing-time-{{ $loop->iteration }}" fieldLabel="Closing Time"></x-forms.label>
                                                <input type="text" class="form-control timepicker" name="closing_time[]" id="closing-time-{{ $loop->iteration }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <x-forms.file fieldId="image" fieldLabel="Upload a Featured Image" fieldName="image" fieldHelp="Supported: JPG & PNG. Size: 1920x540px" :fieldRequired="true">
                        </x-forms.file>
                    </div>
                    <div class="col-md-12">
                        <x-button icon="plus" type="submit">Add Place</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.select-picker-social').select2({
                templateResult: formatIcon,
                templateSelection: formatIcon,
                escapeMarkup: function(m) {
                    return m;
                },
                placeholder: 'Select an Option',
                width: '100%'
            });

            function formatIcon(icon) {
                if (!icon.id) {
                    return icon.text;
                }
                return '<i class="' + icon.element.dataset.icon + '"></i> ' + icon.text;
            }

            $('.add-social').click(function() {
                let social_html = `
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <select name="social_media_name[]" class="form-select select-picker-social">
                                <option value=""></option>
                                @foreach ($social_medias as $social_media)
                                    <option value="{{ $social_media->id }}" data-icon="{{ $social_media->icon }}">{{ $social_media->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-8">
                            <input type="url" name="social_media_url[]" class="form-control" placeholder="Enter social media url">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-secondary remove-social"><i class="fa-regular fa-trash"></i></button>
                        </div>
                    </div>
                `;

                $('.social-details').append(social_html);

                $('.select-picker-social').select2({
                    templateResult: formatIcon,
                    templateSelection: formatIcon,
                    escapeMarkup: function(m) {
                        return m;
                    },
                    placeholder: 'Select an Option',
                    width: '100%'
                });
            });

            $('body').on('click', '.remove-social', function() {
                $(this).closest('.row').remove();
            });

            $('.opening-hour').change(function() {
                let id = $(this).data('id');
                let element = ".time-element-" + id;
                $(element).collapse('toggle');
            });

            $('#add-place').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.place.store') }}",
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

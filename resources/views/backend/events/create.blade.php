@extends('backend.layouts.app')

@section('title', 'Add Event')

@section('content')

<main class="app-main" id="main" tabindex="-1">

    <!-- Page Header -->
    <div class="app-content-header">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3">Events</h1>
                </div>

                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="{{ route('backend.events.index') }}">Events</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Add Event
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Content -->
    <div class="app-content">

        <div class="container-fluid">

            <div class="row g-4">

                <div class="col-md-8">

                    <div class="card card-primary card-outline mb-4">

                        <div class="card-header">
                            <div class="card-title">
                                Add Event
                            </div>
                        </div>

                        <form action="{{ route('backend.events.store') }}" method="POST">

                            @csrf

                            <div class="card-body">
                               {{-- Success Message --}} @if (session('success')) <div class="alert alert-success alert-dismissible fade show" role="alert"> <i class="bi bi-check-circle-fill me-2"></i> <strong>Success!</strong> {{ session('success') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button> </div> @endif
                                {{-- Validation Errors --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Please fix the following errors:</strong>

                                        <ul class="mb-0 mt-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <!-- Title -->
                                <div class="mb-3">

                                    <label for="title" class="form-label">
                                        Event Title
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        id="title"
                                        name="title"
                                        value="{{ old('title') }}"
                                        placeholder="Enter event title"
                                        required
                                    >

                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Category -->
                                <div class="mb-3">

                                    <label for="category" class="form-label">
                                        Category
                                        <span class="text-danger">*</span>
                                    </label>

                                    <select
                                        class="form-select @error('category') is-invalid @enderror"
                                        id="category"
                                        name="category"
                                        required
                                    >

                                        <option value="">
                                            Select Category
                                        </option>

                                        <option value="Academic"
                                            {{ old('category') == 'Academic' ? 'selected' : '' }}>
                                            Academic
                                        </option>

                                        <option value="Sports"
                                            {{ old('category') == 'Sports' ? 'selected' : '' }}>
                                            Sports
                                        </option>

                                        <option value="Cultural"
                                            {{ old('category') == 'Cultural' ? 'selected' : '' }}>
                                            Cultural
                                        </option>

                                        <option value="Workshops"
                                            {{ old('category') == 'Workshops' ? 'selected' : '' }}>
                                            Workshops
                                        </option>

                                        <option value="Conferences"
                                            {{ old('category') == 'Conferences' ? 'selected' : '' }}>
                                            Conferences
                                        </option>

                                        <option value="Admission"
                                            {{ old('category') == 'Admission' ? 'selected' : '' }}>
                                            Admission
                                        </option>

                                        <option value="Meeting"
                                            {{ old('category') == 'Meeting' ? 'selected' : '' }}>
                                            Meeting
                                        </option>

                                        <option value="Other"
                                            {{ old('category') == 'Other' ? 'selected' : '' }}>
                                            Other
                                        </option>

                                    </select>

                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Date -->
                                <div class="mb-3">

                                    <label for="event_date" class="form-label">
                                        Event Date
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control @error('event_date') is-invalid @enderror"
                                        id="event_date"
                                        name="event_date"
                                        value="{{ old('event_date') }}"
                                        required
                                    >

                                    @error('event_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Time -->
                                <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <label for="start_time" class="form-label">
                                            Start Time
                                        </label>

                                        <input
                                            type="time"
                                            class="form-control @error('start_time') is-invalid @enderror"
                                            id="start_time"
                                            name="start_time"
                                            value="{{ old('start_time') }}"
                                        >

                                        @error('start_time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-md-6 mb-3">

                                        <label for="end_time" class="form-label">
                                            End Time
                                        </label>

                                        <input
                                            type="time"
                                            class="form-control @error('end_time') is-invalid @enderror"
                                            id="end_time"
                                            name="end_time"
                                            value="{{ old('end_time') }}"
                                        >

                                        @error('end_time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>


                                <!-- Location -->
                                <div class="mb-3">

                                    <label for="location" class="form-label">
                                        Location
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control @error('location') is-invalid @enderror"
                                        id="location"
                                        name="location"
                                        value="{{ old('location') }}"
                                        placeholder="e.g. Main Campus Auditorium"
                                    >

                                    @error('location')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Description -->
                                <div class="mb-3">

                                    <label for="description" class="form-label">
                                        Description
                                    </label>

                                    <textarea
                                        class="form-control @error('description') is-invalid @enderror"
                                        id="description"
                                        name="description"
                                        rows="5"
                                        placeholder="Enter event description"
                                    >{{ old('description') }}</textarea>

                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Link -->
                                <div class="mb-3">

                                    <label for="link" class="form-label">
                                        Event Link
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control @error('link') is-invalid @enderror"
                                        id="link"
                                        name="link"
                                        value="{{ old('link') }}"
                                        placeholder="Optional event details URL"
                                    >

                                    @error('link')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Status -->
                                <div class="mb-3">

                                    <div class="form-check">

                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="1"
                                            id="status"
                                            name="status"
                                            {{ old('status', true) ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="status">
                                            Active
                                        </label>

                                    </div>

                                </div>

                            </div>


                            <!-- Footer -->
                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-calendar-plus"></i>
                                    Add Event
                                </button>

                                <a
                                    href="{{ route('backend.events.index') }}"
                                    class="btn btn-secondary"
                                >
                                    <i class="bi bi-arrow-left"></i>
                                    Back
                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

@endsection


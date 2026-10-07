@extends('backend.layouts.app')
@section('title','Home')
@push('scripts')
<script>
   (() => {
        'use strict';
        const root = document.documentElement;

        // Applications with their own theming opt out of AdminLTE's color mode
        // entirely, here as well as in the bundle.
        if (root.getAttribute('data-lte-color-mode') === 'off') {
          return;
        }

        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try {
          stored = localStorage.getItem(STORAGE_KEY);
        } catch {
          // localStorage may be unavailable (private mode, sandboxed iframe).
        }
        // Mirror the precedence in color-mode.ts: the visitor's stored choice
        // wins, then a theme this page declared itself, then the OS preference.
        const authored = root.getAttribute('data-bs-theme');
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') {
          resolved = stored;
        } else if (authored === 'dark' || authored === 'light') {
          resolved = authored;
        } else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) {
          resolved = 'dark';
        }
        root.setAttribute('data-bs-theme', resolved);
        root.style.colorScheme = resolved;
        // Flag values computed here, so the bundle does not mistake them for a
        // theme the page declared and stop following the OS preference.
        if (resolved !== authored) {
          root.setAttribute('data-lte-theme-resolved', '');
        }
      })();
</script>
@endpush
@section('content')

  <main class="app-main" id="main" tabindex="-1">

{{-- Page Header --}}
<div class="app-content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Gallery</h1>
            </div>

            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Gallery</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Add Pictures
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>


{{-- Page Content --}}
<div class="app-content">

    <div class="container-fluid">

        <div class="row g-4">

            <div class="col-md-8">

                <div class="card card-primary card-outline mb-4">

                    <div class="card-header">
                        <div class="card-title">
                            Add Gallery Pictures
                        </div>
                    </div>


                    <form action="{{ route('gallery.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="card-body">

                            {{-- Validation Errors --}}
                            @if ($errors->any())

                                <div class="alert alert-danger">

                                    <ul class="mb-0">

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>

                            @endif


                            {{-- Success Message --}}
                            @if(session('success'))

                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>

                            @endif


                            {{-- Title --}}
                            <div class="mb-3">

                                <label for="title" class="form-label">
                                    Gallery Title
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="title"
                                    name="title"
                                    placeholder="Enter gallery title"
                                    value="{{ old('title') }}"
                                    required
                                >

                            </div>


                            {{-- Category --}}
                            <div class="mb-3">

                                <label for="category" class="form-label">
                                    Category
                                </label>

                                <select
                                    class="form-select"
                                    id="category"
                                    name="category"
                                >

                                    <option value="">
                                        Select Category
                                    </option>

                                    <option value="Events">
                                        Events
                                    </option>

                                    <option value="College Activities">
                                        College Activities
                                    </option>

                                    <option value="Laboratories">
                                        Laboratories
                                    </option>

                                    <option value="Sports">
                                        Sports
                                    </option>

                                    <option value="Other">
                                        Other
                                    </option>

                                </select>

                            </div>


                            {{-- Description --}}
                            <div class="mb-3">

                                <label for="description" class="form-label">
                                    Description
                                </label>

                                <textarea
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    rows="4"
                                    placeholder="Enter description"
                                >{{ old('description') }}</textarea>

                            </div>


                            {{-- Multiple Images --}}
                            <div class="mb-3">

                                <label for="images" class="form-label">
                                    Select Pictures
                                </label>

                                <input
                                    type="file"
                                    class="form-control"
                                    id="images"
                                    name="images[]"
                                    multiple
                                    accept="image/jpeg,image/png,image/jpg,image/webp"
                                >

                                <div class="form-text">
                                    You can select multiple pictures.
                                    JPG, JPEG, PNG and WEBP are allowed.
                                </div>

                            </div>


                            {{-- Image Preview --}}
                            <div
                                id="imagePreview"
                                class="row g-3 mt-2"
                            ></div>


                            {{-- Sort Order --}}
                            <div class="mb-3">

                                <label for="sort_order" class="form-label">
                                    Sort Order
                                </label>

                                <input
                                    type="number"
                                    class="form-control"
                                    id="sort_order"
                                    name="sort_order"
                                    value="{{ old('sort_order', 0) }}"
                                >

                            </div>


                            {{-- Active --}}
                            <div class="mb-3">

                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="1"
                                        id="is_active"
                                        name="is_active"
                                        checked
                                    >

                                    <label
                                        class="form-check-label"
                                        for="is_active"
                                    >
                                        Active
                                    </label>

                                </div>

                            </div>

                        </div>


                        <div class="card-footer">

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                <i class="bi bi-upload"></i>
                                Upload Pictures
                            </button>

                            <a
                                href="{{ route('gallery.index') }}"
                                class="btn btn-secondary"
                            >


@endsection
 
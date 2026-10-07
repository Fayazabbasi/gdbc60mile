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
@push('styles')
<link
      rel="stylesheet"
      href="https://cdn.datatables.net/3.0.2/css/dataTables.dataTables.min.css"
      crossorigin="anonymous"
    />
@endpush


@push('script')

<script
      src="https://cdn.datatables.net/3.0.2/js/dataTables.min.js"
      crossorigin="anonymous"
    ></script>

    
@endpush


@section('content')

<main class="app-main" id="main" tabindex="-1">

    <!-- Content Header -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="mb-0 fs-3">Create Notice</h1>
                </div>

                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="{{ route('notices.index') }}">Notices</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Create Notice
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">

                <div class="col-md-8">

                    <div class="card card-primary card-outline mb-4">

                        <div class="card-header">
                            <div class="card-title">Add Notice</div>
                        </div>

                        <form method="POST"
                              action="{{ route('notices.store') }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="card-body">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label for="title" class="form-label">
                                        Notice Title
                                    </label>

                                    <input type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           id="title"
                                           name="title"
                                           value="{{ old('title') }}"
                                           placeholder="Enter notice title">

                                    @error('title')
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
                                        rows="6"
                                        placeholder="Enter notice details">{{ old('description') }}</textarea>

                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <!-- Attachment -->
                                <div class="mb-3">
                                    <label for="attachment" class="form-label">
                                        Attachment
                                    </label>

                                    <input type="file"
                                           class="form-control @error('attachment') is-invalid @enderror"
                                           id="attachment"
                                           name="attachment"
                                           accept=".pdf,.doc,.docx">

                                    <div class="form-text">
                                        Allowed: PDF, DOC, DOCX. Maximum size: 5MB.
                                    </div>

                                    @error('attachment')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="row">

                                    <!-- Notice Date -->
                                    <div class="col-md-6 mb-3">
                                        <label for="notice_date" class="form-label">
                                            Notice Date
                                        </label>

                                        <input type="date"
                                               class="form-control @error('notice_date') is-invalid @enderror"
                                               id="notice_date"
                                               name="notice_date"
                                               value="{{ old('notice_date', date('Y-m-d')) }}">

                                        @error('notice_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <!-- Expiry Date -->
                                    <div class="col-md-6 mb-3">
                                        <label for="expiry_date" class="form-label">
                                            Expiry Date
                                        </label>

                                        <input type="date"
                                               class="form-control @error('expiry_date') is-invalid @enderror"
                                               id="expiry_date"
                                               name="expiry_date"
                                               value="{{ old('expiry_date') }}">

                                        @error('expiry_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>


                                <!-- Published -->
                                <div class="mb-3">
                                    <label class="form-label">
                                        Publication Status
                                    </label>

                                    <select class="form-select"
                                            name="is_published">

                                        <option value="1"
                                            {{ old('is_published', 1) == 1 ? 'selected' : '' }}>
                                            Published
                                        </option>

                                        <option value="0"
                                            {{ old('is_published') === '0' ? 'selected' : '' }}>
                                            Draft
                                        </option>

                                    </select>
                                </div>

                                <!-- Category --> <div class="mb-3"> <label for="category" class="form-label"> Category </label> <select class="form-select @error('category') is-invalid @enderror" id="category" name="category"> <option value="">Select Category</option> <option value="admission" {{ old('category') == 'admission' ? 'selected' : '' }}> Admission </option> <option value="notice" {{ old('category') == 'notice' ? 'selected' : '' }}> Notice </option> <option value="announcement" {{ old('category') == 'announcement' ? 'selected' : '' }}> Announcement </option> <option value="other" {{ old('category') == 'other' ? 'selected' : '' }}> Other </option> </select>


                                <!-- Important -->
                                <div class="mb-3">
                                    <label class="form-label">
                                        Notice Priority
                                    </label>

                                    <select class="form-select"
                                            name="is_important">

                                        <option value="0"
                                            {{ old('is_important', 0) == 0 ? 'selected' : '' }}>
                                            Normal
                                        </option>

                                        <option value="1"
                                            {{ old('is_important') == 1 ? 'selected' : '' }}>
                                            Important
                                        </option>

                                    </select>
                                </div>

                            </div>


                            <!-- Footer -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i>
                                    Save Notice
                                </button>

                                <a href="{{ route('notices.index') }}"
                                   class="btn btn-secondary">
                                    Cancel
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
 


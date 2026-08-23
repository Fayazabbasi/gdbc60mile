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
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Create Role</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Create Role</a></li>
                    
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="row g-4">
              <div class="col-12">
                @if(session('success'))
               <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                      
                    </div>
                @endif
                  @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                      
                     @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                  </div>
                  @endif
              
              <!-- Quick Example -->
              <div class="col-md-6">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Add Role</div>
                  </div>
                  <form method="post" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="card-body">
                      
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                      </div>
                     


                      



                    <div class="form-floating">
                      <textarea class="form-control" id="floatingTextarea" placeholder="Leave a comment here" style="height: 6rem" name="description"></textarea>
                      <label for="floatingTextarea">description</label>
                    </div>

                   <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default" name="is_active">
                        <option selected="">Open this select menu</option>
                        <option value="1">active</option>
                        <option value="0">inactive</option>
                        
                      </select>
                    </div>
                      
                      
                    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Input Group -->
              

              <!-- Checks & Radios -->
              

              <!-- Select / Range / File -->
              

              <!-- Floating labels -->
              

              <!-- Disabled / Readonly -->
              
            </div>
          </div>
        </div>
      </main>

@endsection
 
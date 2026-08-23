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
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Data Tables</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

      <div style="padding:20px"> 
      <table id="example" class="display">
		<thead>
			<tr>
        <th>Id</th>
				<th>Name</th>
				
				<th>Description</th>
				<th>Status</th>
				
			</tr>
		</thead>
		<tbody>

    @if(!empty($roles))
       @foreach($roles as $role)
			<tr>
				<td>{{ $role->id }}</td>
				<td>{{ $role->name }}</td>

				<td>{{ $role->description }}</td>
				<td>{{ $role->is_active ? 'Active' : 'Inactive' }}</td>
				
			</tr>
      @endforeach
      @endif
			
		</tbody>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Name</th>
				
				<th>Description</th>
				<th>Status</th>
			</tr>
		</tfoot>
	</table>

</div>
      </main>
      

@endsection
 


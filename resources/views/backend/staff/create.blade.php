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
                <h1 class="mb-0 fs-3">Form Elements</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Elements</li>
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
                    <div class="card-title">Quick Example</div>
                  </div>
                  <form action="{{ route('staff.store') }}"
      method="POST" enctype="multipart/form-data">
                    <div class="card-body">

                      <div class="mb-3">
                        <label for="employee_code	" class="form-label">Employee Code</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="employee_code">
                        <!-- <div id="emailHelp" class="form-text">
                          We'll never share your email with anyone else.
                        </div> -->
                      </div>

                      <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                      </div>

                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                      </div>

                      <div class="mb-3">
                        <label for="father_name" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="father_name">
                      </div>

                      <div class="mb-3">
                        <label for="cnic" class="form-label">CNIC</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="cnic">
                      </div>

                       <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
                      </div>

                      <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="designation">
                      </div>

                      <div class="mb-3">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="qualification">
                      </div>
 
                      <div class="mb-3">
                        <label for="specialization" class="form-label">Specialization</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="specialization">
                      </div>
                      
                       <div class="mb-3">
                        <label for="specialization" class="form-label">Address</label>
                      <textarea class="form-control" id="address" placeholder="Enter your address" style="height: 6rem" name="address"></textarea>
                    
                    </div>

                    <div class="mb-3">
                      <label for="address" class="form-label">BIO</label>
                      <textarea class="form-control" id="bio" placeholder="Enter your bio" style="height: 6rem" name="bio"></textarea>
                     
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default" name="role">
                        <option selected="">select Role</option>
                        
                        @if(!empty($roles))
                        @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                        @endif
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="select-default">Select Designation</label>
                      <select class="form-select" id="select-default" name="parent_id">
                        <option selected="">Select Your Officer</option>
                        
                        @if(!empty($parents))
                        
                        @foreach($parents as $parent)
                        <option value="{{$parent->id}}">{{$parent->designation}}</option>
                        @endforeach
                        @endif
                        
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default" name="staff_type">
                        <option selected>Select Type</option>
                        <option value="management">management</option>
                        <option value="teaching">teaching</option>
                        <option value="non-teaching">non-teaching</option>
                        
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default" name="subject_id">
                        <option selected>Select Subject</option>
                        @if(!empty($subjects))
                        @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                        @endif
                      </select>
                    </div>

                      <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default">
                        <option selected="">Open this select menu</option>
                        <option value="1">active</option>
                        <option value="0">inactive</option>
                        
                      </select>
                    </div>



                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                        <label class="input-group-text" for="inputGroupFile02" >Upload</label>
                      </div>
                      <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> -->
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
 
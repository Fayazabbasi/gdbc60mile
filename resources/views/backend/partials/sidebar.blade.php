<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="./assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        <div class="sidebar-search" role="search">
          <label for="sidebar-search-input" class="visually-hidden">Filter menu</label>
          <input type="search" id="sidebar-search-input" class="form-control form-control-sm" placeholder="Filter menu…" autocomplete="off" data-lte-toggle="sidebar-search" data-lte-target="#navigation">
          <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty="" role="status" hidden="">
            No matching pages.
          </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper" data-overlayscrollbars="host"><div class="os-size-observer"><div class="os-size-observer-listener"></div></div><div class="" data-overlayscrollbars-viewport="scrollbarHidden overflowXHidden overflowYScroll" tabindex="-1" style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px;">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false" id="navigation" tabindex="-1">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-expanded="false">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Roles
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="{{ route('roles.create') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Roles</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View Roles</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              </ul>



              <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false" id="navigation" tabindex="-1">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-expanded="false">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                   Programs
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="{{ route('programs.create') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Program</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('programs.index') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View Programs</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              </ul>


              <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false" id="navigation" tabindex="-1">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-expanded="false">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                   Staff
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="{{ route('staff.create') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Staff</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('programs.index') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View Staff</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              </ul>


              <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false" id="navigation" tabindex="-1">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-expanded="false">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Subjects
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="{{ route('subjects.create') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Subjects</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('subjects.index') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View Subjects</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              </ul>


              <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false" id="navigation" tabindex="-1">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-expanded="false">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Assign Subject
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none; box-sizing: border-box;">
                  <li class="nav-item">
                    <a href="{{ route('program-subject.create') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Assign Subjects</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('subjects.index') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View structure</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              </ul>
            <!--end::Sidebar Menu-->

            <!-- Docs CTA (bottom of sidebar) -->
           
          </nav>
        </div><div class="os-scrollbar os-scrollbar-horizontal os-theme-light os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-unusable os-scrollbar-auto-hide-hidden" style="--os-viewport-percent: 1; --os-scroll-direction: 0;"><div class="os-scrollbar-track"><div class="os-scrollbar-handle"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-theme-light os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-visible os-scrollbar-cornerless os-scrollbar-auto-hide-hidden" style="--os-viewport-percent: 0.4744; --os-scroll-direction: 0;"><div class="os-scrollbar-track"><div class="os-scrollbar-handle"></div></div></div></div>
        <!--end::Sidebar Wrapper-->
      </aside>
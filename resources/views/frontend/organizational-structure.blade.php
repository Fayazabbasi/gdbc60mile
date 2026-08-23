@extends('frontend.layouts.app')

@section('title', 'Organizational Structure')
@push('styles')
<style>
/* =========================
   ORGANIZATION STRUCTURE
========================= */

.org-level {
    display: flex;
    justify-content: center;
    width: 100%;
}

.org-card {
    width: 240px;
    padding: 18px;
    text-align: center;
    background: #fff;
    border: 2px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
    box-sizing: border-box;
}

.org-card h4 {
    margin: 0 0 5px;
    font-size: 18px;
}

.org-card span {
    color: #777;
    font-size: 14px;
}

.org-line {
    text-align: center;
    font-size: 25px;
    height: 40px;
    line-height: 40px;
}

/* =========================
   BRANCHES
========================= */

.branches {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 100px;
    margin-top: 30px;
    width: 100%;
}

.branch {
    width: 300px;
    max-width: 100%;
    text-align: center;
}

.staff-card {
    width: 220px;
    max-width: 100%;
    margin: 10px auto;
    padding: 15px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, .08);
    box-sizing: border-box;
    word-break: break-word;
}

/* =========================
   TABLET
========================= */

@media (max-width: 991px) {

    .branches {
        gap: 40px;
    }

    .branch {
        width: 280px;
    }

}


/* =========================
   MOBILE
========================= */

@media (max-width: 767px) {

    .org-level {
        padding: 0 15px;
    }

    .org-card {
        width: 100%;
        max-width: 260px;
        padding: 15px;
    }

    .org-card h4 {
        font-size: 17px;
    }

    .org-card span {
        font-size: 13px;
    }

    .org-line {
        height: 30px;
        line-height: 30px;
        font-size: 22px;
    }

    /*
     * Put Teaching and Non-Teaching
     * sections vertically on mobile.
     */
    .branches {
        flex-direction: column;
        align-items: center;
        gap: 40px;
        margin-top: 20px;
        padding: 0 15px;
    }

    .branch {
        width: 100%;
        max-width: 320px;
    }

    .staff-card {
        width: 100%;
        max-width: 260px;
        padding: 13px;
    }

}


/* =========================
   SMALL MOBILE
========================= */

@media (max-width: 480px) {

    .org-card {
        max-width: 230px;
        padding: 13px;
    }

    .org-card h4 {
        font-size: 16px;
    }

    .branch {
        max-width: 280px;
    }

    .staff-card {
        max-width: 230px;
    }

    .branches {
        gap: 30px;
    }

}
</style>
@endpush
@section('content')

@if($regionalDirector)

    {{-- Regional Director --}}
    <div class="org-level">
        <div class="org-card">
            <h4>{{ $regionalDirector->name }}</h4>
            <span>Regional Director</span>
        </div>
    </div>


    {{-- Principal --}}
    @foreach($regionalDirector->children as $principal)

        <div class="org-line">↓</div>

        <div class="org-level">
            <div class="org-card">
                <h4>{{ $principal->name }}</h4>
                <span>Principal</span>
            </div>
        </div>


        {{-- Teaching / Non-Teaching --}}
        <div class="branches">

            {{-- Teaching Staff --}}
            <div class="branch">

                <div class="org-card">
                    <h4>Teaching Staff</h4>
                </div>

                @foreach(
                    $principal->children->where('staff_type', 'teaching')
                    as $lecturer
                )

                    <div class="org-line">↓</div>

                    <div class="staff-card">
                        <h4>{{ $lecturer->name }}</h4>
                        <span>{{ $lecturer->designation }}</span>
                    </div>

                @endforeach

            </div>


            {{-- Non-Teaching Staff --}}
            <div class="branch">

                <div class="org-card">
                    <h4>Non-Teaching Staff</h4>
                </div>

                @foreach(
                    $principal->children->where('staff_type', 'non_teaching')
                    as $staff
                )

                    <div class="org-line">↓</div>

                    <div class="staff-card">
                       <h4>{{ $staff->name }}</h4>
                        <span>{{ $staff->designation }}</span>
                    </div>

                @endforeach

            </div>

        </div>

    @endforeach

@endif
@endsection
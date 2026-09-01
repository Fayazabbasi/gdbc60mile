@extends('frontend.layouts.app')

@section('title', 'Organizational Structure')

@push('styles')
<style>

    .organization-section {
        padding: 60px 0;
    }

    .organization-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .organization-title h2 {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .organization-title p {
        color: #777;
    }

    /* Main chart */
    .org-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    /* Each level */
    .org-level {
        display: flex;
        justify-content: center;
        position: relative;
        margin-bottom: 45px;
    }

    /* Staff card */
    .org-card {
        min-width: 220px;
        padding: 20px 25px;
        text-align: center;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.10);
        border: 1px solid #eee;
        position: relative;
        z-index: 2;
    }

    .org-card h4 {
        margin: 0 0 5px;
        font-size: 18px;
        font-weight: 700;
    }

    .org-card span {
        font-size: 14px;
        color: #777;
    }

    /* Image */
    .org-card img {
        width: 75px;
        height: 75px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    /* Vertical connector */
    .org-level:not(:last-child)::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        width: 2px;
        height: 45px;
        background: #bbb;
    }

    /* Branches */
    .org-branches {
        display: flex;
        justify-content: center;
        gap: 100px;
        position: relative;
        margin-bottom: 45px;
    }

    /* Horizontal branch line */
    .org-branches::before {
        content: "";
        position: absolute;
        top: -23px;
        left: 25%;
        right: 25%;
        height: 2px;
        background: #bbb;
    }

    .org-branch {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    /* Vertical line to branch */
    .org-branch::before {
        content: "";
        position: absolute;
        top: -23px;
        width: 2px;
        height: 23px;
        background: #bbb;
    }

    /* Staff underneath */
    .org-staff {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 25px;
        flex-wrap: wrap;
    }

    .org-staff .org-card {
        min-width: 180px;
    }

    /* Mobile */
    @media (max-width: 768px) {

        .org-branches {
            flex-direction: column;
            gap: 50px;
        }

        .org-branches::before {
            display: none;
        }

        .org-branch::before {
            top: -25px;
            height: 25px;
        }

        .org-level {
            margin-bottom: 45px;
        }

        .org-card {
            min-width: 190px;
        }

    }

</style>
@endpush


@section('content')

<section class="organization-section">

    <div class="container">

        <div class="organization-title">
            <h2>Organizational Structure</h2>
            <p>Government Degree College 60 Mile</p>
        </div>


        <div class="org-chart">

            {{-- TOP LEVEL --}}
            @foreach($topLevel as $minister)

                <div class="org-level">

                    <div class="org-card">

                        @if($minister->photo)
                            <img src="{{ asset('storage/'.$minister->photo) }}"
                                 alt="{{ $minister->name }}">
                        @endif

                        <h4>{{ $minister->name }}</h4>

                        <span>
                            {{ $minister->designation }}
                        </span>

                    </div>

                </div>


                {{-- SECRETARY --}}
                @foreach($minister->children as $secretary)

                    <div class="org-level">

                        <div class="org-card">

                            @if($secretary->photo)
                                <img src="{{ asset('storage/'.$secretary->photo) }}"
                                     alt="{{ $secretary->name }}">
                            @endif

                            <h4>{{ $secretary->name }}</h4>

                            <span>
                                {{ $secretary->designation }}
                            </span>

                        </div>

                    </div>


                    {{-- DIRECTOR GENERAL --}}
                    @foreach($secretary->children as $dg)

                        <div class="org-level">

                            <div class="org-card">

                                @if($dg->photo)
                                    <img src="{{ asset('storage/'.$dg->photo) }}"
                                         alt="{{ $dg->name }}">
                                @endif

                                <h4>{{ $dg->name }}</h4>

                                <span>
                                    {{ $dg->designation }}
                                </span>

                            </div>

                        </div>


                        {{-- REGIONAL DIRECTOR --}}
                        @foreach($dg->children as $rd)

                            <div class="org-level">

                                <div class="org-card">

                                    @if($rd->photo)
                                        <img src="{{ asset('storage/'.$rd->photo) }}"
                                             alt="{{ $rd->name }}">
                                    @endif

                                    <h4>{{ $rd->name }}</h4>

                                    <span>
                                        {{ $rd->designation }}
                                    </span>

                                </div>

                            </div>


                            {{-- PRINCIPAL --}}
                            @foreach($rd->children as $principal)

                                <div class="org-level">

                                    <div class="org-card">

                                        @if($principal->photo)
                                            <img src="{{ asset('storage/'.$principal->photo) }}"
                                                 alt="{{ $principal->name }}">
                                        @endif

                                        <h4>{{ $principal->name }}</h4>

                                        <span>
                                            {{ $principal->designation }}
                                        </span>

                                    </div>

                                </div>


                                {{-- TEACHING + NON TEACHING --}}
                                <div class="org-branches">

                                    {{-- TEACHING STAFF --}}
                                    <div class="org-branch">

                                        <div class="org-card">

                                            <h4>Teaching Staff</h4>

                                            <span>
                                                Faculty Members
                                            </span>

                                        </div>


                                        <div class="org-staff">

                                            @foreach($principal->children->where('staff_type', 'teaching') as $teacher)

                                                <div class="org-card">

                                                    @if($teacher->photo)
                                                        <img src="{{ asset('storage/'.$teacher->photo) }}"
                                                             alt="{{ $teacher->name }}">
                                                    @endif

                                                    <h4>
                                                        {{ $teacher->name }}
                                                    </h4>

                                                    <span>
                                                        {{ $teacher->designation }}
                                                    </span>

                                                </div>

                                            @endforeach

                                        </div>

                                    </div>


                                    {{-- NON TEACHING STAFF --}}
                                    <div class="org-branch">

                                        <div class="org-card">

                                            <h4>Non-Teaching Staff</h4>

                                            <span>
                                                Supporting Staff
                                            </span>

                                        </div>


                                        <div class="org-staff">

                                            @foreach($principal->children->where('staff_type', 'non-teaching') as $staff)

                                                <div class="org-card">

                                                    @if($staff->photo)
                                                        <img src="{{ asset('storage/'.$staff->photo) }}"
                                                             alt="{{ $staff->name }}">
                                                    @endif

                                                    <h4>
                                                        {{ $staff->name }}
                                                    </h4>

                                                    <span>
                                                        {{ $staff->designation }}
                                                    </span>

                                                </div>

                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                        @endforeach

                    @endforeach

                @endforeach

            @endforeach

        </div>

    </div>

</section>

@endsection
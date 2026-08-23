@extends('frontend.layouts.app')

@section('title', 'Programs')

@push('styles')
<style>
    /* Programs Page */
    .programs-page {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .section-head {
        margin-bottom: 30px;
    }

    .section-eyebrow {
        font-size: 14px;
        font-weight: 600;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .section-head h2 {
        margin: 0;
        font-size: 32px;
        line-height: 1.3;
    }

    .grid {
        display: grid;
        gap: 25px;
    }

    .grid-3 {
        grid-template-columns: repeat(3, 1fr);
    }

    .card {
        padding: 25px;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    }

    .card h3 {
        margin-top: 0;
        margin-bottom: 12px;
        font-size: 21px;
    }

    .card p {
        margin: 0;
        line-height: 1.7;
    }

    /* Tablet */
    @media (max-width: 992px) {
        .grid-3 {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-head h2 {
            font-size: 28px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .programs-page {
            padding: 30px 15px;
        }

        .grid-3 {
            grid-template-columns: 1fr;
        }

        .section-head {
            margin-bottom: 20px;
        }

        .section-head h2 {
            font-size: 24px;
        }

        .section-eyebrow {
            font-size: 12px;
        }

        .card {
            padding: 20px;
        }

        .card h3 {
            font-size: 19px;
        }

        .card p {
            font-size: 14px;
        }
    }
</style>
@endpush

@section('content')

<div class="programs-page">

    <div class="section-head">
        <div class="section-eyebrow">Intermediate Programs</div>
        <h2>Higher Secondary (Part I – II)</h2>
    </div>

    <div class="grid grid-3">

        @foreach($inters as $inter)

    <div class="card">

        <h3>{{ $inter->name }}</h3>

        @if($inter->subjects->count())

    <p class="small">
        {{ $inter->subjects->pluck('name')->implode(', ') }}
    </p>

@else

    <p class="small">No subjects assigned.</p>

@endif

    </div>

@endforeach

    </div>

    <section class="alt-bg">
    <div class="container">
      <hr>
      <div class="section-head text-center" style="margin-left:auto;margin-right:auto;">
        <div class="section-eyebrow text-center">Degree Associate Programs</div>
        <!-- <h2>2-Year &amp; 4-Year Degree Programs</h2> -->
         <h2>2-Year Programs</h2>
      </div>
      <div class="grid grid-3">

        @foreach($associates as $associate)

    <div class="card">

        <h3>{{ $associate->name }}</h3>

        @if($associate->subjects->count())

    <p class="small">
        {{ $associate->subjects->pluck('name')->implode(', ') }}
    </p>

@else

    <p class="small">No subjects assigned.</p>

@endif

    </div>

@endforeach

    </div>
  
    </div>
  </section>

</div>



@endsection
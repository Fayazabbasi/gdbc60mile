@extends('frontend.layouts.app')

@section('title', 'Fee Structure')

@push('styles')
<style>
/* =========================================
   Fee Structure Page
========================================= */

<style>
/* =========================================
   Fee Structure Page
========================================= */

.programs-page {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    box-sizing: border-box;
}

/* =========================================
   Section Heading
========================================= */

.programs-page .section-head {
    margin-bottom: 30px;
}

.programs-page .section-eyebrow {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
}

.programs-page h1 {
    font-size: 36px;
    line-height: 1.25;
    margin: 0 0 10px;
}

.programs-page h2 {
    font-size: 26px;
    line-height: 1.35;
    margin: 0;
}

/* =========================================
   Fee Sections
========================================= */

.fee-section {
    margin-bottom: 50px;
}

.alt-bg {
    width: 100%;
    padding: 20px 0 40px;
}

.alt-bg .section-head {
    margin-bottom: 30px;
}

.alt-bg hr {
    margin: 0 0 35px;
}

/* =========================================
   Responsive Table Wrapper
========================================= */

.table-wrap {
    width: 100%;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
    margin-bottom: 10px;
}

/* =========================================
   Tables
========================================= */

.fee-table {
    width: 100%;
    min-width: 650px;
    border-collapse: collapse;
    background: #fff;
}

.fee-table th,
.fee-table td {
    padding: 15px 18px;
    border: 1px solid #ddd;
    text-align: left;
}

.fee-table th {
    font-weight: 600;
    white-space: nowrap;
}

.fee-table td {
    vertical-align: middle;
}

.fee-table thead tr {
    background-color: #198754;
    color: #fff;
}

.fee-table tbody tr:hover {
    background-color: #f8f9fa;
}

/* =========================================
   Scrollbar
========================================= */

.table-wrap::-webkit-scrollbar {
    height: 7px;
}

.table-wrap::-webkit-scrollbar-thumb {
    background: #198754;
    border-radius: 10px;
}

.table-wrap::-webkit-scrollbar-track {
    background: #eee;
}

/* =========================================
   Info Panels
========================================= */

.programs-page .grid-2 {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 25px;
}

.programs-page .info-panel {
    width: 100%;
    padding: 25px;
    box-sizing: border-box;
    border-radius: 10px;
    background: #f8f9fa;
}

.programs-page .info-panel h4 {
    margin: 0 0 12px;
    font-size: 20px;
}

.programs-page .info-panel p {
    margin: 0;
    line-height: 1.7;
}

/* =========================================
   Tablet
========================================= */

@media (max-width: 991px) {

    .programs-page {
        padding: 35px 18px;
    }

    .programs-page h1 {
        font-size: 32px;
    }

    .programs-page h2 {
        font-size: 23px;
    }

    .fee-table {
        min-width: 620px;
    }

    .fee-table th,
    .fee-table td {
        padding: 13px 15px;
    }

    .programs-page .grid-2 {
        gap: 20px;
    }
}

/* =========================================
   Mobile
========================================= */

@media (max-width: 767px) {

    .programs-page {
        padding: 25px 15px;
    }

    .programs-page .section-head {
        margin-bottom: 22px;
    }

    .programs-page h1 {
        font-size: 28px;
    }

    .programs-page h2 {
        font-size: 20px;
    }

    .programs-page .section-eyebrow {
        font-size: 12px;
    }

    .fee-section {
        margin-bottom: 35px;
    }

    .alt-bg {
        padding: 15px 0 30px;
    }

    .alt-bg hr {
        margin-bottom: 25px;
    }

    /*
     * Keep table readable.
     * User can swipe horizontally.
     */
    .fee-table {
        min-width: 600px;
    }

    .fee-table th,
    .fee-table td {
        padding: 12px;
        font-size: 14px}
}
</style>
@endpush


@section('content')

<div class="container programs-page">

    {{-- ==============================
         Intermediate Programs
    =============================== --}}

    <section class="fee-section">

        <div class="section-head">
            <div class="section-eyebrow">
                Intermediate Programs
            </div>

            <h1>Our Programs</h1>

            <h2>
                Part I &amp; Part II Fee Schedule
            </h2>
        </div>

        <div class="table-wrap">

            <table class="fee-table">

                <thead>
                    <tr>
                        <th>Head</th>
                        <th>Part I (Admission)</th>
                        <th>Part II (Renewal)</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Tuition Fee (per annum)</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>Admission / Registration Fee</td>
                        <td>[Rs. —]</td>
                        <td>—</td>
                    </tr>

                    <tr>
                        <td>Library Fee</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>Science Laboratory Fee</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>Sports &amp; Co-curricular Fee</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>College Fund</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>


    {{-- ==============================
         Degree Programs
    =============================== --}}

    <section class="alt-bg">

        <hr>

        <div class="section-head text-center">

            <div class="section-eyebrow">
                Degree Programs
            </div>

            <h2>
                Part I &amp; Part II Fee Schedule
            </h2>

        </div>

        <div class="table-wrap">

            <table class="fee-table">

                <thead>
                    <tr>
                        <th>Head</th>
                        <th>Part I (Admission)</th>
                        <th>Part II (Renewal)</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Tuition Fee (per annum)</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>Admission / Registration Fee</td>
                        <td>[Rs. —]</td>
                        <td>—</td>
                    </tr>

                    <tr>
                        <td>Examination Fee</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>Library &amp; Laboratory Fee</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                    <tr>
                        <td>College Fund</td>
                        <td>[Rs. —]</td>
                        <td>[Rs. —]</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>

    <section>
    <div class="container">
      <div class="grid grid-2">
        <div class="info-panel">
          <h4>How to Pay</h4>
          <p class="small">Fees are deposited via the designated bank challan at United Bank Limited (UBL), Tharushah Branch and the paid challan copy is submitted to the college accounts office to confirm enrolment.</p>
        </div>
        <div class="info-panel">
          <h4>Fee Concessions</h4>
          <p class="small">Fee waivers and concessions may be available for students under government scholarship schemes and for children of college/education-department employees, subject to the prevailing Sindh Government policy. Contact the accounts office for eligibility.</p>
        </div>
      </div>
    </div>
  </section>

</div>

@endsection
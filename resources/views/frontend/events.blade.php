
@extends('frontend.layouts.app')

@section('title', 'Events')

@section('content')


<!-- Page Title -->
<div class="page-title">

    <div class="heading">

        <div class="container">

            <div class="row d-flex justify-content-center text-center">

                <div class="col-lg-8">

                    <h1 class="heading-title">
                        Events
                    </h1>

                    <p class="mb-0">
                        Stay updated with the latest events, activities,
                        workshops, seminars and programs at our college.
                    </p>

                </div>

            </div>

        </div>

    </div>


    <nav class="breadcrumbs">

        <div class="container">

            <ol>

                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="current">
                    Events
                </li>

            </ol>

        </div>

    </nav>

</div>
<!-- End Page Title -->



<!-- Events 2 Section -->
<section id="events-2" class="events-2 section">

    <div class="container">

        <div class="row g-4">


            <!-- ================================= -->
            <!-- EVENTS LIST -->
            <!-- ================================= -->

            <div class="col-lg-8">

                <div class="events-list">


                    @forelse($events as $event)

                        <!-- Event Item -->
                        <div
                            class="event-item"
                            id="event-{{ $event->event_date->format('Y-m-d') }}"
                        >


                            <!-- Event Date -->
                            <div class="event-date">

                                <span class="day">
                                    {{ $event->event_date->format('d') }}
                                </span>

                                <span class="month">
                                    {{ strtoupper($event->event_date->format('M')) }}
                                </span>

                            </div>


                            <!-- Event Content -->
                            <div class="event-content">


                                <!-- Title -->
                                <h3>
                                    {{ $event->title }}
                                </h3>


                                <!-- Event Meta -->
                                <div class="event-meta">


                                    {{-- Time --}}
                                    @if($event->start_time || $event->end_time)

                                        <p>

                                            <i class="bi bi-clock"></i>

                                            @if($event->start_time)

                                                {{ \Carbon\Carbon::parse($event->start_time)->format('h:i A') }}

                                            @endif


                                            @if($event->start_time && $event->end_time)

                                                -

                                            @endif


                                            @if($event->end_time)

                                                {{ \Carbon\Carbon::parse($event->end_time)->format('h:i A') }}

                                            @endif

                                        </p>

                                    @endif


                                    {{-- Location --}}
                                    @if($event->location)

                                        <p>

                                            <i class="bi bi-geo-alt"></i>

                                            {{ $event->location }}

                                        </p>

                                    @endif


                                </div>


                                <!-- Description -->
                                @if($event->description)

                                    <p>
                                        {{ Str::limit($event->description, 220) }}
                                    </p>

                                @endif


                                <!-- Learn More -->
                                <a
                                    href="#"
                                    class="btn-event"
                                >

                                    Learn More

                                    <i class="bi bi-arrow-right"></i>

                                </a>


                            </div>

                        </div>
                        <!-- End Event Item -->


                    @empty


                        <!-- No Events -->
                        <div class="alert alert-info">

                            <i class="bi bi-info-circle me-2"></i>

                            No events available at the moment.

                        </div>


                    @endforelse


                </div>


                <!-- ================================= -->
                <!-- PAGINATION -->
                <!-- ================================= -->

                @if(method_exists($events, 'links'))

                    <div class="pagination-wrapper">

                        {{ $events->links() }}

                    </div>

                @endif


            </div>
            <!-- End Events List -->



            <!-- ================================= -->
            <!-- SIDEBAR -->
            <!-- ================================= -->

            <div class="col-lg-4">

                <div class="sidebar">


                    <!-- ================================= -->
                    <!-- DYNAMIC CALENDAR -->
                    <!-- ================================= -->

                    <div class="sidebar-item">

                        <h3 class="sidebar-title">
                            Upcoming Events
                        </h3>


                        @php

                            /*
                            |--------------------------------------------------------------------------
                            | Current Month
                            |--------------------------------------------------------------------------
                            */

                            $currentMonth = now()->startOfMonth();


                            /*
                            |--------------------------------------------------------------------------
                            | Calendar Start
                            |--------------------------------------------------------------------------
                            |
                            | Start from Sunday before/at beginning of month
                            |
                            */

                            $calendarStart = $currentMonth
                                ->copy()
                                ->startOfWeek(\Carbon\Carbon::SUNDAY);


                            /*
                            |--------------------------------------------------------------------------
                            | Calendar End
                            |--------------------------------------------------------------------------
                            */

                            $calendarEnd = $currentMonth
                                ->copy()
                                ->endOfMonth()
                                ->endOfWeek(\Carbon\Carbon::SATURDAY);


                            /*
                            |--------------------------------------------------------------------------
                            | Group Events By Date
                            |--------------------------------------------------------------------------
                            */

                            $eventDates = $events->groupBy(function ($event) {

                                return $event->event_date->format('Y-m-d');

                            });

                        @endphp


                        <!-- Calendar -->
                        <div class="event-calendar">


                            <!-- Calendar Header -->
                            <div class="calendar-header">

                                <h4>
                                    {{ $currentMonth->format('F Y') }}
                                </h4>

                            </div>


                            <!-- Calendar Body -->
                            <div class="calendar-body">


                                <!-- Weekdays -->
                                <div class="weekdays">

                                    <div>Su</div>
                                    <div>Mo</div>
                                    <div>Tu</div>
                                    <div>We</div>
                                    <div>Th</div>
                                    <div>Fr</div>
                                    <div>Sa</div>

                                </div>


                                <!-- Days -->
                                <div class="days">


                                    @while($calendarStart <= $calendarEnd)


                                        @php

                                            $dateKey =
                                                $calendarStart->format('Y-m-d');


                                            /*
                                            |--------------------------------------------------------------------------
                                            | Check Current Month
                                            |--------------------------------------------------------------------------
                                            */

                                            $isCurrentMonth =
                                                $calendarStart->month ==
                                                $currentMonth->month;


                                            /*
                                            |--------------------------------------------------------------------------
                                            | Check Event
                                            |--------------------------------------------------------------------------
                                            */

                                            $hasEvent =
                                                isset($eventDates[$dateKey]);


                                            /*
                                            |--------------------------------------------------------------------------
                                            | Check Today
                                            |--------------------------------------------------------------------------
                                            */

                                            $isToday =
                                                $calendarStart->isToday();

                                        @endphp


                                        <div
                                            class="day
                                                {{ !$isCurrentMonth ? 'other-month' : '' }}
                                                {{ $hasEvent ? 'has-event' : '' }}
                                                {{ $isToday ? 'today' : '' }}"
                                        >


                                            @if($hasEvent)


                                                <!-- Event Date -->
                                                <a
                                                    href="#event-{{ $dateKey }}"
                                                    title="@foreach($eventDates[$dateKey] as $calendarEvent){{ $calendarEvent->title }}@if(!$loop->last), @endif @endforeach"
                                                >

                                                    {{ $calendarStart->day }}

                                                </a>


                                            @else


                                                {{ $calendarStart->day }}


                                            @endif


                                        </div>


                                        @php

                                            $calendarStart->addDay();

                                        @endphp


                                    @endwhile


                                </div>

                            </div>

                        </div>
                        <!-- End Calendar -->


                    </div>
                    <!-- End Calendar Sidebar -->



                    <!-- ================================= -->
                    <!-- FEATURED EVENT -->
                    <!-- ================================= -->

                    @php

                        /*
                        |--------------------------------------------------------------------------
                        | Get Next Upcoming Event
                        |--------------------------------------------------------------------------
                        */

                        $featuredEvent = $events
                            ->filter(function ($event) {

                                return $event->event_date
                                    ->gte(\Carbon\Carbon::today());

                            })
                            ->sortBy('event_date')
                            ->first();

                    @endphp


                    @if($featuredEvent)


                        <div class="sidebar-item featured-event">


                            <h3 class="sidebar-title">
                                Featured Event
                            </h3>


                            <div class="featured-event-content">


                                <!-- Event Icon / Image -->
                                <div class="mb-3">

                                    <i
                                        class="bi bi-calendar-event"
                                        style="font-size: 45px;"
                                    ></i>

                                </div>


                                <!-- Event Title -->
                                <h4>
                                    {{ $featuredEvent->title }}
                                </h4>


                                <!-- Date -->
                                <p>

                                    <i class="bi bi-calendar-event"></i>

                                    {{ $featuredEvent->event_date->format('d F Y') }}

                                </p>


                                <!-- Time -->
                                @if(
                                    $featuredEvent->start_time ||
                                    $featuredEvent->end_time
                                )

                                    <p>

                                        <i class="bi bi-clock"></i>

                                        @if($featuredEvent->start_time)

                                            {{ \Carbon\Carbon::parse($featuredEvent->start_time)->format('h:i A') }}

                                        @endif


                                        @if(
                                            $featuredEvent->start_time &&
                                            $featuredEvent->end_time
                                        )

                                            -

                                        @endif


                                        @if($featuredEvent->end_time)

                                            {{ \Carbon\Carbon::parse($featuredEvent->end_time)->format('h:i A') }}

                                        @endif

                                    </p>

                                @endif


                                <!-- Location -->
                                @if($featuredEvent->location)

                                    <p>

                                        <i class="bi bi-geo-alt"></i>

                                        {{ $featuredEvent->location }}

                                    </p>

                                @endif


                                <!-- Description -->
                                @if($featuredEvent->description)

                                    <p>

                                        {{ Str::limit(
                                            $featuredEvent->description,
                                            150
                                        ) }}

                                    </p>

                                @endif


                                <!-- Button -->
                                <a
                                    href="#event-{{ $featuredEvent->event_date->format('Y-m-d') }}"
                                    class="btn-register"
                                >

                                    View Event

                                </a>


                            </div>

                        </div>


                    @endif
                    <!-- End Featured Event -->



                    <!-- ================================= -->
                    <!-- EVENT CATEGORIES -->
                    <!-- ================================= -->

                    <div class="sidebar-item">


                        <h3 class="sidebar-title">
                            Event Categories
                        </h3>


                        <div class="categories">


                            <ul>


                                @php

                                    $categories = $events
                                        ->filter(function ($event) {

                                            return !empty($event->category);

                                        })
                                        ->groupBy('category');

                                @endphp


                                @forelse($categories as $category => $categoryEvents)


                                    <li>

                                        <a href="#">

                                            {{ $category }}

                                            <span>
                                                ({{ $categoryEvents->count() }})
                                            </span>

                                        </a>

                                    </li>


                                @empty


                                    <li>

                                        <a href="#">
                                            No categories available.
                                        </a>

                                    </li>


                                @endforelse


                            </ul>


                        </div>

                    </div>
                    <!-- End Event Categories -->


                </div>

            </div>
            <!-- End Sidebar -->


        </div>

    </div>

</section>
<!-- /Events 2 Section -->


@endsection




@push('styles')
<style>
    /* Event dates */
    .event-calendar .days .day.has-event {
        background-color: green !important;
        color: white !important;
        border-radius: 50%;
        font-weight: 600;
    }

    /* Event date link */
    .event-calendar .days .day.has-event a {
        color: white !important;
        text-decoration: none;
    }

    /* Hover effect */
    .event-calendar .days .day.has-event:hover {
        background-color: #006400 !important;
    }
</style>
@endpush


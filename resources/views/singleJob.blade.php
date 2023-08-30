@extends('components.layout')

@section('title', 'Single Job')

@section('content')
<div class="fluid-container bg-white">
    <div class="container" style="padding-top: 1%;padding-bottom: 1%;">
        <div class="row d-flex flex-column">
            <div class="col mb-2">
                <a href="/" style="
                color:#555555; 
                text-decoration: none; 
                font-family: 'Raleway', sans-serif;
                font-size: 14px
                ">
                    < Back to Job Board </a>
            </div>
            <div class="col" style="
                color:#555555; 
                font-weight: bolder;
                text-decoration: none; 
                font-family: 'Raleway', sans-serif;
                font-size: 30px
            ">
                {{$job->job_title}}
            </div>
        </div>
    </div>
</div>
<div class="fluid-container bg-white">
    <div class="container" style="padding-top: 1%;padding-bottom: 1%;">
        <div class="row d-flex flex-column">
            <div class="col">
                <div class="row">
                    <div class="col-auto d-flex align-items-center">
                        <img src="/assets/shapes/Rectangle.png" alt="profile">
                    </div>
                    <div class="col">
                        <div class="col" style="color: #E998A2; font-weight: bold; font-size:26px">
                            {{$job->company_name}}
                        </div>
                        <div class="col" style="font-weight: bold; font-size:18px">
                            Company tagline
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end">
                        @php
                        $values = explode(';', $job->perks);
                        $imgSrc = '';
                        $altText = '';
                        @endphp

                        @foreach ($values as $value)
                        @php
                        if (trim($value) == "remotefriendly") {
                        $imgSrc = "/assets/perks/Perk Remote Friendly.png";
                        $altText = "Remote Friendly";
                        } elseif (trim($value) == "paidparentalleave") {
                        $imgSrc = "/assets/perks/Perk Parental Leave.png";
                        $altText = "Paid Parental Leave";
                        } elseif (trim($value) == "unlimitedvacation") {
                        $imgSrc = "/assets/perks/Perk Unlimited Vacation.png";
                        $altText = "Unlimited Vacation";
                        }elseif (trim($value) == "latinxintech") {
                        $imgSrc = "/assets/perks/Perk Latinx in Tech.png";
                        $altText = "latinxintech";
                        }elseif (trim($value) == "womenintecherg") {
                        $imgSrc = "/assets/perks/Perk Women in Tech.png";
                        $altText = "womenintecherg";
                        }elseif (trim($value) == "lgbtqierg-2") {
                        $imgSrc = "/assets/perks/Perk LGTBIQ.png";
                        $altText = "lgbtqierg-2";
                        }
                        @endphp
                        @if (!empty($imgSrc))
                        <img src="{{ $imgSrc }}" alt="{{ $altText }}" style="width: 10%; margin-right:2%">
                        @endif

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-3" style="font-size: 14px;">
                    <div class="col-auto">
                        <img src="/assets/icons/Clock.png" alt="clock">
                        {{$job->job_type}}
                    </div>
                    <div class="col-auto">
                        <img src="/assets/icons/Location.png" alt="location">
                        @php
                        $values = explode(';', $job->location_full);
                        @endphp
                        @foreach ($values as $value)
                        {{trim($value)}},
                        @endforeach
                    </div>
                    <div class="col-auto">
                        <img src="/assets/icons/Flower.png" alt="Flower">
                        {{$job->seniority}}
                    </div>
                    <div class="col-auto">
                        <img src="/assets/icons/Calendar.png" alt="Calendar">
                        {{$job->fecha}}
                    </div>
                </div>
            </div>
            <div class="col mt-3" style="padding-bottom: 2%;">
                <button type="button" class="btn" style="
                font-weight: bold; 
                color: white;
                background-color: #EA99A3; 
                padding-left:3%; 
                padding-right:3%
                ">
                    Apply
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex flex-column bg-white">
    h
</div>
@endsection
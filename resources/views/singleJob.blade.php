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
<div class="container d-flex flex-column mt-5">
    <div class="row">
        <div class="col-9 bg-white p-4">
            <h2 style="font-weight: bold; font-size:26px;">About the job</h2>
            <p class="mt-3" style="font-weight: regular; font-size:14px">
                As the first all-in-one virtual venue for live online events, Hopin brings people together in
                a highly interactive and engaging online experience that feels just like an in-person event, only
                without the barriers. Whether it’s a 50-person meetup, or a 50,000-person conference—any type of
                event organizer can host a Hopin. As the first all-in-one virtual venue for live online events,
                Hopin brings people together in a highly interactive and engaging online experience that feels just like
                an in-person event, only without the barriers. Whether it’s a 50-person meetup, or a 50,000-person conference—any
                type of event organizer can host a Hopin.
            </p>
            <p style="font-weight: regular; font-size:14px">
                As the first all-in-one virtual venue for live online events, Hopin brings people together in a As the first
                all-in-one virtual venue for live online events, Hopin brings people together lorem ipsum dolor sit amet...
            </p>
            <p class="d-inline-flex gap-1">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: #E998A2; font-size:14px; background-color:transparent; border:none">
                    Read more
                    <img src="/assets/shapes/Polygon.png" alt="pol">
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body" style="font-weight: regular; font-size:14px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur lorem ut nibh cursus luctus. Pellentesque sit amet congue augue, eget faucibus tellus.
                    Maecenas augue lorem, dictum non mauris et, sagittis tempor nulla.
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col-auto d-flex flex-column" style="border: 3px #E26B6B solid;">
                <div class="p-2"><img src="/assets/icons/alert.png" alt="alert"></div>
                <div class="p-2" style="font-weight: bold; font-size:14px;">
                    This may be a contingent job offer. For more information on Contingency Jobs, please read this article:
                </div>
                <div class="p-2" style="font-weight: bold; font-size:14px;color:#EA99A3">
                    “Contingency Jobs: Pros and Cons. All you Need to Know if They Suit Your Professional Goals.”
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex flex-column mt-3 bg-white">
    <div class="row">
        <div class="col-7 p-4">
            <h2 style="font-weight: bold; font-size:26px;">About the company</h2>
            <p class="mt-3" style="font-weight: regular; font-size:14px">
                As the first all-in-one virtual venue for live online events, Hopin brings people together in
                a highly interactive and engaging online experience that feels just like an in-person event, only
                without the barriers. Whether it’s a 50-person meetup, or a 50,000-person conference—any type of
                event organizer can host a Hopin. As the first all-in-one virtual venue for live online events,
                Hopin brings people together in a highly interactive and engaging online experience that feels just like
                an in-person event, only without the barriers. Whether it’s a 50-person meetup, or a 50,000-person conference—any
                type of event organizer can host a Hopin.
            </p>
            <p style="font-weight: regular; font-size:14px">
                As the first all-in-one virtual venue for live online events, Hopin brings people together in a As the first
                all-in-one virtual venue for live online events, Hopin brings people together lorem ipsum dolor sit amet...
            </p>
            <button type="button" class="btn" style="
                font-weight: bold; 
                color: #EA99A3;
                background-color: transparent; 
                border:3px #EA99A3 solid; 
                padding-left:3%; 
                padding-right:3%
                ">
                See Company Profile
            </button>
        </div>
        <div class="col-auto d-flex justify-content-center align-items-center">
            <img src="/assets/shapes/Image placeholder.png" alt="alert">
        </div>
    </div>
</div>
<!-- TABLE -->
<div class="container mt-3">
    <div class="bg-white p-4" style="font-weight: bold; font-size:26px;">Similar Jobs</div>
    <table class="table bg-white">
        <tbody>
            @foreach($relatedJobs as $relatedJob)
            <tr>
                <th scope="row" style="width: 1%;" class="p-4"><img src="/assets/shapes/Rectangle.png" alt="profile"></th>
                <td scope="row" class="p-4" style="width: 35%;">
                    <div class="col fw-bold">
                        <a href="/singleJob/{{$relatedJob->id}}" style="color: #E998A2; text-decoration:none">
                            {{$relatedJob->job_title}}
                        </a>
                    </div>
                    <div class="col">
                        {{$relatedJob->company_name}}
                    </div>
                    <div class="col" style="font-size: 80%;">
                        {{$relatedJob->fecha}}
                    </div>
                </td>
                <td scope="row" class="p-4" style="width: 20%;">
                    <div class="d-flex flex-column">
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
                    </div>
                </td>
                <td scope="row" class="p-4">
                    @php
                    $values = explode(';', $relatedJob->perks);
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
                    <img src="{{ $imgSrc }}" alt="{{ $altText }}" style="width: 15%; margin-right:2%">
                    @endif

                    @endforeach

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end mb-4">
        {{ $relatedJobs->links() }}
    </div>
</div>
@endsection
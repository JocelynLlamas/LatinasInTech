@extends('components.layout')

@section('title', 'Jobs board')

@section('content')
<div class="container d-flex flex-column">
    <!-- SHEARCH BY FILTERS -->
    <div class="row">
        <div class="col">
            <div class="col mt-5 mb-2">
                <div class="row mb-3">
                    <div class="col" style="font-weight: bold">
                        Search by filters
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="mb-3">
                            <form action="{{ route('filter.area') }}" method="get">
                                <input type="search" name="functional_area" class="form-control" id="functional_area" aria-describedby="functional_area" placeholder="{{ request('functional_area') ? request('functional_area') : 'Functional Area' }}">
                            </form>
                        </div>
                    </div>
                    <div class="col-auto">
                        <form action="{{ route('filter.seniority') }}" method="get">
                            <div class="mb-3">
                                <input type="search" name="seniority" class="form-control" id="seniority" aria-describedby="seniority" placeholder="{{ request('seniority') ? request('seniority') : 'Seniority' }}">
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <form action="{{ route('filter.perks') }}" method="get">
                            <div class="mb-3">
                                <input type="search" name="perks" class="form-control" id="perks" aria-describedby="perks" placeholder="{{ request('perks') ? request('perks') : 'Perks' }}">
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <form action="{{ route('filter.location') }}" method="get">
                            <div class="mb-3">
                                <input type="search" name="location_full" class="form-control" id="location_full" aria-describedby="location_full" placeholder="{{ request('location_full') ? request('location_full') : 'Location' }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- SHEARCH BY KEYWORDS -->
        <div class="row mb-5">
            <div class="col">
                <div class="row mb-3">
                    <div class="col" style="font-weight: bold">
                        Search by keywords
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="{{ route('filter.keyword') }}" method="get" style="width: 90%;">
                            <input type="search" name="keyword" class="form-control" id="keyword" aria-describedby="keyword" placeholder="{{ request('keyword') ? request('keyword') : 'Functional Keywords' }}">
                        </form>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        order by:
                    </div>
                    <!-- PONER UN TERNARIO Y UN METODO ON CLICK -->
                    <!-- <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn btn-primary" style="
                        color: #EA99A3; 
                        font-weight: bold; 
                        border-radius: 0px;
                        border: 1px solid #EA99A3;
                        background-color: rgba(234, 153, 163, 0.3)
                        ">
                            Recent
                        </button>
                    </div> -->
                    <!-- <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn btn-primary" style="
                        color: #A3A3A3; 
                        border-radius: 0px;
                        border: 1px solid #A3A3A3;
                        background-color: white
                        ">
                            Companies A-Z
                        </button>
                    </div> -->

                    <div class="col-auto d-flex align-items-center">
                        <a href="{{ route('jobs.orderBy', ['order' => 'recent']) }}" class="btn btn-primary" style="
                        color: #EA99A3; 
                        font-weight: bold; 
                        border-radius: 0px;
                        border: 1px solid #EA99A3;
                        background-color: rgba(234, 153, 163, 0.3)
                        ">Recent</a>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <a href="{{ route('jobs.orderBy', ['order' => 'az']) }}" class="btn btn-primary" style="
                        color: #A3A3A3; 
                        border-radius: 0px;
                        border: 1px solid #A3A3A3;
                        background-color: white
                        ">Companies A-Z</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- TABLE -->
        <table class="table bg-white">
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <th scope="row" style="width: 1%;" class="p-4"><img src="/assets/shapes/Rectangle.png" alt="profile"></th>
                    <td scope="row" class="p-4" style="width: 35%;">
                        <div class="col fw-bold">
                            <a href="/singleJob/{{$job->id}}" style="color: #E998A2; text-decoration:none">
                                {{$job->job_title}}
                            </a>
                        </div>
                        <div class="col">
                            {{$job->company_name}}
                        </div>
                        <div class="col" style="font-size: 80%;">
                            {{$job->fecha}}
                        </div>
                    </td>
                    <td scope="row" class="p-4" style="width: 20%;">
                        <div class="d-flex align-items-center">
                            <img src="/assets/shapes/profilePhoto.png" alt="profile" style="width: 8%; margin-right:2%">
                            {{$job->job_type}}
                        </div>
                    </td>
                    <td scope="row" class="p-4">
                        @php
                        $values = explode(';', $job->perks);
                        $imgSrc = '';
                        $altText = '';
                        $registrosMostrados = 0;
                        @endphp

                        @foreach ($values as $value)
                        @php
                        $registrosMostrados++;
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
        <div class="d-flex justify-content-end flex-column mb-4">
            <div>{{ $jobs->links() }}</div>
            <p>Mostrando {{ $registrosMostrados }} de {{ $jobs->total() }} registros</p>
        </div>
    </div>
</div>
@endsection
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
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputArea" aria-describedby="areaHelp" placeholder="Functional Area">
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputSeniority" aria-describedby="seniorityHelp" placeholder="Seniority">
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputPerks" aria-describedby="perksHelp" placeholder="Perks">
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputLocation" aria-describedby="locationHelp" placeholder="Location">
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
                        <form class="" style="width: 90%;">
                            <input type="text" class="form-control" id="exampleInputKeywords" aria-describedby="KeywordsHelp" placeholder="Functional Keywords">
                        </form>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        order by:
                    </div>
                    <!-- PONER UN TERNARIO Y UN METODO ON CLICK -->
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn btn-primary" style="
                        color: #EA99A3; 
                        font-weight: bold; 
                        border-radius: 0px;
                        border: 1px solid #EA99A3;
                        background-color: rgba(234, 153, 163, 0.3)
                        ">
                            Recent
                        </button>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn btn-primary" style="
                        color: #A3A3A3; 
                        border-radius: 0px;
                        border: 1px solid #A3A3A3;
                        background-color: white
                        ">
                            Companies A-Z
                        </button>
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
                        @endphp

                        @foreach ($values as $key => $value)
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
            {{ $jobs->links() }}
        </div>
    </div>
</div>
@endsection
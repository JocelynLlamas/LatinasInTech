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
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <a href="{{ route('singleJob') }}">
                            <p>link</p>
                        </a>
                    </td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
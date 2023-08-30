@extends('components.layout')

@section('title', 'Página de Inicio')

@section('content')
<div class="container d-flex flex-column">

    <div class="row">
        <div class="col">
            <div class="col">
                <div class="row">
                    <div class="col" style="font-weight: bold">
                        Search by filters
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputArea" aria-describedby="areaHelp" placeholder="Functional Area">
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputSeniority" aria-describedby="seniorityHelp" placeholder="Seniority">
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputPerks" aria-describedby="perksHelp" placeholder="Perks">
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputLocation" aria-describedby="locationHelp" placeholder="Location">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col" style="font-weight: bold">
                        Search by keywords
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputKeywords" aria-describedby="KeywordsHelp" placeholder="Functional Keywords">
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        order by:
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-primary">Recent</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-primary">Companies A-Z</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
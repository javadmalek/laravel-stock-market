@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Market</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-2" style="padding-top: 16px">
                                Market Title:
                            </div>
                            <div class="col-lg-4">
                                <strong> {{ $market->title }}</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2" style="padding-top: 16px">
                                Description:
                            </div>
                            <div class="col-lg-4">
                                <strong>{{ $market->description }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-xl-12">
                    <div class="m-portlet m-portlet--mobile ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        {{ $market->title }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin: Datatable -->
                            <div class="m-section">
                                <span class="m-section__sub">The list of all of your stocks: </span>
                                <div class="m-section__content">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Company</th>
                                            <th>Market</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Last Update</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($market->stocks as $key => $stock)
                                            <tr>
                                                <th scope="row">{{ $stock->id }}</th>
                                                <td>{{ $stock->company->title }}</td>
                                                <td>{{ $stock->market->title }}</td>
                                                <td>{{ $stock->type }}</td>
                                                <td> <span class=" bg-info text-white pull-right">{{ number_format($stock->price) }} €</span></td>
                                                <td>{{ $stock->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

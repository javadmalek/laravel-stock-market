@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Company</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Company Title:<strong> {{ $company->title }}</strong>
                            </div>
                            <div class="col-lg-6" style="padding-top: 16px">
                                Office Address:<strong>{{ $company->office_address }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Office Telephone:<strong>{{ $company->office_tele }}</strong>
                            </div>
                            <div class="col-lg-6" style="padding-top: 16px">
                                Web Url:<strong>{{ $company->web_url }}</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6" style="padding-top: 16px">
                                Description:<strong>{{ $company->description }}</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>{{ $company->title }}</h3>Preferred Stocks</div>
                    <div class="panel-body">
                        @foreach($company->stocksByPreferred as $key=> $stock)
                            <div class="row" style="padding: 8px">
                                <div class="col-8 col-sm-6">
                                    {{$stock->market->title}}
                                </div>
                                <div class="col-4 col-sm-6">
                                        <span class=" bg-info text-white pull-right">{{ number_format($stock->price) }}
                                            €</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h3>{{ $company->title }}</h3>Common Stocks</div>
                    <div class="panel-body">
                        @foreach($company->stocksByCommon as $key=> $stock)
                            <div class="row" style="padding: 8px">
                                <div class="col-8 col-sm-6">
                                    {{$stock->market->title}}
                                </div>
                                <div class="col-4 col-sm-6">
                                        <span class=" bg-info text-white pull-right">{{ number_format($stock->price) }}
                                            €</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading"><h3>{{ $company->title }}</h3>NaN Stocks</div>
                    <div class="panel-body">
                        @foreach($company->stocksByNaN as $key=> $stock)
                            <div class="row" style="padding: 8px">
                                <div class="col-8 col-sm-6">
                                    {{$stock->market->title}}
                                </div>
                                <div class="col-4 col-sm-6">
                                        <span class=" bg-info text-white pull-right">{{ number_format($stock->price) }}
                                            €</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

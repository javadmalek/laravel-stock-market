@extends('layouts.app')

@section('content')
    <div class="container">

        <!--Begin::Stocks-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    List of your Stocks
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
                                        <th>actions
                                            <a class="btn m-btn--square  btn-success pull-right"
                                               href="{{ URL::to('stocks/create') }}">New Stock</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($stocks as $key => $stock)
                                        <tr>
                                            <th scope="row">{{ $stock->id }}</th>
                                            <td>{{ $stock->company->title }}</td>
                                            <td>{{ $stock->market->title }}</td>
                                            <td>{{ $stock->type }}</td>
                                            <td>{{ number_format($stock->price) }} €</td>
                                            <td>{{ $stock->updated_at }}</td>
                                            <td>
                                                {{ Form::open(array('url' => 'stocks/' . $stock->id, 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', array('class' => 'btn m-btn--square  btn-danger',
                                                                         'onclick' => "return confirm('Are you sure you want to remove this stock?')")) }}
                                                {{ Form::close() }}

                                                <a class="btn m-btn--square  btn-info"
                                                   href="{{ URL::to('stocks/' . $stock->id) }}">View</a>
                                                <a class="btn m-btn--square  btn-info"
                                                   href="{{ URL::to('stocks/' . $stock->id . '/edit') }}">Edit</a>

                                            </td>
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
        <!--End::Stocks -->
    </div>
@endsection

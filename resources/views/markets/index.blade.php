@extends('layouts.app')

@section('content')
    <div class="container">

        <!--Begin::Markets-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    List of your Markets
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div class="m-section">
                            <span class="m-section__sub">The list of all of your markets: </span>
                            <div class="m-section__content">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>actions
                                            <a class="btn m-btn--square  btn-success pull-right"
                                               href="{{ URL::to('markets/create') }}">New Market</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($markets as $key => $market)
                                        <tr>
                                            <th scope="row">{{ $market->id }}</th>
                                            <td>{{ $market->title }}</td>
                                            <td>
                                                {{ Form::open(array('url' => 'markets/' . $market->id, 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', array('class' => 'btn m-btn--square  btn-danger',
                                                                         'onclick' => "return confirm('Are you sure you want to remove this market?')")) }}
                                                {{ Form::close() }}

                                                <a class="btn m-btn--square  btn-info"
                                                   href="{{ URL::to('markets' . $market->id) }}">View</a>
                                                <a class="btn m-btn--square  btn-info"
                                                   href="{{ URL::to('markets/' . $market->id . '/edit') }}">Edit</a>

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
        <!--End::Markets -->
    </div>
@endsection

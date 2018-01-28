@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        @foreach($markets as $key=> $market)

            <?php $stock = $market->stocks->find($market->stocksHighest()["id"]) ?>

            @if($stock)
                <div class="col-lg-4">
                    @if($stock["type"] === 'PREFERRED')
                        <div class="panel panel-primary">
                    @elseif($stock["type"] === 'COMMON')
                        <div class="panel panel-danger">
                    @else
                        <div class="panel panel-info">
                    @endif

                        <div class="panel-heading">
                            <h4>{{ $stock["company"]["title"]}}</h4>
                            <h4>{{ $stock["type"]}}</h4>
                            <h4>{{ number_format($stock["price"])}} €</h4>

                        </div>
                        <div class="panel-body">
                                <div class="row" style="padding: 8px">
                                    <div class="col-8 col-sm-8">
                                        {{ $market->title}}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
</div>
@endsection

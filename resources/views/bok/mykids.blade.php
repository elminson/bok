@extends('bok.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <a href="/mykids/add" class="btn btn-info px-4 align-self-center report-btn">Add new Kid</a>
                    <br>
                    <br>
                    @if(count($kids) > 0)

                        <div class="row">
                            @foreach($kids as $account)
                            <div class="col-lg-4">

                                <div class="card card-body">
                                <h4 class="card-title mt-0">{{ $account['name'] }}</h4>

                                        <h4 class="mt-0 header-title mb-3">Account Info</h4>
                                        <ul class="list-unstyled mb-0">
                                            <li class=""><i class="mdi mdi-calendar mr-2 text-success font-18"></i> <b> Type: </b> Kid Account </li>
                                            <li class=""><i class="mdi mdi-briefcase-download-outline mr-2 text-success font-18"></i> <b> Account number: </b> {{ $account->number}} </li>
                                            <li class=""><i class="mdi mdi-routes mr-2 text-success font-18"></i> <b> Balance: </b> @money($account->balance) </li>
                                            <li class=""><i class="mdi mdi-calendar mr-2 text-success font-18"></i> <b> Account Opened Date:</b> {{ date('d-M-y', strtotime($account->created_at)) }} </li>
                                        </ul>
                                    <a href="{{ route('frontend.auth.transfer') }}" class="btn btn-primary ">Transfer Money</a>
                                </div><!--end card-->
                            </div>
                            @endforeach

                        </div>
                    @endif
                </div>


            </div>
        </div> <!-- end col -->
    </div>

@endsection
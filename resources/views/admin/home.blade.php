@extends('layouts.admin')
@section('content')
    <div class="animated fadeIn">
        <div class="row">

          <!--<div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-reddit">
                    <i class="fa fa-file-text"> {{ trans('global.material') }} </i>

                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-1" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">{{$news}}</div>
                      <div class="text-uppercase text-muted small">NEWS</div>
                    </div>
                    <div>
                      <div class="text-value">{{$appro}}</div>
                      <div class="text-uppercase text-muted small">APPROFONDIMENTI</div>
                    </div>
                  </div>
                </div>
              </div> -->

               
            </div>
    </div>


        <div class="col-lg-12">
            <div class="jumbotrom d-flex justify-content-center">
               <img class="img-fluid" src="{{ asset('img/logo-header.png')}}">
           </div>
        </div>

@endsection
@section('scripts')
@parent

@endsection
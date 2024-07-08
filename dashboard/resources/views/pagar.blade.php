@extends('layouts.app')

@section('pageTitle', 'Contas á pagar')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

<div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Contas á pagar</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
        <meta name="_token" content="{{ csrf_token() }}">

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Contas pagas</p>
                                    <h2 id="pagarPagas" class="font-weight-bold">....</h2>
                                </div>
                                <div>
                                <figure class="avatar">
                                      <img src="{{ url('assets/media/image/user/contaReceber.png') }}">
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                <p id="mesAno" class="text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Contas pendentes</p>
                                    <h2 id="pagarPendentes" class="font-weight-bold">....</h2>
                                </div>
                                <div>
                                <figure class="avatar">
                                      <img src="{{ url('assets/media/image/user/contaPendente.png') }}">
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-danger d-inline-flex align-items-center mr-2">
                                <p id="updateFormasPagamento" class="text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Contas vencidas</p>
                                    <h2 id="pagarVencidas" class="font-weight-bold">....</h2>
                                </div>
                                <div>
                                <figure class="avatar">
                                      <img src="{{ url('assets/media/image/user/contaVencida.png') }}">
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                <p id="updateTopProdutos" class="text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex mb-2 mb-sm-0 justify-content-between">
                        <h6 class="card-title">Historico de contas</h6>
                    </div>
                    <div id="graficoContaPagar"></div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-12">
            <div class="card">

            </div>
        </div>
    </div>

    
@endsection

@section('script')

<script src="{{ url('/assets/js/examples/dashboard.js') }}"></script>

    <!-- Apex chart -->
<script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Dashboard scripts -->
   

    <!-- To use theme colors with Javascript -->
    <div class="colors">
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>


@endsection

@section('script')

@endsection

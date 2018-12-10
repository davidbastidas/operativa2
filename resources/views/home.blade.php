@extends('layouts.app')
<style>
    #map-dashboard { height: 350px; }
</style>
@section('content')
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <input id="fecha" class="form-control" type="date" name="fecha" required/>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-secondary" id="btnIndicador">
                                Buscar Fecha
                            </button>
                        </div>
                    </div>
                    <br>
                    <center><h2 class="card-title text-primary mb-5">Avance por Gestor</h2></center>
                    <div class="table-responsive" style="height: 300px;overflow-y: scroll;overflow-x: none;font-size: 12px;">
                        <table id="dash_tabla_gestores" style="width: 90% !important;margin: 10px;text-align: center;">
                            <thead>
                            <tr>
                                <th style="width: 25% !important;">
                                    Gestor
                                </th>
                                <th style="width: 20% !important;">
                                    Realiz.
                                </th>
                                <th style="width: 20% !important;">
                                    Pendi.
                                </th>
                                <th style="width: 25% !important;">
                                    Avance
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <center><h2 class="card-title text-primary mb-5">Avance Diario</h2></center>
                            <center>
                                <p class="mb-2">Total Resueltos</p>
                                <p id="contR" class="display-3 mb-5 font-weight-light">
                                    <span class="mdi mdi-thumb-up" style="color:#95de6b;"></span>
                                </p>
                            </center>
                            <center><p class="mb-2">Total Pendientes</p>
                                <p id="contP" class="display-3 mb-4 font-weight-light">
                                    <span class="mdi mdi-thumb-down" style="color:#35abde;"></span>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ultima ubicacion</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map-dashboard"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

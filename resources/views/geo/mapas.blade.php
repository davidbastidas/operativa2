@extends('layouts.app')
<style>
    #map-visitas {
        height: 500px;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mapa de visitas</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-control" id="gestor_id">
                                <option value="">[Gestor]</option>
                                @foreach ($usuarios as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <input id="fecha" class="form-control" type="date"/>
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-secondary" id="btnBuscarVisitas">
                                Buscar visitas
                            </button>
                        </div>
                    </div>
                    <br>
                    <p id="mensaje" class="card-description" style="display: none;">No se encontro puntos para las
                        visitas.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map-visitas"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.encabezado')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body {
            background-color: #e7e7e7;
        }

        .card-body {
            background-color: #f1f1f1;
        }

        .card-title {
            font-size: 2rem;
            text-align: center;
        }

        .card-text {
            font-size: 1.3rem;
        }

        .card-img {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 101%;
        }

        .card-img img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .card-text {
            font-size: 1.2rem
        }

        .card-title {
            font-size: 1.6rem;
            padding: 0rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .bton {
            background-color: #f12d49;
            font-size: 16px;
            padding: 0.5rem;
            padding-left: 0.8rem;
            padding-right: 0.8rem;
            border: none;
            border-radius: 0.25rem;
            text-decoration: none;
            margin-right: 1rem;
            cursor: pointer;
            display: block;
            margin: auto;
        }
        
        .bton:hover {
            background-color: #e82944;
        }
    </style>
</head>
<div class="row mb-2">
    <div class="col-md-8 mx-auto">
        <div class="row g-0 border card-body rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-600 position-relative">
        <strong class="d-inline-block mb-2 text-dark card-title">{{ $producto->nombre }}</strong>  
          <div class="col-md-8 p-4 d-flex flex-column position-static">
                <p class="card-text">Sobre el producto:</p>
                <p class="card-text">{{ $producto->descripcion }}</p>
                <p class="card-text">Precio: S/.{{ $producto->precio }}</p>
                <p class="card-text">Fecha de entrega: {{ \Carbon\Carbon::now()->addDays(30)->format('Y-m-d') }}</p>
                <div class="card-text d-flex align-items-center mt-auto">
                    <label for="cantidad" class="me-2">Cantidad:</label>
                    <input type="number" id="cantidad" class="form-control" style="width: 110px; font-size: 1.3rem;" min="1" value="1">
                    <button class="btn btn-primary ms-3 bton" style="font-size: 1.2rem;">Comprar ahora</button>
                </div>
            </div>
            <div class="col-md-4 d-none d-lg-block">
                <div class="card-img">
                    <img src="{{ asset('images/'.$producto->imagen) }}" alt="{{ $producto->nombre }}">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

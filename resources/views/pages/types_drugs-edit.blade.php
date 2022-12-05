@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Tipos de Medicamentos')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}">
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
@endsection

@section('content')
<h4>Tipos de medicamentos</h4>
<div class="card">
  <h5 class="card-header">Editar medicina</h5>
  <form action="{{ route('pages-types_drugs-update') }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$type->id}}">
        <div class="modal-body">
          <div class="row">
              <div class="col mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$type->name}}" placeholder="Ex. Pastilla">
          </div>
        </div>
          <div class="row g-2">
            <div class="col mb-0">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" id="description" name="description" class="form-control" value="{{$type->description}}" placeholder="Ex. Pastillas toma oral">
            </div>
         </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
            </div>
        </div>
        </form>
  
</div> 
@endsection
@extends('partials.template')

@section('title', 'Lista de profesores')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">

      <div class="col-6">
        <div class="d-flex my-3 justify-content-between align-items-baseline">
          <h2>Registrar nuevo profesor</h2>
          <a href="" class="btn btn-outline-primary">
            Regresar
            <i class="bi bi-backspace mx-2"></i>
          </a>
        </div>
        <hr>

        <!-- Formulario -->
        <form action="" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre del profesor</label>
            <input type="email" name="name" class="form-control" id="name" placeholder="Nombre">
            {{-- <div id="name" class="form-text text-danger">Well never share your email with anyone else.</div> --}}
          </div>

          <div class="group-input mb-3">
            <label for="">Universidad</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Universidad de guadalajara</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            {{-- <div id="nombre" class="form-text text-danger">Well never share your email with anyone else.</div> --}}
          </div>


          <div class="group-input mb-3">
            <label for="">Departamento</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Ciencias computacionales</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>


          <div class="group-input mb-3">
            <label for="">Campus  </label>
            <select class="form-select" aria-label="Default select example">
              <option selected>CUCEI</option>
              <option value="1">one</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <!-- Button send -->
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-send mx-1"></i>
              Registrar
            </button>
            <a href="" class="btn btn-outline-danger">
              Cancelar
            </a>
          </div>
        </form>


      </div>
    </div>
  </div>

@endsection

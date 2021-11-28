@extends('partials.template')

@section('title', 'Lista de profesores')

@section('content')

<div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="jumbotron-body d-flex justify-content-center align-items-center">
          <div class="col-12 border rounded-5">
            <div class="acercade rounded-5">
              <div class="row p-4">
                {{-- Profesor --}}

                {{-- Contenido --}}
                <h5 class="px-5">{{ $teacher->name }}</h5>
                <div class="row">
                  <div class="col-6 px-5">
                    <!-- Datos generales -->
                    <h6 class="text-secondary">Datos generales</h6>
                    <p class="text-secondary bold d-block mb-1">
                      <i class="bi bi-check-circle text-primary"></i>
                      <b>Universidad:</b> {{ $teacher->university->name }}
                    </p>
                    <p class="text-secondary bold d-block mb-1">
                      <i class="bi bi-check-circle text-primary"></i>
                      <b>Departamento:</b> {{ $teacher->department->name }}
                    </p>
                    <p class="text-secondary bold d-block mb-1">
                      <i class="bi bi-check-circle text-primary"></i>
                      <b>Campus:</b> {{ $teacher->center->name }}
                    </p>
                    <h6 class="text-secondary bold mt-4">Materias</h6>
                    @foreach ( $teacher->subjects as $subject)
                        <span class="badge rounded-pill bg-secondary">
                            {{ $subject->code }}
                        </span>
                    @endforeach
                  </div>



                  <!-- Promedio -->
                  <div class="col-6 px-5">
                    <h6 class="text-secondary bold">Promedio ( basado en {{ $alumnos }} evaluaciones )</h6>

                    <div class="d-flex justify-content-between">
                      <p class="text-secondary bold d-block mb-1">
                        <i class="bi bi-check-circle text-primary"></i>
                        Dominio del tema:
                      </p>
                      <h6>{{ round($dominio, 0) }}%</h6>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="text-secondary bold d-block mb-1">
                        <i class="bi bi-check-circle text-primary"></i>
                        Puntualidad:
                      </p>
                      <h6>{{ round($puntualidad, 0) }}%</h6>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="text-secondary bold d-block mb-1">
                        <i class="bi bi-check-circle text-primary"></i>
                        Promedio de alumnos:
                      </p>
                      <h6>90%</h6>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="text-secondary bold d-block mb-1">
                        <i class="bi bi-check-circle text-primary"></i>
                        Dificultad del curso:
                      </p>
                      <h6>{{ round($dificultad, 0) }}%</h6>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>























    <div class="container my-5">
        <div class="row ">
            <div class="col-6">
                <h3>Información del profesor</h3>
                <ul>
                    <li>{{ $teacher->id }}</li>
                    <li>{{ $teacher->name }}</li>
                    <li>{{ $teacher->university->name }}</li>
                    <li>{{ $teacher->department->name }}</li>
                    <li>{{ $teacher->center->name }}</li>
                    <li>Secciones:
                        @foreach ( $teacher->subjects as $subject)
                            <span class="badge rounded-pill bg-secondary">
                                {{ $subject->code }}
                            </span>
                        @endforeach
                    </li>
                </ul>

                <h3>Comentarios al profesor</h3>
                <ul>
                    @foreach ( $teacher->comments as $comment )
                    <div class="card mb-2">
                        <li><b>Usuario:</b>{{$comment->user->name}}</li>
                        <li><b>Comentario:</b>{{$comment->description}}</li>
                        <li><b>Asignatura:</b>{{$comment->subject->code}}</li>
                        <li><b>Fecha:</b>{{ date('d/m/y', strtotime($comment->created_at) ) }}</li>
                    </div>
                    @endforeach
                </ul>


            </div>
        </div>
    </div>

@endsection

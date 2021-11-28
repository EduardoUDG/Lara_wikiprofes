@extends('partials.template')

@section('title', 'Lista de profesores')

@section('content')

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

            <div class="col-6">
                <h3>Promedio</h3>
                <p><b>Dominio:</b> {{ round($dominio, 2) }}</p>
                <p><b>Puntualidad:</b> {{ round($puntualidad, 2) }}</p>
                <p><b>Dificultad:</b> {{ round($dificultad, 2) }}</p>
            </div>
        </div>
    </div>

@endsection

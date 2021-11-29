@extends('partials.template')
@section('title', 'Wikiprofes')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
@endsection

@section('content')

    {{--  jumbotron/Buscador  --}}
    <div class="jumbotron mb-5">
        <div class="container">
            <div class="row">
                <div class="jumbotron-body d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <form action="{{ route('search.findTeacher') }}" method="GET" class="input-group mb-3">
                            <input type="text" name="name" id="search" class="form-control" placeholder="Nombre del profesor">
                            <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--  cards of profesors  --}}
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body py-4 text-primary">
                        <h2 class="card-title text-center">
                            <i class="bi bi-graph-up"></i>
                            200
                        </h2>
                        <p class="card-text text-center">
                        Evaluaciones realizadas
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body py-4 text-primary">
                        <h2 class="card-title text-center">
                            <i class="bi bi-person-plus"></i>
                            150
                        </h2>
                        <p class="card-text text-center">
                        Profesores indexados
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body py-4 text-primary">
                        <h2 class="card-title text-center">
                            <i class="bi bi-graph-up"></i>
                            35
                        </h2>
                        <p class="card-text text-center">
                        Materiales de apoyo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  about  --}}
    <div class="container acercade">
        <div class="row p-4 jumbotron border justify-content-between ">
            <div class="col-8">
                <h5>Acerca de Wikiprofes</h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra tempus,
                dignissim magna amet. Mi, urna sollicitudin neque phasellus dictum posuere.
                Sollicitudin elit viverra diam augue porttitor nisl porttitor commodo,
                dui. Dolor eget odio odio lacus, sed facilisis iaculis sit et. Volutpat
                nibh quisque lacus, pellentesque. Vel id vitae ullamcorper eu id duis
                scelerisque. Arcu quis felis ac, sodales aenean placerat sagittis.
            </div>
            <div class="col-4">
                <img class="img-thumbnail" src="./logo.png" width="120px">
            </div>
        </div>
    </div>

    {{--  Ranking table  --}}
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-5 p-5 jumbotron border">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-5 p-5 jumbotron border d-flex justify-content-center align-items-center">
                <div>
                    <h4 class="text-center">Centros universitarios</h4><br>
                    <p class="text-center">Próximamente...</p>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('js')
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>

    <script>
        $('#search').autocomplete({
            source: function ( req, res ) {
                $.ajax({
                    url: "{{ route('search.teachers') }}",
                    dataType: 'json',
                    data: {
                        term: req.term
                    },
                    success: function( data ) {
                        info = `<a href="{{ route('home') }}">${data}</a>`
                        res( data )
                    }
                });
            }
        });
    </script>
@endsection

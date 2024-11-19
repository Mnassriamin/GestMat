@extends('template')

@section('content')
<h2 class="text-center mt-4">Liste des Épreuves</h2>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading bg-dark text-white p-3">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-between align-items-center">
                            <a href="{{ route('epreuves.create') }}" class="btn btn-sm btn-primary d-inline-block">
                                <i class="fa fa-plus-circle"></i> Ajouter
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Numéro</th>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Matiere</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eps as $epreuve)
                            <tr>
                                <td>{{ $epreuve->Numero }}</td>
                                <td>{{ $epreuve->Date }}</td>
                                <td>{{ $epreuve->Lieu }}</td>
                                <td>{{ $epreuve->Matieres->Libelle }}</td>
                                <td>
                                    <a href="{{route('epreuves.edit', $epreuve)}}" type="submit" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('epreuves.destroy', $epreuve) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $eps->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

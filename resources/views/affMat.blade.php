@extends('template')

@section('content')
<h2 class="text-center mt-4">Liste des Matieres</h2>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading bg-dark text-white p-3">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-between align-items-center">
                            <a href="matieres/create" class="btn btn-sm btn-primary">
                                <i class="fa fa-plus-circle"></i> Ajouter
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Code</th>
                                <th>Libelle</th>
                                <th>Coefficient</th>
                                <th>Epreuves</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matieres as $matiere)
                            <tr>
                                <td>{{ $matiere->Codemat }}</td>
                                <td>{{ $matiere->Libelle }}</td>
                                <td>{{ $matiere->Coef }}</td>
                                <td>
                                    <select class="custom-select" name="mt">
                                        @foreach($matiere->epreuves as $ep)
                                        <option>{{ $ep->Numero}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <a href="{{route('matieres.edit',$matiere)}}" type="submit" class="btn btn-secondary">Edit</a>

                                    <form action="{{ route('matieres.destroy', $matiere) }}" method="post" style="display: inline;">
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
                        {{ $matieres->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

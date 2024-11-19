@extends('template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="content">
                <h2 class="text-center mt-4">Creation d'un epreuve</h2><br /><br />

                <table class="table custom-table table-bordered">
                    <tr>
                        <td>
                            <form id="form" action="{{route("epreuves.index")}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="nb">Numero</label>
                                    <br />
                                    <div class="input-group">
                                        <div class="input-group-addon"></div>
                                        <input type="text" class="@error('nb') is-invalid @enderror" name="nb" placeholder="Numero d'epreuve" />
                                        @error('nb')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="dt">Date</label>
                                    <br />
                                    <div class="input-group">
                                        <div class="input-group-addon"></div>
                                        <input class="@error('dt') is-invalid @enderror" type="Date" name="dt" />
                                        @error('dt')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Lieu</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"> </div>
                                        <input class="@error('li') is-invalid @enderror" type="text" name="li" placeholder="Lieu d'epreuve" />
                                        @error('li')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mt">Matiere</label>
                                <br />
                                <div class="input-group">
                                    <div class="input-group-addon"></div>
                                    <select class="custom-select" name="mt">
                                        @foreach($matieres as $matiere)
                                        <option value="{{$matiere->id }}">{{ $matiere->Libelle }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>

        </form>
        </td>
        </tr>
        </table>
    </div>

</div>
</div>
</div>
@endsection

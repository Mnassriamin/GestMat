@extends('template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="content">
                    <h2 class="text-center mt-4">Creation d'un matiere</h2><br /><br />

                    <table class="table custom-table table-bordered">
                        <tr>
                            <td>



                                <form id="form" action="{{route("matieres.update",$matiere)}}" method="Post" >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                    <label for="nb">Code Matiere</label>
                                    <br />
                                    <div class="input-group">
                                        <div class="input-group-addon"></div>
                                        <input type="text" class="@error('cdm') is-invalid @enderror" name="cdm" placeholder="Code matiere" value="{{old('Codemat',$matiere->Codemat)}}"/>
                                        @error('cdm')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lb">Libelle</label>
                                    <br />
                                    <div class="input-group">
                                        <div class="input-group-addon"></div>
                                        <input value="{{old('Libelle',$matiere->Libelle)}}" type="text" class="@error('lb') is-invalid @enderror" name="lb" placeholder="Libelle de matiere" />
                                        @error('lb')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nb">Coefficient</label>
                                    <br />
                                    <div class="input-group">
                                        <div class="input-group-addon"></div>
                                        <input value="{{old('Coefficient',$matiere->Coef)}}" type="text" class="@error('cf') is-invalid @enderror" name="cf" placeholder="Coefficient de matiere" />
                                        @error('cf')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Modifier</button>

                                </form>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Matières et Épreuves</title>
    <style>
        .custom-table {
            width: 80%;
            margin: 20px auto;
            table-layout: fixed;
        }


        .custom-table th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .custom-table td {
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/matiere') }}">Matières <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/epreuve') }}">Épreuves</a>
                            </li>
                        </ul>

                    </div>
                </nav>
                <div class="content">
                    <h2 class="text-center mt-4">Libelle de matiere </h2>
                    <table class="table custom-table table-bordered">
                        <thead>
                            <tr>
                                <th>Libelle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @if($matieres)
                                    {{ $matieres->Libelle }}
                                    @else
                                    <p>No matière found for the épreuve with ID 5</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
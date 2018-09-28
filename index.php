<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste de Habilidades como Dev.</title>

    <meta name="description" content="Teste de habilidades">
    <meta name="author" content="Gilberto Oliveira 09_2018">

    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!--    INFORME O A SUA CHAVE DA API  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ENTER_YOUR_KEY_HERE"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript" src="js/googlemap.js"></script>
    <script type="text/javascript" src="js/regras.js"></script>
    <link href="css/style2.css" type="text/css" rel="stylesheet"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center" style="margin-bottom: 5%; margin-top: 3%;">
                Rotas
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <h4 style="text-align: center;margin-bottom: 3%;">Consultar Destinos</h4>
                    <form role="form" id="form">
                        <div class="form-group">

                            <label for="exampleInputEmail1">
                                Saida
                            </label>
                            <input type="text" id="txtStartingPoint" class="form-control"/>
                        </div>
                        <div class="form-group">

                            <label for="exampleInputPassword1">
                                Destino
                            </label>
                            <input type="text" id="txtDestinationPoint" class="form-control"/>

                            <input type="hidden" id="update_id">
                        </div>


                        <input type="button" id="btnClear" value="Limpar" style="float: right; ma" class="btn btn-outline-warning" onclick="bytutorialMap.clearEntries()"/>

                        <input type="button" id="btnQuery" value="Consultar" class="btn btn-outline-primary" style="float: right;margin-right: 10px" onclick="bytutorialMap.getGeolocationData();insere(txtStartingPoint.value,txtDestinationPoint.value,update_id.value)"/>

                    </form>
                </div>
                <div class="col-md-6"  style="overflow: auto; width: 640px; height: 200px; background-color: lightgrey;">
                    <h4 style="text-align: center;margin-bottom: 3%;">Historico de Buscas</h4>
                    <table class="table" id="show">
                        <thead>
                        <tr>
                            <th>Origem</th>
                            <th>Destino</th>
                            <th>Data Consulta</th>

                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">

                    <table class="tbl-map" style="height: 30px">
                        <tr>
                            <td>
                                <div id="map"></div>
                            </td>
                            <td>
                                <div id="panel-direction"></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        lista();
    });
</script>
</body>
</html>

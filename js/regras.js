function insere(r1, r2, update_id) {
    if (r1 == '' || r2 == '') {
        return false;
    }

    $.ajax({
        type: "POST",
        url: "controller/regrasController.php",
        data: {
            "acao": "i",
            "origem": r1,
            "destino": r2,
            "update_id": update_id,
        },
        success: function (data) {
            if (!data) {
                swal({
                    title: "Error!",
                    text: "Ocorreu erro na consulta!" + data,
                    icon: "error",
                    button: "Ok",
                });
            }
            lista();
        }
    });
}

function lista() {
    $.ajax({
        type: "POST",
        url: "controller/regrasController.php",
        data: {
            "acao": "s",
        },
        success: function (data) {
            dados = JSON.parse(data);
            $.each(dados, function (key, value) {
                html = '<tr>';
                html += '<td>' + value.origem + '</td>';
                html += '<td>' + value.destino + '</td>';
                html += '<td>' + value.data_consulta + '</td>';
                html += '<td><a href="#" onclick="remove(' + value.id + ')">remove</a> ' +
                    '<a href="#" onclick="update(' + value.id + ')">atualizar</a>'
                '</td>';
                html += '</tr>';
                $("#show").append(html);
            });
        }
    });
}


function remove(id) {
    $.ajax({
        type: "POST",
        url: "controller/regrasController.php",
        data: {
            "acao": "d",
            "id": id,
        },
        success: function (data) {
            if (!data) {
                swal({
                    title: "Error!",
                    text: "Ocorreu ao remover registro! " + data,
                    icon: "error",
                    button: "Ok",
                });
            } else {
                swal({
                    title: "Ok!",
                    text: "Removido com Sucesso!",
                    icon: "success",
                    button: "OK!",
                });
                setTimeout(function () {
                    location.reload(true);
                }, 100);
            }
        }
    });
}

function update(id) {
    $.ajax({
        type: "POST",
        url: "controller/regrasController.php",
        data: {
            "acao": "u",
            "update_id": id,
        },
        success: function (data) {

            dados = JSON.parse(data);
            $.each(dados, function (key, value) {
                $("#update_id").val(id);
                $("#txtStartingPoint").val(value.origem);
                $("#txtDestinationPoint").val(value.destino);
            });
        }
    });
}
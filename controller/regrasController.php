<?php
require_once("../model/Modelregras.php");

if (isset($_POST['acao']) && !empty($_POST['acao'])) {

    switch ($_POST['acao']) {

        case 'i':
            $model = new Modelregras();
            if ($_POST['update_id'] > 0) {
                #update tabela
                echo $model->update($_POST['origem'], $_POST['destino'], $_POST['update_id']);
            } else {
                #Insere registro
                echo $model->insert($_POST['origem'], $_POST['destino']);
            }
            break;
        case 'u':
            #atualiza rota
            $model = new Modelregras();
            echo json_encode($model->show($_POST['update_id']));
            break;
        case 'd':
            #remove registo da tabela
            $model = new Modelregras();
            echo $model->remove($_POST['id']);
            break;
        case 's':
            #Exibe registros
            $model = new Modelregras();
            if (isset($_POST['update_id']) && !empty($_POST['update_id'])) {
                $id = $_POST['update_id'];
            } else {
                $id = '';
            }
            echo json_encode($model->show());
            break;
        default:
            echo 'Solicitacao Invalida';
    }
}



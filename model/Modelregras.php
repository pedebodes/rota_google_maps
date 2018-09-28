<?php
require_once("../db/config.php");

class Modelregras
{
    /**
     * Funcao que insere registro no banco
     * @param $r1
     * @param $r2
     */
    public function insert($r1, $r2)
    {
        try {
            $db = new Conecta();
            $sql = "insert into rotas.log(origem,destino,data_consulta)values('{$r1}','{$r2}',now());";
            $db->executa_sql($sql);
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Lista os dados armazenados
     * @return bool|string
     */
    public function show($id = 0)
    {
        try {
            $db = new Conecta();
            if ($id) {
                $sql = "select * from rotas.log where id = {$id};";
            } else {
                $sql = "select * from rotas.log where status <> 'I' order by id desc;";
            }
            $db->executa_sql($sql);
            return $db->getFechAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Funcao que inativa o registro da tabela
     * @param $id
     * @return bool|string
     */
    public function remove($id)
    {
        try {
            $db = new Conecta();
            $sql = "update rotas.log set status = 'I' where id = {$id};";
            $db->executa_sql($sql);
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Funcao que atualiza rota
     * @param $id
     * @param $r1
     * @param $r2
     * @return bool|string
     */
    public function update($r1, $r2, $id)
    {
        try {
            $db = new Conecta();
            $sql = "update rotas.log set origem ='{$r1}' ,destino= '{$r2}', data_consulta = now() where id = {$id};";
            $db->executa_sql($sql);
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
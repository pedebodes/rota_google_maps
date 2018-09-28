# Destinos usando google maps

Exemplo pratico utilizando API do google maps, para traçar rotas entre origem e destino, tecnologias utilizadas:
- HTML 4
- CSS
- JavaScript
- JQuery
- Bootstrap4
- PHP 7
- PDO
- Mysql


Por opção propria foi definido que no projeto não sera utilizado framework, para se tornar um codigo simples de ser interpretado 

## Iniciando

Para testar a aplicação em funcionamento http://35.231.18.51/rotas.
para executar a aplicação deverá ser efetuado as alterações nos seguintes aquivos:

### /db/config.ph seguintes linhas:
    protected $user = 'root';
    protected $senha = '';
    protected $host = 'localhost';
    protected $banco = 'rotas';

Importar o dump do banco Mysql que se encontra em /Dump BANCO/rotas.sql


### Key Google Maps
Deve ser informada no arquivo /index.php na linha 17 o token para acesso a API

<!--    INFORME O A SUA CHAVE DA API  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=ENTER_YOUR_KEY_HERE"></script>

### Pré-requisitos
-  PHP7
-  Jquery 
-  Bootstrap4
-  Mysql



 ### Não foi utilizado banco não relacional, por não julgar necessario neste projeto
 mas caso seja necessario utilizar outro SGBD deve se:
 #### Banco relacional
 alterar /db/config.php o conector de mysql para o sgbd de sua preferencia, 
 
 #### Banco não relacional
  alterar /db/config.php e as funções de executa_sql e getFechAll para manter o perfeito funcionamento da aplicação.
  
  

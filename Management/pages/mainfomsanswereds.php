<?php
include('../PHP/DataBaseQuerys.php');
include('../PHP/updateprofile.php');
include('../PHP/PageMainValidation.php');
LoginValidation();
?>
    <!DOCTYPE HTML>
    <HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="../css/mainPagesStyle.css" rel="stylesheet" type="text/css" />
        <link href="../Img/logo.ico" rel="icon" type "image/x-icon" />
        <link href="../css/table.css" rel="stylesheet" type="text/css" />
        <link href="../css/commentary-modal.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <title>Gerenciamento</title>
        </head>
        <body ng-app="">
        <div ng-include="'header.html'"></div>
        <div class="allblock" id="formtable">
        <table id="maintable" class="table-fill">
        <thead class="text-left">
                    <th id="tdname">Nome do cliente</th>
                    <th>Técnico solicitado</th>
                    <th id="tdnota">Nota</th>
                    <th>Problema resolvido ?</th>
                    <th>Comentário</th>
                    <th class="tddata">Data de envio</th>
                    <th class="tddata">Data de resposta</th>
                </thead>
                <tbody  class="table-hover">
                    <?php 
                    if($_GET["pg"] == null || !is_numeric($_GET["pg"])){
                    loadForms(1);
                    }
                    else{
                        loadForms($_GET["pg"]);
                    }
                    ?>
                </tbody>
            </table>
            <?php loadLink("SELECT * from form"); ?>
        </div>
        <div id="id01" class="modal">
            <form class="modal-content animate" action="/action_page.php">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;              
            </span>
    </div>
  </form>
</div>
    </body>
    </html>
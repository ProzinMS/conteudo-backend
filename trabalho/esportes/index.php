<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>

  <div class="container">
        <h1>Eventos Esportivos</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir $esporte
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Esporte</th>
                <th scope="col">Data</th>
                <th scope="col">Local</th>
                <th scope="col width="25%">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($espotes as $esporte){ ?>
            <tr>
                <th scope="row"><?php echo $esporte['nome']; ?></th>
                <td><?php echo $esporte['data']; ?></td>
                <td>
                
              </td>
                <td class="text-end">
                  <a href="excluir.php?id=<?php echo $esporte['idesporte']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $esporte['idesporte']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>
    
  <?php require_once "../template/rodape.php";  ?>
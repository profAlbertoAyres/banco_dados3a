<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Exercícios</title>
</head>
<body>
      <?php 
      require_once "_parts/_menu.php";
      
      spl_autoload_register(function ($class) {
        require_once "class/{$class}.class.php";
      });
      
      $exercicio = new Exercicio();

      $exercicios = $exercicio->all(); 
      
      ?>

<main class="container">
  <div class="mt-5 d-flex justify-content-between p-5">
    <h3 class>Exercícios</h3>
    <a href="ger-exercicio.php" class="btn btn-success">Novo Exercício</a>
  </div>

  <div class="mt-4">
    <div class="mb-3">
      <input type="text" name="campo-filtro" id="campo-filtro" class="form-control" placeholder="🔍 Digite para filtrar" title="Digita para filtrar pelo nome do exercício">
    </div>
    <table class="table" id="tabela-exercicios">
      <thead>
        <tr class="table-warning">
          <th class="text-center">#</th>
          <th>Nome</th>
          <th class="text-center">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            foreach ($exercicios as $exerc):
        ?>
        <tr>
          <td class="text-center"><?= $exerc->idexercicio ?></td>
          <td><?php echo $exerc->nome ?></td>
          <td class="text-center">
            <a href="#" class="btn btn-sm btn-outline-info">
              <i class="bi bi-eye"></i>
            </a>
            <a href="ger-exercicio.php?id=<?= $exerc->idexercicio ?>" class="btn btn-sm btn-outline-secondary">
              <i class="bi bi-pencil-square"></i>
            </a>
            <a href="#" class="btn btn-sm btn-outline-danger">
              <i class="bi bi-trash"></i>
            </a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <div id="msg-vazio" class="d-flex justify-content-center alert alert-info p-3 d-none">
      <i class="bi bi-info-circle mx-2"></i> Nenhum exercício encontrado para o filtro digitado.
    </div>
  </div>
</main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/tb-interativa.js"></script>
<script src="js/exercicios.js"></script>
</body>
</html>
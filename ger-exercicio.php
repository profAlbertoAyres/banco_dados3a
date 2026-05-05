<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Grupo Muscular</title>
</head>
<body>
      <?php 
      require_once "_parts/_menu.php";
      $gruposMusculares = [
        "Abdômen",
        "Antebraço",
        "Bíceps",
        "Costas",
        "Glúteo",
        "Panturrilha",
        "Peito",
        "Tríceps"
      ];
      ?>
      <main class="container" style="margin-top: 80px;">
        <div class="mt-5">
          <h4>Cadastro de Exercício</h4>
        </div>
        <div class="card">
          <form action="db-exercicio.php" method="post" class="row g3 mt-3 p-3">
            <div class="col-12">
              <label for="nome" class="form-label">Nome do Exercício</label>
              <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="col-12">
              <label for="descricao" class="form-label">Descrição</label>
              <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="col-md-6">
              <label for="grupoMuscular" class="form-label">Grupo muscular</label>
              <select name="grupoMuscular" id="grupoMuscular" class="form-select" required>
                <option value="">Selecione...</option>
                <?php foreach($gruposMusculares as $grupo):?>
                  <option value="<?= $grupo ?>">
                    <?= $grupo ?>
                  </option>
                <?php endforeach;?>  
              </select>
            </div>

            <div class="col-12 mt-3">
              <a href="exercicios.php" class="btn btn-outline-secondary">Voltar</a>
              <button type="submit" class="btn btn-primary" name="btnGravar">Salvar</button>
            </div>

          </form>
        </div>

      </main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
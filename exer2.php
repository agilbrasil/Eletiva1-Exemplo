<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 2</h1>
    <form method="post" action="exer2resposta.php"> <!-- action vai para outra página -->
                        
                        <div class="mb-3">
                            <label for="numero1" class="form-label">Digite o número 1</label>
                            <input type="number" id="numero1" name="numero1" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="numero2" class="form-label">Digite o número 2</label>
                            <input type="number" id="numero2" name="numero2" class="form-control">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
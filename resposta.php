<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Resultado</h1>
    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            TRY{
            $valor1 = $_POST['numero1']; //armazena dados vindos do método POST, se fosse GET usaria GET aqui
            $valor2 = $_POST['numero2'];
            $soma = $valor1 + $valor2;
            echo "O valor da soma é = $soma";
            $div = $valor1 / $valor2;
            echo "Divisão = $div";
            $mult = $valor1 * $valor2;
            echo "Multiplica = $mult";
            $resto = $valor1 % $valor2;
            echo "Resto = $resto";
            } catch(Exception $e){ //se ocorrer um erro
                    echo "". $e->getMessage() ."";
            }
        }

        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
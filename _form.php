<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Form-model</title>
</head>
<body>
  <form  class="form-control"  action="" method="post">
    <div class="container bg-light ">
        <div class="row">
        
            <div class="col">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" name="num1" placeholder="Ex.: Naruto" aria-label="Nome">
            </div>
            <div class="col">
            <label for="exampleFormControlInput1"  class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="num2" placeholder="Ex.: Pedreira" aria-label="Sobrenome">
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Seu texto aqui.</label>
                <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div><!-- row -->
    </div><!-- container -->
  </form>
    <?php 
    // validação por GET
    // $nome = @$_GET['nome'];
    // $sobrenome = @$_GET['sobrenome'];
    // $email = @$_GET['email'];
    // $text = @$_GET['texto'];
    // echo $nome." ".$sobrenome;
    // echo '<br/>';
    // echo $email;
    // echo '<br/>';
    // echo $text;
    
    ?>
     <?php 
    // validação por POST
    // $nome = @$_POST['nome'];
    // $sobrenome = @$_POST['sobrenome'];
    // $email = @$_POST['email'];
    // $text = @$_POST['texto'];
    // echo $nome." ".$sobrenome;
    // echo '<br/>';
    // echo $email;
    // echo '<br/>';
    // echo $text;
    
    ?> 
    <?php 
    // calculadora com POST
    $nome = @$_POST['num1'];
    $sobrenome = @$_POST['num2'];
    echo '<br/>';
    $res = $nome + $sobrenome;
    echo "<h1>************* $res *************</h1>";
    
    
    ?>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
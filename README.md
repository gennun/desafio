<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Desafio Scaffold</h1>
    <p>Como testar?</p>

<ol>
    <li>
        <code>git clone https://github.com/gennun/desafio.git</code> 
    </li>
    <li>
        <code>composer install</code> 
    </li>
    <li>
       Renomear ".env.example" para ".env"
    </li>
    <li>    
        Modificar "DB_DATABASE=laravel" para "DB_DATABASE=desafio_scaffold" dentro do arquivo .env
    </li>
    <li>
        Criar um DB chamado "desafio_scaffold"
    </li>
    <li>
        <code>php artisan migrate</code> 
    </li>
    <li>
        <code>php artisan db:seed</code> 
    </li>
</ol>
</body>
</html>

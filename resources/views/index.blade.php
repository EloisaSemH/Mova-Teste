<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{!! asset('css/app.css') !!}" type="text/css">
    <script src="{!! asset('js/app.js') !!}"></script>
    <title>Document</title>
</head>
<body>
<main class="container">
    <form method="POST" action="{!! route('send') !!}">
        @csrf
        @method('POST')
        <select name="weekday" required class="form-group">
            <option value=""> -- Selecione um dia</option>
            <option value="sunday">Domingo</option>
            <option value="monday">Segunda</option>
            <option value="tuesday">Terça</option>
            <option value="wednesday">Quarta</option>
            <option value="thursday">Quinta</option>
            <option value="friday">Sexta</option>
            <option value="saturday">Sábado</option>
        </select>
        <button class="btn btn-primary">Enviar</button>
    </form>
</main>
</body>
</html>

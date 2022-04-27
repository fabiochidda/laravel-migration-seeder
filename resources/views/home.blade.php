<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>
<body>
    
    <div>

        @foreach ($trains as $el)

        <div>
            <div>Azienda: {{$el['azienda']}}</div>
            <div>Stazione di partenza: {{$el['stazione_di_partenza']}}</div>
            <div>Stazione di arrivo: {{$el['stazione_di_arrivo']}}</div>
            <div>Orario di partenza: {{$el['orario_di_partenza']}}</div>
            <div>Orario di arrivo: {{$el['orario_di_arrivo']}}</div>
            <div>Codice treno: {{$el['codice_treno']}}</div>
            <div>Numero carrozze: {{$el['numero_carrozze']}}</div>
            <div>In orario: {{$el['in_orario']}}</div>
            <div>Cancellato: {{$el['cancellato']}}</div>
        </div>
            
        @endforeach

    </div>


</body>
</html>
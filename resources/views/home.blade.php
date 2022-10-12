<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href="{{ @asset('./css/app.css') }}">
    <title>
        Migration and Seeder
    </title>
</head>

<body>
    <main>
        <section>
            <div class="container data">
                <h2>
                    I Treni di oggi 12/10/2022
                </h2>
                @foreach ($trains as $train)
                    <div>
                        <h3>
                            {{ $train['azienda'] }}
                        </h3>
                        <div>
                            Partenza: {{ $train['stazione_di_partenza'] }};<br>
                            Arrivo: {{ $train['stazione_di_arrivo'] }};
                        </div>
                        <div>
                           Partenza: {{ $train['orario_di_partenza'] }};<br>
                           Arrivo: {{ $train['orario_di_arrivo'] }};
                        </div>
                        <div>
                            Treno N. {{ $train['codice_treno '] }}
                        </div>
                        <div>
                            @if ($train['in_orario'] == 1)
                                In oraio
                            @else
                                In ritardo
                            @endif
                        </div>
                        <div>
                            @if ($train['cancellato'] == 1)
                                Cancellato
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>




    <h1 class="text-3xl font-bold underline" style="padding-left: 40%;">
        Dados Recebidos </h1>



    <div class="relative overflow-x-auto" style="padding-top: 1cm; width: 30cm; padding-left: 8cm">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Endereço
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sexo
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    @foreach ($_POST as $key => $value)
                    @if ($key != '_token')
                    <td class="px-6 py-4">{{ $value }}</td>
                    @endif


                    @endforeach
                </tr>

        </table>
    </div>




</body>

</html>
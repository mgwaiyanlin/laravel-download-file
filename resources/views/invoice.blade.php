<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            padding: 40px 40px;
        }

        table, th, td {
            border: 1px solid black;
            margin-top: 2rem;
        }

        h1 {
            text-align: center;
            background: black;
            color: white;
            size: 2rem;
        }
    </style>
</head>

<body>
    <h1>List of Items</h1>


    <table style="width: 100%;">
        <tr>
            <th style="width: 2rem; text-align: center;">ID</th>
            <th style="width: 7rem;">Item Name</th>
            <th style="width: 8rem">Price</th>
            <th>Description</th>
        </tr>

        {{-- @dd($data['name']) --}}


            @foreach ($items as $item)
            <tr>
                <td style="text-align: center;">{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td style="text-align: center;">{{ $item->price}}</td>
                <td>{{ $item->description }}</td>
            </tr>
            @endforeach

    </table>
</body>

</html>

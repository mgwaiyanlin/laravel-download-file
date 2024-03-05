<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Download Testing</title>
    @livewireStyles
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        label {
            display: block;
            margin-bottom: 0.2rem;
        }

        input {
            width: 100%;
            padding: 0.2rem;
        }

        button {
            margin-top: 0.5rem;
        }

        .container {
            margin: auto;
            width: 75%;
            background: lightgray;
            padding: 2rem;
            border-radius: 0.2rem;
        }

        .input-form-main {
            margin: auto;
            width: 20rem;
            background: lightslategray;
            padding: 0.4rem;
            border-radius: 0.5rem;
        }

        .input-form {
            margin: 0.5rem 1rem;
        }
    </style>
</head>

<body>
    @livewire('insertion-form')
    @livewireScripts
</body>

</html>

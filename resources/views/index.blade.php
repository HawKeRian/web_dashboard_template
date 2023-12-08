<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Monitor Template</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    @livewireScripts
    
    @livewire('homepage')
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Ajoutez vos liens CSS ici -->
</head>
<body>
    @include('partials.navbar') <!-- Exemple d'inclusion d'une partie de la vue -->
    
    <div class="container">
        @yield('content') <!-- Section principale pour le contenu -->
    </div>
    
    <!-- Ajoutez vos scripts JS ici -->
</body>
</html>

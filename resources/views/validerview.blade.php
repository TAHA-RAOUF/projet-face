<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Attente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="mx-auto h-16 w-16 animate-spin text-blue-500 mb-4">
            <circle cx="12" cy="12" r="10" stroke-width="4" class="opacity-25"></circle>
            <path d="M22 12c0-6.75-5.81-12-13-12" stroke-width="4"></path>
        </svg>
        <p class="text-lg mb-2">Chargement en cours...</p>
        
        <!-- Ajoutez des détails supplémentaires ici -->
        <div class="bg-gray-800 p-4 rounded-md mt-4">
            <p class="text-sm text-gray-500">Nous préparons quelque chose de génial pour vous. Veuillez patienter.</p>
        </div>

        <!-- Ajoutez un lien ou un bouton pour rediriger ou actualiser la page -->
        <a href="{{ url('/Home') }}" class="text-blue-500 hover:underline mt-2 inline-block">Réessayer</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription sur Facebook</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Inscription sur Facebook</h1>
        <form  method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-semibold mb-2">Nom complet</label>
                <input type="text" id="name" name="name" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Adresse e-mail</label>
                <input type="text" id="email" name="email" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-semibold mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-600 text-sm font-semibold mb-2">Confirmer le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full w-full">
                S'inscrire
            </button>
        </form>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">En cliquant sur S'inscrire, vous acceptez nos <a href="#" class="text-blue-500">Conditions générales</a>, notre <a href="#" class="text-blue-500">Politique d'utilisation des données</a> et notre <a href="#" class="text-blue-500">Politique d'utilisation des cookies</a>.</p>
        </div>
        <hr class="my-4 border-t border-gray-300">
        <div class="text-center">
            <p class="text-sm text-gray-600">Vous avez déjà un compte? <a href="{{ url('/Home') }}" class="text-blue-500 font-semibold">Connectez-vous</a></p>
        </div>
    </div>
</body>
</html>

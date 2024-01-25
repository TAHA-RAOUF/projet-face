<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialiser le mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Réinitialiser le mot de passe</h1>
        <form action="{{url('facebookers')}}"  method="POST">
            @csrf
            <input type="hidden" name="token">
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Adresse e-mail</label>
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="email" id="email" name="email" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="mdp" class="block text-gray-600 text-sm font-semibold mb-2">Nouveau mot de passe</label>
                @error('mdp')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="password" id="mdp" name="mdp" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="mdp_confirmation" class="block text-gray-600 text-sm font-semibold mb-2">Confirmer le nouveau mot de passe</label>
                @error('mdp_confirmation')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="password" id="mdp_confirmation" name="mdp_confirmation" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full w-full">
                Réinitialiser le mot de passe
            </button>
            <div class="mt-4 text-center">
            <a href="{{ url('/Home') }}" class="text-blue-500 text-sm font-semibold">Se connecter</a>
        </div>
        </form>
    </div>
</body>
</html>

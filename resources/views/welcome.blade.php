<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Connectez-vous à Facebook</h1>
        <form action="{{url('facebookers')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Adresse e-mail ou mobile</label>
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="email" id="email" name="email" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-semibold mb-2">Mot de passe</label>
                @error('password')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" class="w-full border px-3 py-2 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full w-full">
                Se connecter
            </button>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ url('passwordreset') }}" class="text-blue-500 text-sm font-semibold">Mot de passe oublié?</a>
        </div>
        <div class="mt-6 border-t pt-4">
            <p class="text-center text-gray-600 text-sm">Vous n'avez pas de compte? <a href="{{ url('inscription') }}"class="text-blue-500 font-semibold">Inscrivez-vous</a></p>
        </div>
    </div>
</body>
</html>
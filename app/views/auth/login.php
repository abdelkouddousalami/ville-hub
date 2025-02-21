<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - YouCode</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-indigo-100 to-purple-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl w-full max-w-4xl overflow-hidden shadow-2xl">
        <div class="md:flex flex-row-reverse"> <!-- Reversed flex direction -->
            <!-- Left Side - Login Form -->
            <div class="w-full md:w-1/2 p-8 md:p-12">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-indigo-900 mb-2">Connexion</h1>
                    <p class="text-indigo-600">Accédez à votre espace personnel</p>
                </div>

                <form action="/login" method="POST" class="space-y-6">
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-indigo-400"></i>
                        <input type="email" name="email" placeholder="Email" required
                               class="w-full pl-10 pr-4 py-3 rounded-lg border border-indigo-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-300 bg-indigo-50/50">
                    </div>

                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-indigo-400"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required
                               class="w-full pl-10 pr-4 py-3 rounded-lg border border-indigo-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-300 bg-indigo-50/50">
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded border-indigo-300">
                            <span class="ml-2 text-sm text-indigo-600">Se souvenir de moi</span>
                        </label>
                        <a href="/reset-password" class="text-sm text-indigo-600 hover:text-indigo-800 transition-colors">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button type="submit" name="login_btn"
                            class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-lg 
                            transition duration-300 transform hover:scale-[1.02] hover:shadow-lg active:scale-[0.98] focus:outline-none">
                        <i class="fas fa-sign-in-alt mr-2"></i>Se connecter
                    </button>
                </form>

                <div class="text-center mt-6">
                    <p class="text-indigo-600">Vous n'avez pas de compte ?
                        <a href="/register" class="font-medium text-purple-600 hover:text-purple-800 transition-colors">Inscription</a>
                    </p>
                </div>
            </div>

            <!-- Right Side - Branding -->
            <div class="w-full md:w-1/2 bg-gradient-to-br from-indigo-500 to-purple-600 p-12 relative">
                <div class="relative z-10 h-full flex flex-col justify-center gap-5">
                    <div class="flex items-center justify-center space-x-3 mb-8">
                    </div>
                    <div class="space-y-6">
                        <p class="text-white/90 text-lg">Votre plateforme de gestion des présentations et veilles technologiques.</p>
                        <div class="space-y-4">
                            <div class="flex items-center text-white/90">
                                <i class="fas fa-check-circle text-indigo-200 mr-3"></i>
                                <span>Gestion simplifiée des présentations</span>
                            </div>
                            <div class="flex items-center text-white/90">
                                <i class="fas fa-check-circle text-indigo-200 mr-3"></i>
                                <span>Suivi en temps réel</span>
                            </div>
                            <div class="flex items-center text-white/90">
                                <i class="fas fa-check-circle text-indigo-200 mr-3"></i>
                                <span>Collaboration efficace</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
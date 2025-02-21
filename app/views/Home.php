<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Innovation Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-[Poppins] bg-gray-50">
    <!-- New Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center space-x-4">
                        
                        <div class="h-6 w-px bg-gray-200"></div>
                        <span class="text-lg font-semibold text-gray-900">
                            Veille Hub
                        </span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900 border-b-2 border-indigo-500">
                            Accueil
                        </a>
                        <a href="/calendar" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Calendrier
                        </a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900">
                        Connexion
                    </a>
                    <a href="/register" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-sm hover:shadow-md transition-all">
                        Inscription
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-24 pb-16 sm:pt-32 sm:pb-20 lg:pb-32 bg-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
            
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    Innovation Hub
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Plateforme de présentation de projets innovants pour les étudiants de YouCode
                </p>
                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="/register" class="rounded-lg px-6 py-3 text-base font-semibold text-white shadow-sm bg-indigo-600 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all w-full sm:w-auto text-center">
                        Commencer maintenant
                    </a>
                    <a href="#calendar" class="rounded-lg px-6 py-3 text-base font-semibold text-gray-900 ring-1 ring-inset ring-gray-200 hover:ring-gray-300 hover:bg-gray-50 transition-all w-full sm:w-auto text-center">
                        Voir le calendrier
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Updated Presentations Section -->
    <section id="calendar" class="py-20 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Présentations à venir
                </h2>
                <p class="mt-4 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">
                    Découvrez les prochaines présentations de projets innovants
                </p>
                <div class="mt-10">
                    <a href="/calendar" class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                        <i class="far fa-calendar-alt mr-2"></i>
                        Voir le calendrier complet
                    </a>
                </div>
            </div>

            <!-- Presentation Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($presentations as $presentation): ?>
                    <div class="rounded-xl border border-gray-200 bg-white p-6 hover:border-gray-300 transition-colors">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full"></div>
                            
                            <div class="flex justify-between items-start mb-6 relative">
                                <div class="flex-1">
                                    <div class="flex items-center mb-3">
                                        <div class="w-2 h-2 rounded-full bg-blue-500 mr-2"></div>
                                        <span class="text-blue-500 text-sm font-medium">
                                            <?php echo date('H:i', strtotime($presentation['presentation_date'])); ?>
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-semibold mb-2 text-gray-800 group-hover:text-blue-600 transition-colors">
                                        <?php echo htmlspecialchars($presentation['titre']); ?>
                                    </h3>
                                    <div class="flex items-center text-gray-600 text-sm">
                                        <i class="fas fa-users mr-2 text-blue-400"></i>
                                        <p><?php echo htmlspecialchars($presentation['student_names']); ?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span class="px-4 py-1.5 bg-blue-50 text-blue-600 rounded-full text-sm font-medium
                                               group-hover:bg-blue-100 transition-colors">
                                        <?php echo date('d M', strtotime($presentation['presentation_date'])); ?>
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Bottom action -->
                            <div class="pt-4 mt-4 border-t border-gray-100">
                                <a href="#" class="flex items-center justify-center text-blue-500 hover:text-blue-600 transition-colors">
                                    <span class="text-sm font-medium">Voir les détails</span>
                                    <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Updated Registration Section -->
    <section class="py-20 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-16">
                Rejoignez la communauté
            </h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Student Card -->
                <div class="rounded-xl bg-white p-8 shadow-sm hover:shadow-md transition-all">
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-200 transition-all">
                        <i class="fas fa-user-graduate text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Étudiant</h3>
                    <p class="text-gray-600 mb-8">
                        Partagez vos projets innovants et développez vos compétences en présentation
                    </p>
                    <a href="/register?role=student" class="block w-full py-3 text-center rounded-xl bg-gradient-to-r from-indigo-500 to-pink-500 text-white hover:from-indigo-600 hover:to-pink-600 transition-all">
                        Inscription Étudiant
                    </a>
                </div>
                <!-- Teacher Card -->
                <div class="rounded-xl bg-white p-8 shadow-sm hover:shadow-md transition-all">
                    <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-pink-200 transition-all">
                        <i class="fas fa-chalkboard-teacher text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Formateur</h3>
                    <p class="text-gray-600 mb-8">
                        Encadrez les projets et évaluez les présentations des étudiants
                    </p>
                    <a href="/register?role=teacher" class="block w-full py-3 text-center rounded-xl bg-gradient-to-r from-indigo-500 to-pink-500 text-white hover:from-indigo-600 hover:to-pink-600 transition-all">
                        Inscription Formateur
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Updated Password Reset Section -->
    <section class="py-20 bg-white border-t border-gray-200">
        <div class="max-w-md mx-auto px-6">
            <div class="rounded-xl bg-white p-8 shadow-sm border border-gray-200">
                <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Mot de passe oublié ?</h2>
                
                <!-- Ajout des messages d'erreur/succès -->
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="mb-4 p-4 bg-red-50 text-red-600 rounded-xl">
                        <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="mb-4 p-4 bg-green-50 text-green-600 rounded-xl">
                        <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php endif; ?>
                
                <form action="/reset-password" method="POST">
                    <div class="mb-6">
                        <input type="email" name="email" placeholder="Votre adresse email" 
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-indigo-500 outline-none">
                    </div>
                    <button type="submit" 
                            class="w-full py-3 rounded-xl bg-gradient-to-r from-indigo-500 to-pink-500 text-white hover:from-indigo-600 hover:to-pink-600 transition-all">
                        Réinitialiser le mot de passe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            particles: {
                number: { value: 80 },
                color: { value: ['#6366F1', '#8B5CF6', '#EC4899'] },
                shape: {
                    type: ["circle", "triangle"],
                    stroke: { width: 0 },
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    animation: {
                        enable: true,
                        speed: 1,
                        minimumValue: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "none",
                    random: true,
                    straight: false,
                    outMode: "bounce",
                }
            },
            interactivity: {
                detectsOn: "canvas",
                events: {
                    onHover: {
                        enable: true,
                        mode: "grab"
                    },
                    onClick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        links: { opacity: 0.5 }
                    }
                }
            }
        });
    </script>
</body>
</html>

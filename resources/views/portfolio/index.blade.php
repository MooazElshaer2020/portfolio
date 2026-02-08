<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="معاذ رضا منصور الشاعر - مطور لارافيل محترف ورئيس قسم تكنولوجيا المعلومات">
    <meta name="keywords" content="Laravel, PHP, Web Developer, IT Manager, Egypt, Portfolio">
    <title>معاذ رضا منصور الشاعر - مطور لارافيل</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: background 0.3s, box-shadow 0.3s;
        }
        .navbar.scrolled {
            background: rgba(255,255,255,0.98);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }
        .hero h1, .hero p, .hero .btn {
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }
        .hero h1 { animation-delay: 0.3s; }
        .hero p { animation-delay: 0.6s; }
        .hero .btn { animation-delay: 0.9s; }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Section Titles */
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }

        /* Project Cards */
        .project-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .project-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .tech-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            display: inline-block;
            margin: 3px;
            font-size: 0.85rem;
        }

        /* Skills Progress */
        .progress-bar {
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        /* Buttons Hover Animation */
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        /* Footer */
        footer a:hover {
            color: #667eea;
            transition: color 0.3s;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">معاذ رضا منصور الشاعر</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link fw-medium" href="#about">عني</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#projects">المشاريع</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#contact">اتصل بي</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-3 fw-bold">معاذ رضا منصور الشاعر</h1>
            <p class="lead mb-4">مطور لارافيل محترف | مدير تكنولوجيا المعلومات</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#projects" class="btn btn-light btn-lg px-5 fw-bold">مشاهد المشاريع</a>
                <a href="#contact" class="btn btn-outline-light btn-lg px-5 fw-bold">اتصل بي</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4 section-title">عني</h2>
                    <p class="lead mb-4">مطور لارافيل محترف ومدير قسم تكنولوجيا المعلومات بخبرة واسعة في تطوير تطبيقات الويب وأنظمة الإدارة.</p>
                    <p class="mb-4">متخصص في بناء تطبيقات ويب قوية وآمنة باستخدام Laravel. عملت على مشاريع متنوعة من مواقع إلكترونية إلى أنظمة إدارة متقدمة.</p>
                    <div class="mt-4">
                        <h5 class="mb-3 fw-bold">الخبرات العملية:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-briefcase text-primary me-2"></i> <strong>مطور لارافيل - فريق المطورين بليبيا</strong> - شركة نظم (<a href="https://nozum.cloud/" target="_blank" class="text-decoration-none">nozum.cloud</a>)</li>
                            <li class="mb-2"><i class="fas fa-briefcase text-primary me-2"></i> رئيس قسم تكنولوجيا المعلومات - شركة الهدى للمقاولات</li>
                            <li class="mb-2"><i class="fas fa-briefcase text-primary me-2"></i> مطور لارافيل - شركة برمجة إيجبت فيجن</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-4 fw-bold section-title">المهارات التقنية</h4>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1"><span>Laravel</span><span>95%</span></div>
                        <div class="progress" style="height:10px;"><div class="progress-bar" role="progressbar" style="width:95%"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1"><span>PHP</span><span>90%</span></div>
                        <div class="progress" style="height:10px;"><div class="progress-bar" role="progressbar" style="width:90%"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1"><span>MySQL</span><span>85%</span></div>
                        <div class="progress" style="height:10px;"><div class="progress-bar" role="progressbar" style="width:85%"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1"><span>JavaScript</span><span>80%</span></div>
                        <div class="progress" style="height:10px;"><div class="progress-bar" role="progressbar" style="width:80%"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1"><span>Bootstrap</span><span>85%</span></div>
                        <div class="progress" style="height:10px;"><div class="progress-bar" role="progressbar" style="width:85%"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 section-title">المشاريع</h2>

            <!-- Websites -->
            <!-- Websites -->
<h3 class="mb-4 fw-bold">المواقع الإلكترونية</h3>
<div class="row g-4 mb-5">
    @foreach($websites as $project)
    <div class="col-md-4">
        <div class="card project-card h-100">
            <div style="height: 200px; overflow: hidden;">
                @if($project->image)
                    <img src="{{ asset('images/projects/' . $project->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $project->title }}" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\" class=\"w-100 h-100 d-flex align-items-center justify-content-center\"><i class=\"fas fa-globe fa-4x text-white\"></i></div>'">
                @else
                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <i class="fas fa-globe fa-4x text-white"></i>
                    </div>
                @endif
            </div>
            <div class="card-body p-4">
                <h5 class="card-title fw-bold mb-3">{{ $project->title }}</h5>
                <p class="card-text text-muted mb-3">{{ Str::limit($project->description, 100) }}</p>
                <div class="mb-3">
                    @foreach($project->technologies_array as $tech)
                    <span class="tech-badge">{{ $tech }}</span>
                    @endforeach
                </div>
                <a href="#" class="btn btn-primary fw-bold w-100">عرض التفاصيل</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Systems -->
<h3 class="mb-4 fw-bold">أنظمة الإدارة</h3>
<div class="row g-4">
    @foreach($systems as $project)
    <div class="col-md-4">
        <div class="card project-card h-100">
            <div style="height: 200px; overflow: hidden;">
                @if($project->image)
                    <img src="{{ asset('images/projects/' . $project->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $project->title }}" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\" class=\"w-100 h-100 d-flex align-items-center justify-content-center\"><i class=\"fas fa-cogs fa-4x text-white\"></i></div>'">
                @else
                    <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);" class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cogs fa-4x text-white"></i>
                    </div>
                @endif
            </div>
            <div class="card-body p-4">
                <h5 class="card-title fw-bold mb-3">{{ $project->title }}</h5>
                <p class="card-text text-muted mb-3">{{ Str::limit($project->description, 100) }}</p>
                <div class="mb-3">
                    @foreach($project->technologies_array as $tech)
                    <span class="tech-badge">{{ $tech }}</span>
                    @endforeach
                </div>
                <a href="#" class="btn btn-primary fw-bold w-100">عرض التفاصيل</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-4 section-title">اتصل بي</h2>
            <p class="lead mb-4">مستعد للعمل على مشاريعك القادمة!</p>
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <a href="mailto:mooaz_reda2020@gmail.com" class="btn btn-danger btn-lg px-4 fw-bold">
                    <i class="fas fa-envelope me-2"></i> البريد الإلكتروني
                </a>
                <a href="tel:+20123456789" class="btn btn-primary btn-lg px-4 fw-bold">
                    <i class="fas fa-phone me-2"></i> الهاتف
                </a>
            </div>
            <div class="mt-4">
                <a href="https://github.com/MooazElshaer2020" class="text-dark mx-3" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                <a href="#" class="text-dark mx-3" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 text-center">
        <p class="mb-0">&copy; 2026 معاذ رضا منصور الشاعر - جميع الحقوق محفوظة</p>
        <p class="mb-0 mt-2">Laravel Developer & IT Professional</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if(window.scrollY > 50) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });
    </script>
</body>
</html>

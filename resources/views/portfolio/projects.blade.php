<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>معاذ رضا منصور الشاعر - مطور لارافيل</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
:root {
    --primary: #667eea;
    --secondary: #764ba2;
    --light-bg: #f8f9fa;
    --dark-bg: #121212;
    --light-text: #212529;
    --dark-text: #f1f1f1;
}

/* Body & Dark Mode */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: background 0.3s, color 0.3s;
}
body.light-mode {
    background: var(--light-bg);
    color: var(--light-text);
}
body.dark-mode {
    background: var(--dark-bg);
    color: var(--dark-text);
}

/* Navbar */
.navbar {
    transition: background 0.3s, box-shadow 0.3s;
}
.navbar.scrolled {
    background: rgba(255,255,255,0.95);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Hero Section */
.hero {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
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
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
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
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    display: inline-block;
    margin: 3px;
    font-size: 0.85rem;
}

/* Skills Progress */
.progress-bar {
    background: linear-gradient(90deg, var(--primary), var(--secondary));
}

/* Buttons Hover Animation */
.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

/* Footer */
footer a:hover {
    color: var(--primary);
    transition: color 0.3s;
}

/* Dark Mode Toggle Button */
#darkModeToggle {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 999;
    border-radius: 50%;
    padding: 10px 14px;
    background: var(--primary);
    color: white;
    cursor: pointer;
    font-size: 1.2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
</style>
</head>
<body class="light-mode">

<!-- Dark Mode Toggle -->
<div id="darkModeToggle" title="Toggle Dark Mode"><i class="fas fa-moon"></i></div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
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

<!-- Sections: About, Skills, Projects, Contact -->
<section id="about" class="py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<h2 class="fw-bold mb-4 section-title">عني</h2>
<p class="lead mb-4">مطور لارافيل محترف ومدير قسم تكنولوجيا المعلومات بخبرة واسعة في تطوير تطبيقات الويب وأنظمة الإدارة.</p>
<p class="mb-4">متخصص في بناء تطبيقات ويب قوية وآمنة باستخدام Laravel. عملت على مشاريع متنوعة من مواقع إلكترونية إلى أنظمة إدارة متقدمة.</p>
</div>
<div class="col-md-6">
<h4 class="mb-4 fw-bold section-title">المهارات التقنية</h4>
<div class="mb-4">
<div class="d-flex justify-content-between mb-1"><span>Laravel</span><span>95%</span></div>
<div class="progress" style="height:10px;"><div class="progress-bar" style="width:95%"></div></div>
</div>
<div class="mb-4">
<div class="d-flex justify-content-between mb-1"><span>PHP</span><span>90%</span></div>
<div class="progress" style="height:10px;"><div class="progress-bar" style="width:90%"></div></div>
</div>
<div class="mb-4">
<div class="d-flex justify-content-between mb-1"><span>MySQL</span><span>85%</span></div>
<div class="progress" style="height:10px;"><div class="progress-bar" style="width:85%"></div></div>
</div>
<div class="mb-4">
<div class="d-flex justify-content-between mb-1"><span>JavaScript</span><span>80%</span></div>
<div class="progress" style="height:10px;"><div class="progress-bar" style="width:80%"></div></div>
</div>
<div class="mb-4">
<div class="d-flex justify-content-between mb-1"><span>Bootstrap</span><span>85%</span></div>
<div class="progress" style="height:10px;"><div class="progress-bar" style="width:85%"></div></div>
</div>
</div>
</div>
</div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5">
<div class="container">
<h2 class="text-center fw-bold mb-5 section-title">المشاريع</h2>
<div class="row g-4">
<!-- Example Project Card -->
<div class="col-md-4">
<div class="card project-card">
<div style="height:200px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display:flex; align-items:center; justify-content:center;">
<i class="fas fa-globe fa-4x text-white"></i>
</div>
<div class="card-body p-4">
<h5 class="card-title fw-bold mb-3">مشروع 1</h5>
<p class="card-text text-muted mb-3">وصف قصير للمشروع لتوضيح فكرة المشروع...</p>
<div class="mb-3">
<span class="tech-badge">Laravel</span>
<span class="tech-badge">PHP</span>
</div>
<a href="#" class="btn btn-primary fw-bold w-100">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light text-center">
<h2 class="fw-bold mb-4 section-title">اتصل بي</h2>
<p class="lead mb-4">مستعد للعمل على مشاريعك القادمة!</p>
<div class="d-flex justify-content-center gap-4 flex-wrap">
<a href="mailto:mooaz_reda2020@gmail.com" class="btn btn-danger btn-lg px-4 fw-bold"><i class="fas fa-envelope me-2"></i> البريد الإلكتروني</a>
<a href="tel:+20123456789" class="btn btn-primary btn-lg px-4 fw-bold"><i class="fas fa-phone me-2"></i> الهاتف</a>
</div>
<div class="mt-4">
<a href="https://github.com/MooazElshaer2020" class="text-dark mx-3" target="_blank"><i class="fab fa-github fa-2x"></i></a>
<a href="#" class="text-dark mx-3" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
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

    // Dark Mode Toggle
    const toggle = document.getElementById('darkModeToggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        document.body.classList.toggle('light-mode');
        toggle.innerHTML = document.body.classList.contains('dark-mode') ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
    });
</script>
</body>
</html>

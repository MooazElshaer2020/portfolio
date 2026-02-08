<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بي - معاذ رضا منصور الشاعر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .navbar {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .contact-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">معاذ رضا منصور الشاعر</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">المشاريع</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ route('contact') }}">اتصل بي</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center fw-bold mb-5 section-title">اتصل بي</h1>
                    
                    <div class="card contact-card p-4">
                        <div class="text-center mb-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-block p-3 mb-3">
                                <i class="fas fa-user-tie fa-3x text-primary"></i>
                            </div>
                            <h3 class="fw-bold">معاذ رضا منصور الشاعر</h3>
                            <p class="text-muted fs-5">مطور لارافيل محترف | مدير تكنولوجيا المعلومات</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-danger bg-opacity-10 p-3 rounded-circle me-3">
                                        <i class="fas fa-envelope fa-lg text-danger"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">البريد الإلكتروني</h5>
                                        <p class="mb-0"><a href="mailto:mooaz_reda2020@gmail.com" class="text-decoration-none text-dark">mooaz_reda2020@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                        <i class="fas fa-phone fa-lg text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">الهاتف</h5>
                                        <p class="mb-0">+20 XXX XXX XXXX</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-dark bg-opacity-10 p-3 rounded-circle me-3">
                                        <i class="fab fa-github fa-lg text-dark"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">GitHub</h5>
                                        <p class="mb-0"><a href="https://github.com/MooazElshaer2020" target="_blank" class="text-decoration-none text-dark">MooazElshaer2020</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                        <i class="fas fa-map-marker-alt fa-lg text-success"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">الموقع</h5>
                                        <p class="mb-0">الإسكندرية, مصر</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="text-center">
                            <h4 class="fw-bold mb-3">مستعد للعمل معك!</h4>
                            <p class="text-muted mb-4">إذا كان لديك مشروع أو فرصة عمل، لا تتردد في التواصل معي.</p>
                            <a href="mailto:mooaz_reda2020@gmail.com" class="btn btn-danger btn-lg px-5 fw-bold">
                                <i class="fas fa-paper-plane me-2"></i> أرسل رسالة الآن
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
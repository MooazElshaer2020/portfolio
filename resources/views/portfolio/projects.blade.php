<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جميع المشاريع - معاذ رضا منصور الشاعر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }
        .navbar {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .project-item {
            border-left: 4px solid #667eea;
            transition: transform 0.3s;
            border-radius: 10px;
            overflow: hidden;
        }
        .project-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .tech-tag {
            background: #667eea;
            color: white;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            display: inline-block;
            margin: 2px;
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
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ route('projects') }}">جميع المشاريع</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">اتصل بي</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Projects Section -->
    <section class="py-5">
        <div class="container">
            <h1 class="text-center fw-bold mb-5 section-title">جميع المشاريع</h1>

            <div class="row">
    @foreach($projects as $project)
    <div class="col-md-6 mb-4">
        <div class="card project-item h-100">
            <div class="row g-0">
                <div class="col-md-4" style="height: 200px; overflow: hidden;">
                    @if($project->image)
                        <img src="{{ asset('images/projects/' . $project->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $project->title }}" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\" class=\"w-100 h-100 d-flex align-items-center justify-content-center\"><i class=\"fas fa-{{ $project->category == 'website' ? 'globe' : 'cogs' }} fa-3x text-white\"></i></div>'">
                    @else
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <i class="fas fa-{{ $project->category == 'website' ? 'globe' : 'cogs' }} fa-3x text-white"></i>
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                            <span class="badge bg-primary px-3 py-2">{{ $project->category == 'website' ? 'موقع إلكتروني' : 'نظام إدارة' }}</span>
                        </div>
                        <p class="card-text text-muted mb-4">{{ $project->description }}</p>
                        
                        <div class="mb-4">
                            <strong class="d-block mb-2">التقنيات المستخدمة:</strong>
                            @foreach($project->technologies_array as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <strong class="d-block mb-2">المميزات:</strong>
                            <ul class="list-unstyled ps-3">
                                @foreach($project->features as $feature)
                                <li class="mb-1"><i class="fas fa-check-circle text-success me-2"></i> {{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="d-flex gap-2 flex-wrap">
                            @if($project->live_url != '#')
                            <a href="{{ $project->live_url }}" class="btn btn-success" target="_blank">
                                <i class="fas fa-external-link-alt me-1"></i> عرض مباشر
                            </a>
                            @endif
                            @if($project->github_url != '#')
                            <a href="{{ $project->github_url }}" class="btn btn-dark" target="_blank">
                                <i class="fab fa-github me-1"></i> كود المشروع
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
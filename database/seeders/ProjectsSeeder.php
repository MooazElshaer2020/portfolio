<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'موقع كنوز النحل',
            'slug' => 'kunooz-alnahal',
            'category' => 'website',
            'description' => 'موقع إلكتروني لشركة كنوز النحل لعرض منتجات العسل والتسوق الإلكتروني',
            'image' => 'kunooz-alnahal.jpg',
            'technologies' => 'Laravel, Bootstrap, MySQL, JavaScript',
            'features' => json_encode([
                'واجهة تسوق إلكتروني',
                'إدارة المنتجات',
                'نظام طلبات',
                'تصميم متجاوب',
                'دفع إلكتروني'
            ]),
            'live_url' => 'https://konuzalnahl.com/',
            'github_url' => '#',
            'order' => 1
        ]);

        Project::create([
            'title' => 'موقع شركة السقا للتصدير',
            'slug' => 'elsaka-export',
            'category' => 'website',
            'description' => 'الموقع الرسمي لشركة السقا لتصدير المنتجات المصرية',
            'image' => 'elsaka-export.jpg',
            'technologies' => 'Laravel, Bootstrap 4, MySQL, AOS Animations, SweetAlert2',
            'features' => json_encode([
                'تصميم عصري زجاجي مع حركات',
                'معرض منتجات',
                'نماذج اتصال',
                'تحسين محركات البحث',
                'دعم اللغة العربية والإنجليزية'
            ]),
            'live_url' => 'https://elsaka.org/',
            'github_url' => '#',
            'order' => 2
        ]);

        Project::create([
            'title' => 'موقع شركة الهدى للمقاولات',
            'slug' => 'alhuda-contracting',
            'category' => 'website',
            'description' => 'الموقع الرسمي لشركة الهدى للمقاولات العمومية',
            'image' => 'alhuda-contracting.jpg',
            'technologies' => 'Laravel, Blade Templates, MySQL',
            'features' => json_encode([
                'عرض أعمال الشركة',
                'معرض مشاريع',
                'شهادات العملاء',
                'قائمة الخدمات',
                'تصميم احترافي'
            ]),
            'live_url' => '#',
            'github_url' => '#',
            'order' => 3
        ]);

        Project::create([
            'title' => 'نظام نقاط البيع (POS)',
            'slug' => 'pos-system',
            'category' => 'system',
            'description' => 'نظام متكامل لإدارة نقاط البيع والمخزون',
            'image' => 'pos-system.jpg',
            'technologies' => 'Laravel, MySQL, JavaScript, AJAX',
            'features' => json_encode([
                'إدارة المبيعات',
                'تتبع المخزون',
                'إدارة العملاء',
                'إنشاء فواتير',
                'تقارير المبيعات'
            ]),
            'live_url' => '#',
            'github_url' => '#',
            'order' => 4
        ]);

        Project::create([
            'title' => 'نظام إدارة المعاهد',
            'slug' => 'institute-management',
            'category' => 'system',
            'description' => 'نظام شامل لإدارة المعاهد التعليمية والطلاب',
            'image' => 'institute-management.jpg',
            'technologies' => 'Laravel, Bootstrap, MySQL',
            'features' => json_encode([
                'تسجيل الطلاب',
                'إدارة المواد الدراسية',
                'تتبع الحضور',
                'إدارة الدرجات',
                'الجداول الدراسية',
                'المعاملات المالية'
            ]),
            'live_url' => '#',
            'github_url' => '#',
            'order' => 5
        ]);

        Project::create([
            'title' => 'نظام التصنيع',
            'slug' => 'manufacturing-system',
            'category' => 'system',
            'description' => 'نظام لإدارة عمليات التصنيع والجودة',
            'image' => 'manufacturing-system.jpg',
            'technologies' => 'Laravel, MySQL, JavaScript',
            'features' => json_encode([
                'تخطيط الإنتاج',
                'إدارة المواد الخام',
                'مراقبة الجودة',
                'تقارير الإنتاج',
                'جدولة الموظفين',
                'حساب التكاليف'
            ]),
            'live_url' => '#',
            'github_url' => '#',
            'order' => 6
        ]);

        Project::create([
            'title' => 'نظام إدارة المخزون',
            'slug' => 'stock-management',
            'category' => 'system',
            'description' => 'نظام متقدم لتتبع وإدارة المخزون',
            'image' => 'stock-management.jpg',
            'technologies' => 'Laravel, MySQL, AJAX',
            'features' => json_encode([
                'تتبع المخزون',
                'تنبيهات نفاد المخزون',
                'أوامر الشراء',
                'إدارة الموردين',
                'نقل المخزون',
                'دعم الباركود'
            ]),
            'live_url' => '#',
            'github_url' => '#',
            'order' => 7
        ]);

        Project::create([
            'title' => 'نظام إدارة الأساطيل',
            'slug' => 'fleet-management',
            'category' => 'system',
            'description' => 'نظام لإدارة المركبات والصيانة',
            'image' => 'fleet-management.jpg',
            'technologies' => 'Laravel, MySQL, Maps API',
            'features' => json_encode([
                'تتبع المركبات',
                'جدولة الصيانة',
                'إدارة السائقين',
                'تتبع استهلاك الوقود',
                'سجل الرحلات',
                'تحليل التكاليف'
            ]),
            'live_url' => '#',
            'github_url' => '#',
            'order' => 8
        ]);
    }
}
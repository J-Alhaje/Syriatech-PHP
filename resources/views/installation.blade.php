<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>دليل تثبيت لارافيل</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
            color: #222;
            min-height: 100vh;
            background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
        }

        .main-header {
            background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);
            border-radius: 1.5rem;
            box-shadow: 0 4px 24px rgba(78, 84, 200, 0.2);
        }

        .container {
            margin-right: 0 !important;
            margin-left: auto !important;
            padding-right: 0 !important;
            padding-left: 0 !important;
            max-width: 100% !important;
        }

        .card {
            border: none;
            border-radius: 1.25rem;
            box-shadow: 0 2px 16px rgba(78, 84, 200, 0.10), 0 1.5px 6px rgba(0, 0, 0, 0.04);
            margin-bottom: 2rem;
            transition: transform 0.2s, box-shadow 0.2s;
            background: rgba(255, 255, 255, 0.95);
        }

        .card:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 8px 32px rgba(78, 84, 200, 0.18), 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .card-title {
            color: #4e54c8;
            font-weight: bold;
            font-size: 1.35rem;
        }

        code,
        pre {
            background: #f3f3fa;
            color: #4e54c8;
            border-radius: 0.4rem;
            padding: 0.15rem 0.4rem;
            font-size: 0.95em;
            direction: ltr;
        }

        .section-icon {
            font-size: 1.5rem;
            margin-left: 0.5rem;
            color: #8f94fb;
            vertical-align: middle;
        }

        @media (min-width: 768px) {
            .cards-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }

        @media (min-width: 1200px) {
            .cards-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <div class="container mt-5" style="margin-right:0;max-width:100%;padding-right:0;">
        <h1 class="mb-4 text-center text-white p-4 main-header shadow-lg">
            <i class="fas fa-download section-icon"></i>
            دليل تثبيت لارافيل
        </h1>
        <div class="cards-grid">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">مقدمة عن لارافيل</h2>
                    <p class="card-text">
                        لارافيل هو إطار عمل PHP حديث وقوي لبناء تطبيقات الويب بسهولة وسرعة، مع بنية واضحة وأدوات متقدمة
                        للمطورين.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">المتطلبات الأساسية</h2>
                    <ul>
                        <li>PHP 8.2 أو أحدث</li>
                        <li>مدير الحزم Composer</li>
                        <li>خادم ويب (Apache أو Nginx)</li>
                        <li>قاعدة بيانات (MySQL أو PostgreSQL أو SQLite)</li>
                    </ul>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">تثبيت Composer</h2>
                    <p class="card-text">
                        قم بتنزيل وتثبيت Composer من <a href="https://getcomposer.org/"
                            target="_blank">getcomposer.org</a>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">إنشاء مشروع لارافيل جديد</h2>
                    <p class="card-text">
                        بعد تثبيت Composer، يمكنك إنشاء مشروع جديد بالأمر التالي:
                        <br>
                        <code>composer create-project laravel/laravel project-name</code>
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">إعداد البيئة</h2>
                    <ol>
                        <li>ادخل إلى مجلد المشروع:
                            <pre><code>cd project-name</code></pre>
                        </li>
                        <li>انسخ ملف البيئة:
                            <pre><code>cp .env.example .env</code></pre>
                        </li>
                        <li>أنشئ مفتاح التطبيق:
                            <pre><code>php artisan key:generate</code></pre>
                        </li>
                        <li>قم بتعديل بيانات قاعدة البيانات في ملف <code>.env</code> حسب إعداداتك.</li>
                    </ol>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">تشغيل الخادم المحلي</h2>
                    <p class="card-text">
                        لتشغيل التطبيق محليًا:
                        <br>
                        <code>php artisan serve</code>
                        <br>
                        ثم افتح <code>http://localhost:8000</code> في المتصفح.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">ملاحظات إضافية</h2>
                    <ul>
                        <li>لتثبيت Laravel عالميًا: <code>composer global require laravel/installer</code></li>
                        <li>يمكنك استخدام <code>laravel new project-name</code> إذا كان المثبت العالمي متوفرًا.</li>
                        <li>للتأكد من تثبيت Composer وPHP:
                            <pre><code>composer --version
php -v</code></pre>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">روابط مفيدة</h2>
                    <ul>
                        <li><a href="https://laravel.com/docs/installation" target="_blank">التوثيق الرسمي للارافيل</a>
                        </li>
                        <li><a href="https://getcomposer.org/" target="_blank">موقع Composer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Home Pagina</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
            color: #000;
        }

        .container {
            margin-right: 0 !important;
            margin-left: auto !important;
            padding-right: 0 !important;
            padding-left: 0 !important;
            max-width: 100% !important;
        }

        .card,
        .card-body,
        h1,
        h2,
        p {
            text-align: right;
            color: #000;
        }
    </style>
</head>

@include('navbar')

<body class="bg-dark">
    <div class="container mt-5" style="margin-right:0;max-width:100%;padding-right:0;">
        <h1 class="mb-4 text-center bg-primary p-4 text-white">دليل لارافيل السريع</h1>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">ما هو لارافيل؟</h2>
                <p class="card-text">
                    لارافيل هو إطار عمل PHP حديث لتطوير تطبيقات الويب، يتميز بالبساطة والقوة وسهولة الاستخدام. يوفر
                    أدوات متقدمة لبناء تطبيقات قوية بسرعة وكفاءة.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">التثبيت</h2>
                <p class="card-text">
                    يمكنك تثبيت لارافيل باستخدام Composer:
                    <br>
                    <code>composer create-project --prefer-dist laravel/laravel اسم-المشروع</code>
                </p>
                <a href="{{ url('installation') }}" class="btn btn-light mt-2">تفاصيل التثبيت</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">المسارات (Routes)</h2>
                <p class="card-text">
                    تُعرّف المسارات في ملف <code>routes/web.php</code> لتحديد كيفية استجابة التطبيق للطلبات المختلفة.
                    <br>
                    <code>Route::get('/', function () { return view('welcome'); });</code>
                </p>
                <a href="{{ url('routes') }}" class="btn btn-light mt-2">تفاصيل المسارات</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">المتحكمات (Controllers)</h2>
                <p class="card-text">
                    المتحكمات تنظم منطق التطبيق. يمكنك إنشاؤها بالأمر:
                    <br>
                    <code>php artisan make:controller اسمController</code>
                </p>
                <a href="{{ url('controllers') }}" class="btn btn-light mt-2">تفاصيل المتحكمات</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">العروض (Views)</h2>
                <p class="card-text">
                    العروض تُكتب باستخدام Blade وتوجد في مجلد <code>resources/views</code>.
                    <br>
                    مثال: <code>return view('home');</code>
                </p>
                <a href="{{ url('views') }}" class="btn btn-light mt-2">تفاصيل العروض</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">قواعد البيانات (Database)</h2>
                <p class="card-text">
                    يدعم لارافيل التعامل مع قواعد البيانات بسهولة عبر Eloquent ORM وQuery Builder.
                </p>
                <a href="{{ url('database') }}" class="btn btn-light mt-2">تفاصيل قواعد البيانات</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">الإعداد (Configuration)</h2>
                <p class="card-text">
                    جميع ملفات إعداد لارافيل موجودة في مجلد <code>config</code>. يمكنك تعديل الإعدادات مثل اللغة
                    والمنطقة الزمنية وقاعدة البيانات من ملف <code>.env</code> وملفات الإعداد.
                </p>
                <a href="{{ url('configuration') }}" class="btn btn-light mt-2">تفاصيل الإعداد</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">هيكلية المجلدات (Directory Structure)</h2>
                <p class="card-text">
                    يتكون مشروع لارافيل من مجلدات رئيسية مثل <code>app</code> (الكود الأساسي)، <code>routes</code>
                    (المسارات)، <code>resources</code> (العروض والملفات الثابتة)، <code>database</code> (الهجرات
                    والنماذج)، و<code>public</code> (نقطة الدخول).
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">الوسيطات (Middleware)</h2>
                <p class="card-text">
                    الوسيطات تُستخدم لمعالجة الطلبات قبل وصولها للمتحكمات، مثل التحقق من تسجيل الدخول أو الحماية من
                    CSRF. يمكنك إضافتها في ملف <code>app/Http/Middleware</code> وتسجيلها في
                    <code>app/Http/Kernel.php</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">الحماية من CSRF</h2>
                <p class="card-text">
                    لارافيل يوفر حماية تلقائية من هجمات CSRF في النماذج. استخدم <code>@csrf</code> داخل كل نموذج HTML
                    لضمان الأمان.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">الطلبات (Requests)</h2>
                <p class="card-text">
                    يمكنك الوصول إلى بيانات الطلب عبر كائن <code>Request</code> أو عبر التابع <code>$request</code> في
                    المتحكمات. مثال: <code>$request->input('name')</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">الاستجابات (Responses)</h2>
                <p class="card-text">
                    يمكنك إرجاع نص، JSON، أو عرض من المتحكمات باستخدام دوال مثل <code>response()</code> أو <code>return
                        view('home')</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">قوالب Blade</h2>
                <p class="card-text">
                    Blade هو محرك القوالب الخاص بلارافيل، يسمح بكتابة HTML مع تعليمات PHP مبسطة مثل <code>if</code>
                    و<code>foreach</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">إدارة الأصول (Asset Bundling)</h2>
                <p class="card-text">
                    يمكنك إدارة ملفات CSS وJS باستخدام Vite أو Laravel Mix. ضع ملفاتك في <code>resources</code> وادمجها
                    في <code>public</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">توليد الروابط (URL Generation)</h2>
                <p class="card-text">
                    استخدم دالة <code>route('route.name')</code> لتوليد روابط ديناميكية لمسارات التطبيق.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">الجلسات (Session)</h2>
                <p class="card-text">
                    لارافيل يوفر إدارة جلسات سهلة عبر دوال مثل <code>session(['key' => 'value'])</code>
                    و<code>session('key')</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">التحقق من الصحة (Validation)</h2>
                <p class="card-text">
                    يمكنك التحقق من صحة البيانات بسهولة باستخدام <code>$request->validate([...])</code> أو كائن
                    <code>Validator</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">معالجة الأخطاء (Error Handling)</h2>
                <p class="card-text">
                    يتم معالجة الأخطاء تلقائياً في لارافيل، ويمكنك تخصيص رسائل الأخطاء في ملف
                    <code>app/Exceptions/Handler.php</code>.
                </p>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">التسجيل (Logging)</h2>
                <p class="card-text">
                    يدعم لارافيل التسجيل المتقدم للأحداث والأخطاء عبر ملف <code>storage/logs/laravel.log</code> ويمكنك
                    تخصيصه من <code>config/logging.php</code>.
                </p>
                <a href="{{ url('logging') }}" class="btn btn-light mt-2">دليل التسجيل المفصل</a>
            </div>
        </div>
        <div class="card bg-secondary mb-3">
            <div class="card-body">
                <h2 class="card-title">المزيد</h2>
                <p class="card-text">
                    لمزيد من التفاصيل، زر الموقع الرسمي: <a href="https://laravel.com/docs" class="text-white"
                        target="_blank">Laravel Documentation</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
</body>

</html>

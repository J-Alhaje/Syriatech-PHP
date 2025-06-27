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

    <title>دليل لارافيل السريع</title>
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

        .btn-light {
            background: linear-gradient(90deg, #8f94fb 0%, #4e54c8 100%);
            color: #fff !important;
            border: none;
            border-radius: 2rem;
            font-weight: bold;
            transition: background 0.2s, color 0.2s;
        }

        .btn-light:hover {
            background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);
            color: #fff;
        }

        code {
            background: #f3f3fa;
            color: #4e54c8;
            border-radius: 0.4rem;
            padding: 0.15rem 0.4rem;
            font-size: 0.95em;
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
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

@include('navbar')

<body>
    <div class="container mt-5" style="margin-right:0;max-width:100%;padding-right:0;">
        <h1 class="mb-4 text-center text-white p-4 main-header shadow-lg">
            <i class="fas fa-bolt section-icon"></i>
            دليل لارافيل السريع
        </h1>
        <div class="cards-grid">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">ما هو لارافيل؟</h2>
                    <p class="card-text">
                        لارافيل هو إطار عمل PHP حديث لتطوير تطبيقات الويب، يتميز بالبساطة والقوة وسهولة الاستخدام. يوفر
                        أدوات متقدمة لبناء تطبيقات قوية بسرعة وكفاءة.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">التثبيت</h2>
                    <p class="card-text">
                        يمكنك تثبيت لارافيل باستخدام Composer:
                        <br>
                        <code>composer create-project --prefer-dist laravel/laravel اسم-المشروع</code>
                    </p>
                    <a href="{{ route('installation') }}" class="btn btn-light mt-2">تفاصيل التثبيت</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">المسارات (Routes)</h2>
                    <p class="card-text">
                        تُعرّف المسارات في ملف <code>routes/web.php</code> لتحديد كيفية استجابة التطبيق للطلبات
                        المختلفة.
                        <br>
                        <code>Route::get('/', function () { return view('welcome'); });</code>
                    </p>
                    <a href="{{ route('routes') }}" class="btn btn-light mt-2">تفاصيل المسارات</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">المتحكمات (Controllers)</h2>
                    <p class="card-text">
                        المتحكمات تنظم منطق التطبيق. يمكنك إنشاؤها بالأمر:
                        <br>
                        <code>php artisan make:controller اسمController</code>
                    </p>
                    <a href="{{ route('controllers') }}" class="btn btn-light mt-2">تفاصيل المتحكمات</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">العروض (Views)</h2>
                    <p class="card-text">
                        العروض تُكتب باستخدام Blade وتوجد في مجلد <code>resources/views</code>.
                        <br>
                        مثال: <code>return view('home');</code>
                    </p>
                    <a href="{{ route('views') }}" class="btn btn-light mt-2">تفاصيل العروض</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">قواعد البيانات (Database)</h2>
                    <p class="card-text">
                        يدعم لارافيل التعامل مع قواعد البيانات بسهولة عبر Eloquent ORM وQuery Builder.
                    </p>
                    <a href="{{ route('database') }}" class="btn btn-light mt-2">تفاصيل قواعد البيانات</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الإعداد (Configuration)</h2>
                    <p class="card-text">
                        جميع ملفات إعداد لارافيل موجودة في مجلد <code>config</code>. يمكنك تعديل الإعدادات مثل اللغة
                        والمنطقة الزمنية وقاعدة البيانات من ملف <code>.env</code> وملفات الإعداد.
                    </p>
                    <a href="{{ route('configuration') }}" class="btn btn-light mt-2">تفاصيل الإعداد</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">هيكلية المجلدات (Directory Structure)</h2>
                    <p class="card-text">
                        يتكون مشروع لارافيل من مجلدات رئيسية مثل <code>app</code> (الكود الأساسي)، <code>routes</code>
                        (المسارات)، <code>resources</code> (العروض والملفات الثابتة)، <code>database</code> (الهجرات
                        والنماذج)، و<code>public</code> (نقطة الدخول).
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الوسيطات (Middleware)</h2>
                    <p class="card-text">
                        الوسيطات تُستخدم لمعالجة الطلبات قبل وصولها للمتحكمات، مثل التحقق من تسجيل الدخول أو الحماية من
                        CSRF. يمكنك إضافتها في ملف <code>app/Http/Middleware</code> وتسجيلها في
                        <code>app/Http/Kernel.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الحماية من CSRF</h2>
                    <p class="card-text">
                        لارافيل يوفر حماية تلقائية من هجمات CSRF في النماذج. استخدم <code>@csrf</code> داخل كل نموذج
                        HTML
                        لضمان الأمان.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الطلبات (Requests)</h2>
                    <p class="card-text">
                        يمكنك الوصول إلى بيانات الطلب عبر كائن <code>Request</code> أو عبر التابع <code>$request</code>
                        في
                        المتحكمات. مثال: <code>$request->input('name')</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الاستجابات (Responses)</h2>
                    <p class="card-text">
                        يمكنك إرجاع نص، JSON، أو عرض من المتحكمات باستخدام دوال مثل <code>response()</code> أو
                        <code>return
                            view('home')</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">قوالب Blade</h2>
                    <p class="card-text">
                        Blade هو محرك القوالب الخاص بلارافيل، يسمح بكتابة HTML مع تعليمات PHP مبسطة مثل <code>if</code>
                        و<code>foreach</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">إدارة الأصول (Asset Bundling)</h2>
                    <p class="card-text">
                        يمكنك إدارة ملفات CSS وJS باستخدام Vite أو Laravel Mix. ضع ملفاتك في <code>resources</code>
                        وادمجها
                        في <code>public</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">توليد الروابط (URL Generation)</h2>
                    <p class="card-text">
                        استخدم دالة <code>route('route.name')</code> لتوليد روابط ديناميكية لمسارات التطبيق.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الجلسات (Session)</h2>
                    <p class="card-text">
                        لارافيل يوفر إدارة جلسات سهلة عبر دوال مثل <code>session(['key' => 'value'])</code>
                        و<code>session('key')</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">التحقق من الصحة (Validation)</h2>
                    <p class="card-text">
                        يمكنك التحقق من صحة البيانات بسهولة باستخدام <code>$request->validate([...])</code> أو كائن
                        <code>Validator</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">معالجة الأخطاء (Error Handling)</h2>
                    <p class="card-text">
                        يتم معالجة الأخطاء تلقائياً في لارافيل، ويمكنك تخصيص رسائل الأخطاء في ملف
                        <code>app/Exceptions/Handler.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">التسجيل (Logging)</h2>
                    <p class="card-text">
                        يدعم لارافيل التسجيل المتقدم للأحداث والأخطاء عبر ملف <code>storage/logs/laravel.log</code>
                        ويمكنك
                        تخصيصه من <code>config/logging.php</code>.
                    </p>
                    <a href="{{ route('logging') }}" class="btn btn-light mt-2">دليل التسجيل المفصل</a>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">المزيد</h2>
                    <p class="card-text">
                        لمزيد من التفاصيل، زر الموقع الرسمي: <a href="https://laravel.com/docs" class="text-white"
                            target="_blank">Laravel Documentation</a>
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">المهام المجدولة (Task Scheduling)</h2>
                    <p class="card-text">
                        يمكنك جدولة المهام التلقائية مثل إرسال البريد أو تنظيف البيانات باستخدام جدولة المهام في لارافيل
                        عبر
                        ملف <code>app/Console/Kernel.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الأحداث والمستمعون (Events & Listeners)</h2>
                    <p class="card-text">
                        استخدم الأحداث والمستمعين لفصل منطق التطبيق، مثل تنفيذ إجراءات عند تسجيل مستخدم جديد. يمكنك
                        تعريفها
                        في مجلد <code>app/Events</code> و<code>app/Listeners</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">إرسال البريد الإلكتروني (Mail)</h2>
                    <p class="card-text">
                        يمكنك إرسال رسائل بريد إلكتروني بسهولة باستخدام <code>Mail</code> في لارافيل. قم بتكوين إعدادات
                        البريد في <code>.env</code> و<code>config/mail.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الإشعارات (Notifications)</h2>
                    <p class="card-text">
                        يدعم لارافيل إرسال الإشعارات عبر قنوات متعددة مثل البريد الإلكتروني وSMS وSlack. يمكنك إنشاء
                        إشعار
                        باستخدام <code>php artisan make:notification</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">التخزين (Storage)</h2>
                    <p class="card-text">
                        يوفر لارافيل واجهة موحدة للتعامل مع الملفات المحلية والسحابية عبر <code>Storage</code>. يمكنك
                        رفع
                        وتحميل الملفات بسهولة.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الاختبارات (Testing)</h2>
                    <p class="card-text">
                        يدعم لارافيل كتابة اختبارات تلقائية باستخدام PHPUnit وPest. يمكنك إنشاء اختبار جديد بالأمر
                        <code>php
                            artisan make:test</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الحزم (Packages)</h2>
                    <p class="card-text">
                        يمكنك توسيع وظائف لارافيل عبر الحزم الجاهزة أو إنشاء حزمك الخاصة. استخدم Composer لإدارة الحزم.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">التدويل (Localization)</h2>
                    <p class="card-text">
                        يدعم لارافيل الترجمة وتعدد اللغات عبر ملفات <code>lang</code>. يمكنك تغيير اللغة الافتراضية من
                        ملف
                        <code>config/app.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الأوامر المخصصة (Artisan Commands)</h2>
                    <p class="card-text">
                        يمكنك إنشاء أوامر Artisan مخصصة لأتمتة المهام عبر الأمر <code>php artisan make:command</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">واجهات برمجة التطبيقات (API Resources)</h2>
                    <p class="card-text">
                        يوفر لارافيل أدوات قوية لبناء واجهات برمجة التطبيقات (API) باستخدام الموارد (Resources)
                        و<code>Resource Collections</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">المصادقة (Authentication)</h2>
                    <p class="card-text">
                        يدعم لارافيل المصادقة الجاهزة للمستخدمين عبر الحزم مثل Breeze وJetstream، ويمكنك تخصيصها حسب
                        الحاجة.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">التفويض (Authorization)</h2>
                    <p class="card-text">
                        يمكنك التحكم في صلاحيات المستخدمين باستخدام السياسات (Policies) والبوابات (Gates) في لارافيل.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الكاش (Caching)</h2>
                    <p class="card-text">
                        يدعم لارافيل الكاش لتسريع التطبيق باستخدام أنظمة مثل Redis وMemcached. يمكنك ضبط الكاش من
                        <code>config/cache.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الصفوف (Queues)</h2>
                    <p class="card-text">
                        استخدم الصفوف لمعالجة المهام الثقيلة في الخلفية مثل إرسال البريد أو معالجة الصور. يمكنك ضبطها من
                        <code>config/queue.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">البث (Broadcasting)</h2>
                    <p class="card-text">
                        يدعم لارافيل البث الفوري للأحداث إلى الواجهة الأمامية باستخدام تقنيات مثل WebSockets وPusher.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">الخدمات (Services)</h2>
                    <p class="card-text">
                        يمكنك ربط تطبيقك بخدمات خارجية مثل الدفع أو الرسائل القصيرة عبر مزودي الخدمة (Service Providers)
                        و<code>config/services.php</code>.
                    </p>
                </div>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h2 class="card-title">توثيق المشروع (Documentation)</h2>
                    <p class="card-text">
                        من الأفضل دائمًا توثيق مشروعك وكتابة تعليمات واضحة للمطورين الآخرين. استخدم التعليقات وملفات
                        README.
                    </p>
                </div>
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

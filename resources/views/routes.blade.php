<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <title>المسارات في لارافيل</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
            direction: rtl;
            text-align: right;
        }

        .container,
        .card,
        .card-body,
        h1,
        h2,
        p {
            text-align: right;
        }

        code,
        pre {
            background: #e9ecef;
            color: #d63384;
            padding: 2px 6px;
            border-radius: 4px;
            direction: ltr;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container py-5">
        <h1 class="mb-4 text-center">المسارات في لارافيل</h1>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h2 class="card-title">المسارات (Routes)</h2>
                <p class="card-text">
                    تُعرّف المسارات في ملف <code>routes/web.php</code> لتحديد كيفية استجابة التطبيق للطلبات
                    المختلفة.<br>
                    <code>Route::get('/', function () { return view('welcome'); });</code>
                </p>
            </div>
        </div>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h2 class="card-title">أنواع المسارات</h2>
                <p class="card-text">
                    يدعم لارافيل عدة أنواع من المسارات:<br>
                <ul>
                    <li><strong>GET:</strong> لعرض الصفحات أو البيانات.<br>
                        <code>Route::get('/about-us', function () { return view('pages/about'); });</code>
                    </li>
                    <li class="mt-2"><strong>POST:</strong> لإرسال البيانات (مثل النماذج).<br>
                        <code>Route::post('/contact', [ContactController::class, 'send']);</code>
                    </li>
                    <li class="mt-2"><strong>Route::view:</strong> لعرض صفحة مباشرة بدون منطق إضافي.<br>
                        <code>Route::view('/welcome', 'welcome');</code>
                    </li>
                    <li class="mt-2"><strong>Route::redirect:</strong> لإعادة التوجيه لمسار آخر.<br>
                        <code>Route::redirect('/old', '/new');</code>
                    </li>
                </ul>
                </p>
            </div>
        </div>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h2 class="card-title">تسمية المسارات (Route Names)</h2>
                <p class="card-text">
                    يمكنك إعطاء اسم لكل مسار لتسهيل توليد الروابط:<br>
                    <code>Route::get('/contact', function () { return view('pages/contact');
                        })->name('contact');</code><br>
                    ثم يمكنك استخدام <code>route('contact')</code> في العروض أو المتحكمات.
                </p>
            </div>
        </div>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h2 class="card-title">المسارات مع المتحكمات</h2>
                <p class="card-text">
                    يمكنك ربط المسار بمتحكم:<br>
                    <code>Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');</code>
                </p>
            </div>
        </div>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h2 class="card-title">أمثلة من التطبيق</h2>
                <p class="card-text">
                    <strong>بعض المسارات المعرفة في هذا المشروع:</strong>
                <ul>
                    <li><code>Route::get('/', function () { return view('home'); })->name('home');</code></li>
                    <li><code>Route::get('/doc', function () { return view('doc'); })->name('doc');</code></li>
                    <li><code>Route::get('/contact', function () { return view('pages/contact');
                            })->name('contact');</code></li>
                    <li><code>Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');</code>
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <title>الإعداد في لارافيل</title>
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
        <h1 class="mb-4 text-center">الإعداد في لارافيل</h1>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <h2 class="card-title">ما هو الإعداد؟</h2>
                <p class="card-text">
                    جميع ملفات إعداد <span class="fw-bold">لارافيل</span> موجودة في مجلد <code>config</code>.
                    يمكنك تعديل الإعدادات مثل اللغة، المنطقة الزمنية، وقاعدة البيانات من خلال ملف <code>.env</code>
                    وملفات الإعداد المختلفة.
                </p>
                <p class="card-text">
                    لتغيير اللغة الافتراضية للتطبيق، يمكنك تعديل القيمة في ملف <code>config/app.php</code>:
                    <br>
                    <code>'locale' =&gt; 'ar'</code>
                </p>
                <p class="card-text">
                    لتغيير المنطقة الزمنية، عدل السطر التالي في نفس الملف:
                    <br>
                    <code>'timezone' =&gt; 'Asia/Damascus'</code>
                </p>
                <p class="card-text">
                    إعدادات قاعدة البيانات تُعدل من ملف <code>.env</code>:
                    <br>
                    <code>DB_CONNECTION=mysql</code><br>
                    <code>DB_HOST=127.0.0.1</code><br>
                    <code>DB_PORT=3306</code><br>
                    <code>DB_DATABASE=اسم_قاعدة_البيانات</code><br>
                    <code>DB_USERNAME=اسم_المستخدم</code><br>
                    <code>DB_PASSWORD=كلمة_المرور</code>
                </p>
                <p class="card-text">
                    لمزيد من التفاصيل حول الإعدادات، راجع ملفات <code>config</code> المختلفة في مجلد المشروع.
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>

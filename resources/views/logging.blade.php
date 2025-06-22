<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <title>توثيق التسجيل في لارافيل</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
            direction: rtl;
        }

        .doc-section {
            margin-bottom: 2rem;
        }

        .doc-section h2 {
            color: #0d6efd;
        }

        code,
        pre {
            background: #e9ecef;
            color: #d63384;
            padding: 2px 6px;
            border-radius: 4px;
            direction: ltr;
        }

        a {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container py-5">
        <h1 class="mb-4 text-center">توثيق التسجيل في لارافيل</h1>
        <div class="doc-section">
            <h2>مقدمة</h2>
            <p>
                يوفر لارافيل خدمات تسجيل قوية تتيح لك تسجيل الرسائل في الملفات، سجل أخطاء النظام، وحتى إرسالها إلى Slack
                لإشعار فريقك بالكامل.<br>
                يعتمد التسجيل في لارافيل على <strong>القنوات (channels)</strong>. كل قناة تمثل طريقة محددة لكتابة
                معلومات السجل. على سبيل المثال، قناة <code>single</code> تكتب السجلات في ملف واحد، بينما قناة
                <code>slack</code> ترسل الرسائل إلى Slack. يمكن كتابة الرسائل إلى عدة قنوات حسب مستوى الخطورة.<br>
                في الخلفية، يستخدم لارافيل مكتبة Monolog، التي توفر دعمًا لمجموعة متنوعة من معالجات السجلات القوية. يسهل
                لارافيل تكوين هذه المعالجات، مما يسمح لك بتخصيص معالجة السجلات في تطبيقك.
            </p>
        </div>
        <div class="doc-section">
            <h2>الإعداد</h2>
            <p>
                جميع خيارات الإعداد التي تتحكم في سلوك التسجيل في تطبيقك موجودة في ملف <code>config/logging.php</code>.
                يتيح لك هذا الملف تكوين قنوات السجل، لذا تأكد من مراجعة كل قناة وخياراتها.
            </p>
            <p>
                افتراضيًا، يستخدم لارافيل قناة <code>stack</code> عند تسجيل الرسائل. تُستخدم قناة <code>stack</code>
                لتجميع عدة قنوات سجل في قناة واحدة.
            </p>
        </div>
        <div class="doc-section">
            <h2>أنواع القنوات المتاحة</h2>
            <p>
                كل قناة سجل تعتمد على <strong>محرك (driver)</strong>. يحدد المحرك كيفية ومكان تسجيل الرسالة فعليًا.
                الأنواع التالية متوفرة في كل تطبيق لارافيل:
            </p>
            <ul>
                <li><strong>custom</strong>: محرك يستدعي مصنعًا مخصصًا لإنشاء القناة.</li>
                <li><strong>daily</strong>: محرك يعتمد على RotatingFileHandler ويدور السجلات يوميًا.</li>
                <li><strong>errorlog</strong>: محرك يعتمد على ErrorLogHandler.</li>
                <li><strong>monolog</strong>: محرك مصنع Monolog يمكنه استخدام أي معالج مدعوم من Monolog.</li>
                <li><strong>papertrail</strong>: محرك يعتمد على SyslogUdpHandler.</li>
                <li><strong>single</strong>: محرك يسجل في ملف أو مسار واحد (StreamHandler).</li>
                <li><strong>slack</strong>: محرك يعتمد على SlackWebhookHandler.</li>
                <li><strong>stack</strong>: محرك لتسهيل إنشاء قنوات متعددة.</li>
                <li><strong>syslog</strong>: محرك يعتمد على SyslogHandler.</li>
            </ul>
        </div>
        <div class="doc-section">
            <h2>تخصيص قناة Monolog</h2>
            <p>
                عند استخدام محرك <code>monolog</code>، يمكنك تخصيص المعالجات (handlers)، المنسقات (formatters)،
                والمعالجات المسبقة (processors). مثال:
            </p>
            <pre><code>'logentries' => [
    'driver'  => 'monolog',
    'handler' => Monolog\Handler\SyslogUdpHandler::class,
    'handler_with' => [
        'host' => 'my.logentries.internal.datahubhost.company.com',
        'port' => '10000',
    ],
],
</code></pre>
            <p>
                يمكنك أيضًا تخصيص المنسقات والمعالجات المسبقة لاحتياجات تسجيل متقدمة.
            </p>
        </div>
        <div class="doc-section">
            <h2>كتابة رسائل السجل</h2>
            <p>
                يمكنك كتابة رسائل السجل باستخدام واجهة <code>Log</code>:
            </p>
            <pre><code>use Illuminate\Support\Facades\Log;

Log::info('This is an info message.');
Log::error('This is an error message.');
</code></pre>
        </div>
        <div class="doc-section">
            <h2>متابعة السجلات باستخدام Pail</h2>
            <p>
                Laravel Pail هي حزمة تتيح لك متابعة ملفات السجل الخاصة بتطبيق لارافيل مباشرة من سطر الأوامر. للبدء، ثبت
                Pail باستخدام Composer:
            </p>
            <pre><code>composer require laravel/pail
</code></pre>
            <p>
                لبدء متابعة السجلات، نفذ:
            </p>
            <pre><code>php artisan pail
</code></pre>
            <p>
                لمزيد من الخيارات والفلاتر، راجع <a href="https://laravel.com/docs/12.x/logging" target="_blank">التوثيق
                    الرسمي</a>.
            </p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>

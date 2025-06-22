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

    <title>من نحن</title>
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
        h3,
        p {
            text-align: right;
        }
    </style>
</head>

<body class="bg-dark">
    @include('navbar')
    <div class="container mt-5 ">
        <div class="card p-4">
            <div class="card-header bg-primary text-white">
                <h3>من نحن</h3>
            </div>
            <div class="card-body">
                <p>
                    <strong>سيريا تك PHP</strong> هو مشروع تعليمي يهدف إلى تبسيط مفاهيم تطوير الويب باستخدام إطار العمل
                    لارافيل بلغة PHP.
                    نقدم شروحات وأدلة عملية تساعد المطورين الجدد والمحترفين على بناء تطبيقات ويب احترافية بسهولة.
                </p>
                <p>
                    يضم فريقنا مجموعة من المطورين ذوي الخبرة في مجال البرمجة وتطوير البرمجيات، ونسعى دائمًا لتقديم محتوى
                    عالي الجودة باللغة العربية.
                </p>
                <hr>
                <h4 class="mt-3">رؤيتنا</h4>
                <p>
                    نؤمن بأن المعرفة حق للجميع، ونسعى لجعل تعلم البرمجة وتطوير الويب متاحًا وسهل الفهم لكل الناطقين
                    بالعربية. هدفنا هو بناء مجتمع تقني عربي قوي يواكب أحدث التقنيات العالمية.
                </p>
                <h4 class="mt-3">قيمنا</h4>
                <ul>
                    <li>الجودة والاحترافية في تقديم الشروحات والمحتوى.</li>
                    <li>تشجيع التعلم الذاتي والمستمر.</li>
                    <li>دعم ومساعدة جميع المطورين العرب.</li>
                    <li>الابتكار ومواكبة التطورات التقنية.</li>
                </ul>
                <h4 class="mt-3">ماذا يميزنا؟</h4>
                <p>
                    نقدم محتوى عملي ومباشر مع أمثلة واقعية، ونوفر دعمًا مستمرًا عبر منصات التواصل. كما نرحب بمساهمات
                    المجتمع واقتراحاتهم لتطوير المشروع.
                </p>
                <h4 class="mt-3">رسالة الفريق</h4>
                <p>
                    رسالتنا هي تمكين كل مطور عربي من بناء تطبيقات ويب حديثة باستخدام أفضل الأدوات والممارسات، وتوفير
                    بيئة تعليمية محفزة وآمنة.
                </p>
                <hr>
                <p>
                    إذا كان لديك أي اقتراحات أو استفسارات، أو ترغب في المساهمة معنا، لا تتردد في التواصل عبر صفحة <a
                        href="{{ route('contact') }}">اتصل بنا</a> أو من خلال قنواتنا على وسائل التواصل الاجتماعي.
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

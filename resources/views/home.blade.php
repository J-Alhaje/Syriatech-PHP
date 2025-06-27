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

    <title>الصفحة الرئيسية</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background-color: #5e63d4;
            color: #212529;
            direction: rtl;
            text-align: right;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1516116216624-53e697fedbea?q=80&w=1228&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat;
            color: #fff;
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
            padding: 4rem 2rem 2rem 2rem;
            border-radius: 0 0 2rem 2rem;
        }

        .hero h1 {
            font-size: 2.8rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .features {
            margin-top: -3rem;
            z-index: 2;
            position: relative;
        }

        .feature-card {
            background: #222;
            color: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.2);
            padding: 2rem 1.5rem;
            text-align: right;
            transition: transform 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-8px) scale(1.03);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <div class="hero">
        <h1>مرحباً بكم في موقعنا</h1>
        <p>اكتشف أفضل الحلول التقنية لتطوير أعمالك بسهولة واحترافية.</p>
        <a href="{{ route('doc') }}" class="btn btn-primary btn-lg">ابدأ الآن <i
                class="fas fa-arrow-left ms-2"></i></a>
    </div>
    <div class="container features" id="features">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-4">
                <div class="feature-card h-100 text-end">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h4 class="fw-bold mb-2">سرعة الأداء</h4>
                    <p>نضمن لك سرعة في تحميل الصفحات واستجابة فورية لجميع خدماتنا.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="feature-card h-100 text-end">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4 class="fw-bold mb-2">أمان عالي</h4>
                    <p>حماية بياناتك أولوية لدينا باستخدام أحدث تقنيات الأمان.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="feature-card h-100 text-end">
                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                    <h4 class="fw-bold mb-2">دعم فني متواصل</h4>
                    <p>
                        الدعم الفني المتواصل يضمن وجود فريق جاهز لمساعدة المستخدمين وحل مشاكلهم في أي وقت. يشمل ذلك الرد
                        على الاستفسارات، معالجة الأعطال، وتقديم التحديثات اللازمة لضمان استمرارية الخدمة.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    @include('/pages/footer')
    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->

</body>

</html>

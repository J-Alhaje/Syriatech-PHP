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
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
</head>

<body class="bg-dark">
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
                    <p>فريقنا جاهز لمساعدتك على مدار الساعة في أي وقت تحتاج فيه للدعم.</p>
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
    @include('footer')
    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->

</body>

</html>

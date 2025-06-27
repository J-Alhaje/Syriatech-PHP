<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>تواصل معنا | SyriaTech</title>
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #5e63d4 0%, #a084ee 100%);
            color: #212529;
            direction: rtl;
            text-align: right;
            font-family: 'Cairo', sans-serif;
        }

        .contact-container {
            max-width: 700px;
            margin: 60px auto;
        }

        .card {
            border: none;
            border-radius: 22px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            background: rgba(255, 255, 255, 0.95);
        }

        .card-header {
            border-radius: 20px 20px 0 0;
            background: linear-gradient(90deg, #5e63d4 60%, #a084ee 100%);
            box-shadow: 0 2px 8px rgba(94, 99, 212, 0.08);
        }

        .card-header h3,
        .card-header h4 {
            margin: 0;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid #e0e0e0;
            box-shadow: none;
            transition: border-color 0.2s;
        }

        .form-control:focus {
            border-color: #5e63d4;
            box-shadow: 0 0 0 0.2rem rgba(94, 99, 212, 0.08);
        }

        .btn-primary {
            background: linear-gradient(90deg, #5e63d4 60%, #a084ee 100%);
            border: none;
            border-radius: 12px;
            font-weight: 700;
            padding: 10px 32px;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(94, 99, 212, 0.12);
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #4e54c8 60%, #8f6ed5 100%);
            box-shadow: 0 4px 16px rgba(94, 99, 212, 0.18);
        }

        .alert {
            border-radius: 10px;
        }

        .contact-info p {
            margin-bottom: 0.7rem;
            font-size: 1.08rem;
        }

        @media (max-width: 767px) {
            .contact-container {
                margin: 20px 8px;
            }
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="contact-container">
        <div class="card mb-4">
            <div class="card-header text-white">
                <h3><i class="fas fa-address-card me-2"></i>معلومات التواصل</h3>
            </div>
            <div class="card-body contact-info">
                <p><i class="fas fa-user me-2 text-primary"></i><strong>الاسم:</strong> جميل الحاجي</p>
                <p><i class="fas fa-envelope me-2 text-primary"></i><strong>البريد الإلكتروني:</strong>
                    jamelalhaji@gmail.com</p>
                <p><i class="fas fa-phone me-2 text-primary"></i><strong>الهاتف:</strong> +31 6 58851369</p>
                <p><i class="fas fa-map-marker-alt me-2 text-primary"></i><strong>العنوان:</strong> Werkzijde 60, 'S
                    s-Gravenhage, Netherlands</p>
                <p><i class="fas fa-building me-2 text-primary"></i><strong>الشركة:</strong> SyriaTech</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-white">
                <h4><i class="fas fa-paper-plane me-2"></i>أرسل رسالة</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">تم إرسال رسالتك بنجاح!</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ url('/contact') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">الاسم</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}" required placeholder="أدخل اسمك الكامل">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" required placeholder="أدخل بريدك الإلكتروني">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">الموضوع</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            value="{{ old('subject') }}" required placeholder="أدخل موضوع الرسالة">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">الرسالة</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required placeholder="اكتب رسالتك هنا">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> إرسال</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<div class="container">

    <div class="container-fluid m-0">
        <div class="row p-0 m-0">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark rounded-bottom-4">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">سيريا تك PHP</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="تبديل القائمة">
                            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                        </button>
                        <div class="container-fluid d-flex justify-content-center align-items-center m-0 p-0 fs-5">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white" aria-current="page"
                                            href="{{ route('home') }}">الرئيسية</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('doc') }}">الدليل</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('about') }}">من نحن</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('contact') }}">اتصل بنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <style>
                    .navbar-nav .nav-link.active,
                    .navbar-nav .nav-link:hover {
                        font-weight: bold;
                        color: #ffffff !important;
                        background: rgb(94, 99, 212, 0.7);
                        border-radius: 0.5rem;
                    }
                </style>
            </div>
        </div>
    </div>
</div>

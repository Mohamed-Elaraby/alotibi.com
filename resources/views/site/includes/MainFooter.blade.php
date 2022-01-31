<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="{{ asset('storage/logo_original.jpeg') }}" width="200">
                    </div>
                    <ul>
                        <li><a href="javascript:void(0)">3470 طريق الأمير محمد بن سلمان بن عبدالعزيز، حي الرمال، الرياض 13256 6394،، الرياض 13256، المملكة العربية السعودية</a></li>
                        <li><a href="javascript:void(0)">+966551559252</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>اقسام الموقع</h4>
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="{{ route('site.category', $category -> id) }}">{{ $category -> name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>التواصل الاجتماعى</h4>
                <ul>
                    <li><a href="https://www.instagram.com/alotaibi.est99">instagram</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>الفروع</h4>
                <ul>
{{--                    <li><a href="#">الفرع_1</a></li>--}}
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2022 Alotaibi Marble Co., Ltd. All Rights Reserved.

                        <br>Design By: <a href="https://www.facebook.com/mohamedelsayed300/" target="_blank" title="Mohamed El Sayed">Mohamed El Sayed</a></p>
                    <ul>
                        <li><a target="_blank" href="https://www.instagram.com/alotaibi.est99"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="{{ route('admin.dashboard') }}">تسجيل الدخول</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

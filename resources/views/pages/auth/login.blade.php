<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>BOOM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');

    </script>
</head>

<body id="kt_body" class="bg-dark">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/14-dark.png">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" id="kt_sign_in_form" action="{{ route('login_pro') }}"
                        method="POST">
                        @csrf
                        @if(Session::has('message'))
                            <div
                                class="alert alert-danger alert-block">
                                <strong>{{ Session::get('message') }} </strong>
                </div>
                @endif
                {{-- @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif --}}
                <div class="text-center mb-10">
                    <img alt="Logo"
                        src="https://www.seekpng.com/png/detail/343-3432120_also-available-on-amazon-best-buy-b-h.png"
                        class="h-50px" width="250px" />
                    <div class="text-gray-400 fw-bold fs-4">New Here?
                        <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an
                            Account</a>
                    </div>
                </div>
                <div class="fv-row mb-10">
                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" name="email"
                        autocomplete="off" />
                    {{-- @if ($errors)
                                {{ $errors->first('email') }}
                @else
                    please fill in your email
                    @endif--}}
                    @if(Session::has('errors'))
                        <div class="alert alert-danger alert-block">
                            {{ Session::get('errors')->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="fv-row mb-10">
                    <div class="d-flex flex-stack mb-2">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                        <a href="password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                    </div>
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                        autocomplete="off" />
                    {{-- @if ($errors)
                                {{ $errors->first('password') }}
                @else
                    please fill in your password
                    @endif--}}
                </div>
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Continue</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                </form>
            </div>
        </div>
        <div class="d-flex flex-center flex-column-auto p-10">
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://keenthemes.com/" class="text-muted text-hover-primary px-2">About</a>
                <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
            </div>
        </div>
    </div>
    </div>
    <script>
        var hostUrl = "../../../assets/index.html";

    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}">
    </script>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

</body>

</html>

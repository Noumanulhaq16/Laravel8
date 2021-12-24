<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
< <head>
    <title>BOOM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script>
        (function(w, d, s, l, i) {
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
                    <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <form class="form w-100" method="POST" action="{{ route('registerpro') }}">
                            @csrf
                            <div class="mb-10 text-center">
                                <img alt="Logo"
                                    src="https://www.seekpng.com/png/detail/343-3432120_also-available-on-amazon-best-buy-b-h.png"
                                    class="h-50px" width="250px" />
                                <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                    <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                                    class="h-20px me-3" />Sign in with Google</button>
                            <div class="d-flex align-items-center mb-10">
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-xl-12">
                                    <label class="form-label fw-bolder text-dark fs-6">Name</label>
                                    <input class="form-control form-control-lg form-control-solid" type="text"
                                        placeholder="" name="name" autocomplete="off" />
                                    @if (Session::has('errors'))
                                        <div class="alert alert-danger alert-block">
                                            {{ Session::get('errors')->first('name') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="email"
                                    placeholder="" name="email" autocomplete="off" />
                                @if (Session::has('errors'))
                                    <div class="alert alert-danger alert-block">
                                        {{ Session::get('errors')->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-10 fv-row" data-kt-password-meter="true">
                                <div class="mb-1">
                                    <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="password" autocomplete="off" />
                                        <span
                                            class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                        @if (Session::has('errors'))
                                            <div class="alert alert-danger alert-block">
                                                {{ Session::get('errors')->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center mb-3"
                                        data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                </div>
                                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers
                                    &amp; symbols.</div>
                            </div>
                            <div class="fv-row mb-5">
                                <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="" name="confirm_password" autocomplete="off" />
                                @if (Session::has('errors'))
                                    <div class="alert alert-danger alert-block">
                                        {{ Session::get('errors')->first('confirm_password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="fv-row mb-10">
                                <label class="form-check form-check-custom form-check-solid form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    <span class="indicator-label">Submit</span>
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
                        <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var hostUrl = "../../../assets/index.html";
        </script>
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
        </noscript>
    </body>
    |
    <!--end::Body-->

    <!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/layouts/dark/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Dec 2021 07:56:07 GMT -->

</html>

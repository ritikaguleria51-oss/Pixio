import Checkbox from '@/Components/Checkbox';
import InputError from '@/Components/InputError';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Login({ status, canResetPassword }) {

    const {
        data,
        setData,
        post,
        processing,
        errors,
        reset,
    } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();

        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    return (
        <>
            <Head title="Login" />

            <style>{`

                /* ================================
                   RESET
                ================================= */

                html,
                body,
                #app {
                    margin: 0 !important;
                    padding: 0 !important;
                    width: 100% !important;
                    min-height: 100% !important;
                }

                * {
                    box-sizing: border-box;
                }


                /* ================================
                   MAIN PAGE
                ================================= */

                .pixio-login-page {
                    width: 100%;
                    min-height: 100vh;

                    display: flex;

                    margin: 0;
                    padding: 0;

                    background: #fffaf5;

                    font-family:
                        Arial,
                        Helvetica,
                        sans-serif;
                }


                /* ================================
                   LEFT SIDE
                ================================= */

                .pixio-login-left {
                    position: relative;

                    width: 50%;
                    min-height: 100vh;

                    background: #fff0d7;

                    overflow: hidden;
                }


                /* Left Content */

                .pixio-left-content {
                    position: relative;

                    z-index: 5;

                    padding-top: 105px;
                    padding-left: 10%;
                    padding-right: 20px;
                }


                /* My Account */

                .pixio-account {
                    margin-bottom: 32px;

                    font-size: 16px;
                    font-weight: 500;

                    color: #111;
                }

                .pixio-star {
                    margin-left: 5px;

                    color: #999;
                }


                /* Login Heading */

                .pixio-login-title {
                    margin: 0;

                    font-size: 48px;
                    line-height: 1.1;

                    font-weight: 600;

                    color: #111;

                    letter-spacing: -1px;
                }


                /* Breadcrumb */

                .pixio-breadcrumb {
                    display: flex;

                    align-items: center;

                    gap: 14px;

                    margin-top: 20px;

                    font-size: 16px;

                    color: #111;
                }

                .pixio-breadcrumb a {
                    color: #111;

                    text-decoration: none;
                }

                .pixio-breadcrumb a:hover {
                    text-decoration: underline;
                }

                .pixio-arrow {
                    font-size: 25px;
                    line-height: 1;
                }


                /* ================================
                   WOMAN IMAGE
                ================================= */

                .pixio-woman {
                    position: absolute;

                    left: 7%;
                    bottom: 0;

                    width: 68%;
                    max-width: 560px;

                    z-index: 2;
                }

                
                .pixio-woman img {
                    display: block;
                    width: 100%;
                    height: auto;
                    margin-left: 175px;
                }

                /* ================================
                   RIGHT SIDE
                ================================= */

                .pixio-login-right {
                    width: 50%;
                    min-height: 100vh;

                    display: flex;

                    align-items: center;
                    justify-content: center;

                    padding: 60px 7%;

                    background: #fffaf5;
                }


                /* ================================
                   LOGIN CARD
                ================================= */

                .pixio-login-card {
                    width: 100%;
                    max-width: 565px;

                    padding: 78px 75px 70px;

                    background: #fffaf5;

                    border: 1px solid #222;

                    border-radius: 30px;
                }


                /* Heading */

                .pixio-login-heading {
                    margin: 0;

                    text-align: center;

                    font-size: 30px;
                    line-height: 1.2;

                    font-weight: 600;

                    color: #111;
                }


                /* Subtitle */

                .pixio-login-subtitle {
                    margin-top: 17px;
                    margin-bottom: 38px;

                    text-align: center;

                    font-size: 16px;

                    color: #687080;
                }


                /* ================================
                   STATUS
                ================================= */

                .pixio-status {
                    margin-bottom: 25px;

                    padding: 12px 15px;

                    border-radius: 8px;

                    background: #e8f7ed;

                    color: #168345;

                    font-size: 14px;
                }


                /* ================================
                   FORM
                ================================= */

                .pixio-form-group {
                    margin-bottom: 27px;
                }


                /* Label */

                .pixio-form-label {
                    display: block;

                    margin-bottom: 10px;

                    font-size: 16px;

                    font-weight: 600;

                    color: #111;
                }


                /* Input */

                .pixio-input {
                    display: block;

                    width: 100% !important;
                    height: 54px !important;

                    padding: 0 18px !important;

                    border: 1px solid #222 !important;

                    border-radius: 12px !important;

                    background: #fff !important;

                    color: #111 !important;

                    font-size: 15px !important;

                    outline: none !important;

                    box-shadow: none !important;
                }

                .pixio-input:focus {
                    border-color: #111 !important;

                    outline: none !important;

                    box-shadow: none !important;
                }

                .pixio-input::placeholder {
                    color: #333;

                    opacity: 1;
                }


                /* Error */

                .pixio-error {
                    margin-top: 7px;

                    color: #dc2626;

                    font-size: 13px;
                }


                /* ================================
                   REMEMBER / FORGOT
                ================================= */

                .pixio-login-options {
                    display: flex;

                    align-items: center;

                    justify-content: space-between;

                    gap: 15px;

                    margin-top: 2px;

                    margin-bottom: 32px;
                }


                /* Remember */

                .pixio-remember {
                    display: flex;

                    align-items: center;

                    gap: 9px;

                    color: #687080;

                    font-size: 15px;

                    cursor: pointer;
                }

                .pixio-remember input {
                    width: 19px;
                    height: 19px;
                }


                /* Forgot */

                .pixio-forgot {
                    color: #e11d48;

                    font-size: 15px;

                    text-decoration: none;
                }

                .pixio-forgot:hover {
                    text-decoration: underline;
                }


                /* ================================
                   BUTTONS
                ================================= */

                .pixio-buttons {
                    display: flex;

                    align-items: center;

                    justify-content: center;

                    gap: 14px;
                }


                /* Sign In */

                .pixio-signin {
                    min-width: 145px;
                    height: 50px;

                    padding: 0 25px;

                    border: 1px solid #000;

                    border-radius: 10px;

                    background: #000;

                    color: #fff;

                    font-size: 15px;

                    font-weight: 600;

                    cursor: pointer;

                    transition: all 0.25s ease;
                }

                .pixio-signin:hover {
                    background: #222;
                }

                .pixio-signin:disabled {
                    cursor: not-allowed;

                    opacity: 0.6;
                }


                /* Register */

                .pixio-register {
                    min-width: 145px;
                    height: 50px;

                    padding: 0 25px;

                    display: inline-flex;

                    align-items: center;
                    justify-content: center;

                    border: 1px solid #222;

                    border-radius: 10px;

                    background: transparent;

                    color: #111;

                    font-size: 15px;

                    font-weight: 600;

                    text-decoration: none;

                    transition: all 0.25s ease;
                }

                .pixio-register:hover {
                    background: #111;

                    color: #fff;
                }


                /* ================================
                   TABLET
                ================================= */

                @media (max-width: 1100px) {

                    .pixio-left-content {
                        padding-left: 8%;
                    }

                    .pixio-login-title {
                        font-size: 42px;
                    }

                    .pixio-login-card {
                        padding: 60px 45px;
                    }

                    .pixio-woman {
                        width: 75%;

                        left: 2%;
                    }
                }


                /* ================================
                   MOBILE
                ================================= */

                @media (max-width: 768px) {

                    .pixio-login-page {
                        display: block;

                        min-height: auto;
                    }


                    .pixio-login-left {
                        width: 100%;

                        min-height: 400px;
                    }


                    .pixio-left-content {
                        padding:
                            50px
                            30px
                            0;
                    }


                    .pixio-login-title {
                        font-size: 42px;
                    }


                    .pixio-woman {
                        left: 50%;

                        width: 300px;

                        transform: translateX(-50%);
                    }


                    .pixio-login-right {
                        width: 100%;

                        min-height: auto;

                        padding:
                            50px
                            20px;
                    }


                    .pixio-login-card {
                        padding:
                            50px
                            30px;

                        border-radius: 22px;
                    }
                }


                /* ================================
                   SMALL MOBILE
                ================================= */

                @media (max-width: 480px) {

                    .pixio-login-left {
                        min-height: 350px;
                    }


                    .pixio-left-content {
                        padding:
                            40px
                            25px
                            0;
                    }


                    .pixio-account {
                        margin-bottom: 25px;
                    }


                    .pixio-login-title {
                        font-size: 38px;
                    }


                    .pixio-login-right {
                        padding:
                            35px
                            15px;
                    }


                    .pixio-login-card {
                        padding:
                            40px
                            20px;
                    }


                    .pixio-login-heading {
                        font-size: 27px;
                    }


                    .pixio-login-options {
                        align-items: flex-start;

                        flex-direction: column;

                        margin-bottom: 28px;
                    }


                    .pixio-buttons {
                        flex-direction: column;
                    }


                    .pixio-signin,
                    .pixio-register {
                        width: 100%;
                    }
                }

            `}</style>


            {/* =====================================
                MAIN LOGIN PAGE
            ===================================== */}

            <div className="pixio-login-page">


                {/* =================================
                    LEFT SECTION
                ================================= */}

                <div className="pixio-login-left">


                    {/* Content */}

                    <div className="pixio-left-content">

                        <div className="pixio-account">
                            My Account
                            <span className="pixio-star">
                                ✦
                            </span>
                        </div>


                        <h1 className="pixio-login-title">
                            Login
                        </h1>


                        <div className="pixio-breadcrumb">

                            <Link href="/">
                                Home
                            </Link>

                            <span className="pixio-arrow">
                                ›
                            </span>

                            <span>
                                Login
                            </span>

                        </div>

                    </div>


                    {/* Woman Image */}

                    <div className="pixio-woman">
                        <img
                            src="/images/pic3.png"
                            alt="Login"
                        />
                    </div>

                </div>



                {/* =================================
                    RIGHT SECTION
                ================================= */}

                <div className="pixio-login-right">


                    {/* Login Card */}

                    <div className="pixio-login-card">


                        <h2 className="pixio-login-heading">
                            Login
                        </h2>


                        <p className="pixio-login-subtitle">
                            Welcome, please login to your account
                        </p>



                        {/* Status Message */}

                        {status && (
                            <div className="pixio-status">
                                {status}
                            </div>
                        )}



                        {/* =================================
                            LOGIN FORM
                        ================================= */}

                        <form onSubmit={submit}>


                            {/* EMAIL */}

                            <div className="pixio-form-group">

                                <label
                                    htmlFor="email"
                                    className="pixio-form-label"
                                >
                                    Email Address
                                </label>


                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value={data.email}
                                    className="pixio-input"
                                    autoComplete="username"
                                    autoFocus
                                    placeholder="Email Address"

                                    onChange={(e) =>
                                        setData(
                                            'email',
                                            e.target.value
                                        )
                                    }
                                />


                                <InputError
                                    message={errors.email}
                                    className="pixio-error"
                                />

                            </div>



                            {/* PASSWORD */}

                            <div className="pixio-form-group">

                                <label
                                    htmlFor="password"
                                    className="pixio-form-label"
                                >
                                    Password
                                </label>


                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    value={data.password}
                                    className="pixio-input"
                                    autoComplete="current-password"
                                    placeholder="Password"

                                    onChange={(e) =>
                                        setData(
                                            'password',
                                            e.target.value
                                        )
                                    }
                                />


                                <InputError
                                    message={errors.password}
                                    className="pixio-error"
                                />

                            </div>



                            {/* =================================
                                REMEMBER + FORGOT
                            ================================= */}

                            <div className="pixio-login-options">


                                <label className="pixio-remember">

                                    <Checkbox
                                        name="remember"
                                        checked={data.remember}

                                        onChange={(e) =>
                                            setData(
                                                'remember',
                                                e.target.checked
                                            )
                                        }
                                    />

                                    <span>
                                        Remember Me
                                    </span>

                                </label>



                                {canResetPassword && (

                                    <Link
                                        href={route(
                                            'password.request'
                                        )}

                                        className="pixio-forgot"
                                    >
                                        Forgot Password
                                    </Link>

                                )}

                            </div>



                            {/* =================================
                                BUTTONS
                            ================================= */}

                            <div className="pixio-buttons">


                                {/* SIGN IN */}

                                <button
                                    type="submit"
                                    className="pixio-signin"
                                    disabled={processing}
                                >
                                    {processing
                                        ? 'SIGNING IN...'
                                        : 'SIGN IN'
                                    }
                                </button>



                                {/* REGISTER */}

                                <Link
                                    href={route('register')}
                                    className="pixio-register"
                                >
                                    REGISTER
                                </Link>

                            </div>


                        </form>

                    </div>

                </div>

            </div>
        </>
    );
}
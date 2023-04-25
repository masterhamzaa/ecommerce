<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

    body {
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
        cursor: pointer;
    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    #search {
        font-size: 16px;
        width: 100%;
        line-height: 40px;
        height: 40px;
        padding: 4px 16px;
        margin-top: 30px;
        border: 1px solid #333;
        border-radius: 20px;
        outline: none;
        color: #333;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.2);
    }

    .btnd {
        border-radius: 10px;
        cursor: pointer;
        padding: 5px;
        width: 60%;
        color: rgb(255, 255, 66);
        background-color: rgb(147, 0, 144);
    }

    .btndp {
        border-radius: 10px;
        cursor: pointer;
        padding: 5px;
        width: 6em;
        color: rgb(255, 255, 255);
        background-color: rgb(85, 129, 215);
    }

    .svg-container {
        width: 100%;
        height: 80vh;
        margin: 0 auto;
        resize: both;
        overflow: auto;
    }

    .navbar__buttons-login {
        align-self: center;
        border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
        border-style: solid;
        border-width: 2px;
        box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
        box-sizing: border-box;
        color: #41403e;
        cursor: pointer;
        display: block;
        font-family: Neucha, sans-serif;
        font-size: 1rem;
        line-height: 23px;
        outline: none;
        padding: .75rem;
        text-decoration: none;
        transition: all 235ms ease-in-out;
        border-bottom-left-radius: 15px 255px;
        border-bottom-right-radius: 225px 15px;
        border-top-left-radius: 255px 15px;
        border-top-right-radius: 15px 225px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
    }

    .navbar__buttons-login :hover {
        box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
        transform: translate3d(0, 2px, 0);
    }

    .navbar__buttons-login:focus {
        box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
    }

    .navbar__buttons-register {
        align-self: center;
        border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
        border-style: solid;
        border-width: 2px;
        box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
        box-sizing: border-box;
        color: #41403e;
        cursor: pointer;
        display: block;
        font-family: Neucha, sans-serif;
        font-size: 1rem;
        line-height: 23px;
        outline: none;
        padding: .75rem;
        text-decoration: none;
        transition: all 235ms ease-in-out;
        border-bottom-left-radius: 15px 255px;
        border-bottom-right-radius: 225px 15px;
        border-top-left-radius: 255px 15px;
        border-top-right-radius: 15px 225px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        background-color: #FBDA61;
        background-image: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
    }

    .navbar__buttons-register:hover {
        box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
        transform: translate3d(0, 2px, 0);
    }

    .navbar__buttons-register:focus {
        box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
    }

    #form {
        width: 90%;
        max-width: 730px;
        padding: 10px;
        margin: 30px auto;
        border-radius: 10px;
        box-shadow: 5px 5px 10px rgb(119, 109, 109);
        /* background-image: linear-gradient(rgb(130, 224, 255) 13em, yellow, blue); */
    }

    button[type="submit"] {
        background-color: rgb(134, 203, 249);
        border-radius: 30px;
        color: rgb(255, 255, 255);

    }

    button[type="submit"]:hover {
        background-color: rgb(255, 255, 255);
        color: rgb(134, 203, 249);
    }

    .also {
        background-color: rgb(255, 255, 255);
        border-radius: 30px;
        color: rgb(134, 203, 249);
    }

    .also:hover {
        background-color: rgb(134, 203, 249);
        color: rgb(255, 255, 255);
    }

    .regis {
        background-color: rgb(15, 230, 73);
        border-radius: 30px;
        color: rgb(249, 249, 249);
    }

    .regis:hover {
        color: rgb(15, 230, 73);
        background-color: rgb(249, 249, 249);
    }

    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");

    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif;

        --btnbg: #ffcc00;
        --btnfontcolor: rgb(61, 61, 61);
        --btnfontcolorhover: rgb(255, 255, 255);
        --btnbghover: #ffc116;
        --btnactivefs: rgb(241, 195, 46);


        --label-index: #960796;
        --danger-index: #5bc257;
        /* PAGINATE */
        --link-color: #000;
        --link-color-hover: #fff;
        --bg-content-color: #ffcc00;

    }

    .container-fluid {
        max-width: 1400px;
    }

    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem;
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);
    }

    .card h5 {
        overflow: hidden;
        height: 55px;
        font-weight: 300;
        font-size: 1rem;
    }

    .card h5 a {
        color: black;
        text-decoration: none;
    }

    .card-img-top {
        width: 100%;
        min-height: 250px;
        max-height: 250px;
        object-fit: contain;
        padding: 30px;
    }

    .card h2 {
        font-size: 1rem;
    }

    /* Centered text */
    .label-top {
        position: absolute;
        background-color: var(--label-index);
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase;
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #8bc34a;
        line-height: 90px;
        text-align: center;
        color: white;
    }

    .top-right span {
        display: inline-block;
        vertical-align: middle;
    }

    .aff-link {
        /* text-decoration: overline; */
        font-weight: 500;
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px;
    }

    .bold-btn {
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px;
    }

    .box .btn {
        font-size: 1.5rem;
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px;
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px;
        }
    }

    /* START BUTTON */
    .btn-warning {
        background: var(--btnbg);
        color: var(--btnfontcolor);
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
        border-radius: 100px;
    }

    .btn-warning:hover {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    .btn-check:focus+.btn-warning,
    .btn-warning:focus {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    .btn-warning:active:focus {
        box-shadow: 0 0 0 0.25rem var(--btnactivefs);
    }

    .btn-warning:active {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    /* END BUTTON */
    .bg-success {
        font-size: 1rem;
        background-color: var(--btnbg) !important;
        color: var(--btnfontcolor) !important;
    }

    .bg-danger {
        font-size: 1rem;
    }

    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray;
    }

    .amz-hp {
        font-size: .7rem;
        font-weight: 600;
        color: darkgray;
    }

    .fa-question-circle:before {
        /* content: "\f059"; */
        color: darkgray;
    }

    .fa-heart:before {
        color: crimson;
    }

    .fa-chevron-circle-right:before {
        color: darkgray;
    }

    input {
        outline: none !important;
        box-shadow: none !important;
    }
</style>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta name="description" content="Induspro || Industrial,Engineering,Factorial HTML5 Template" />
  <meta name="keywords"
    content="chemicals, contractor, energy, engineering, factory, gas, heavy industries, industry, machinery, manufacturing, oil, plant, production, products, resources" />
  <meta name="author" content="Theme Earth" />
  <title>Helix - home page</title>
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/meanmenu.min.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <style>
    .overlay {
      position: fixed;
      /*   display: none;*/
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 2;
      cursor: pointer;
    }

    .text-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 35px;
      color: white;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    }

    .text-label {
      margin-top: 20%;
      margin-left: 7%;
      position: absolute;
    }

    .navbar-side {
      height: 100%;
      width: 25%;
      position: fixed;
      top: 0;
      right: 0;
      padding: 0;
      list-style: none;
      border-left: 1px solid #707072;
      background-color: rgba(0, 0, 0, 0.9);
      overflow-y: scroll;
      z-index: 1000;
    }

    .navbar-side-item {
      padding: 1.5rem 0;
      margin: 0;
      /* border-bottom: 1px solid #ccc;*/
      height: 5rem;
    }

    /*.side-link-login, .side-link-register,*/

    .side-link-search {
      display: none !important;
    }

    .side-link {
      padding-left: 2rem;
      color: #fff;
      background: transparent;
      color: #fff !important;
      text-decoration: none !important;
      font-weight: 600;
      font-size: 15px;
    }

    .submenu-side-bar {
      padding: 0.75rem 2.25rem !important;
      font-size: 13px;
    }

    .navbar-side {
      // other code omitted
      -webkit-transform: translateX(100%);
      -ms-transform: translateX(100%);
      transform: translateX(100%);
      -webkit-transition: 300ms ease;
      transition: 300ms ease;
    }

    .reveal {
      -webkit-transform: translateX(0%);
      -ms-transform: translateX(0%);
      transform: translateX(0%);
      -webkit-transition: 300ms ease;
      transition: 300ms ease;
    }

    .menubarrow {
      padding-top: 22.5px;
    }

    .menubarrow .header-txt-sm {
      letter-spacing: 0px !important;
      font-size: 15px;
    }

    .list-group-item {
      /* padding: 0.75rem 1.25rem;  */
      padding: 0.45rem 2rem;
      background-color: transparent;
      /* border: 1px solid rgb(112, 112, 114);*/
      color: #fff !important;
      text-decoration: none !important;
      height: 40px;
    }

    .products-sidebar {
      display: none;
    }

    .rowCustom {
      display: table;
      width: 100%;
      table-layout: fixed;
      border-spacing: 10px;
      margin: auto;
    }

    .columnCustom {
      display: table-cell;
      background-color: rgba(240, 240, 240, 0.6);
      /*#f0f0f0*/
      border: 1px solid #dbdbdb;
    }

    .rowCustomProd {
      display: table;
      width: 100%;
      table-layout: fixed;
      /* border-spacing: 10px;*/
      margin: auto;
      display: none;
    }

    .columnCustomProd {
      display: table-cell;
      background-color: #cdd4d7;
    }

    .brandsDiv {
      /*padding-right: 0px;*/
    }

    .ulCompany {
      list-style-type: none;
    }

    .instaFeeds {
      height: 430px;
      max-height: 450px;
      overflow-y: scroll;
      width: 100%;
      position: absolute;
    }

    .iframeVideo {
      height: 430px;
      max-height: 450px;
      overflow-y: scroll;
      width: 100%;
      position: absolute;
    }

    .fb-comments,
    .fb-comments span,
    .fb-comments.fb_iframe_widget span iframe {
      width: 100% !important;
    }

    .mainMenu {
      /* border-bottom: 1px solid #707072;*/
    }

    .mainMenu a[aria-expanded="true"] {
      background-color: #ea5024;
      color: #fff !important;
      border-radius: 0;
    }

    .carousel-control-next,
    .carousel-control-prev {
      top: 20% !important;
      /*display: none;*/
    }

    .carousel .carousel-item .carousel-inner {
      height: 850px !important;
    }

    .carousel .carousel-control {
      visibility: hidden !important;
    }

    .carousel:hover .carousel-control {
      visibility: visible !important;
    }

    /* .parallax{
      -moz-background-size: auto;
    -webkit-background-size: auto;
    background-attachment: scroll;
    background-position: top;
    background-size: auto;
    height: auto !important;
  }*/

    .parallax {
      background-image: url("https://www.bonus.in/assets/images/slide-5.jpg");
      /* min-height: 300px; */
      height: 45vh;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .navbar-toggler-right {
      margin-left: -85% !important;
    }

    .footerLinkDiv {
      font-size: 12px !important;
    }

    .rowCustomBrand {
      background-color: #cacaca;
      padding: 10px 20px 10px 20px;
      width: 100%;
      margin: 0;
    }

    .rowCustomProduct {
      background-color: #fff;
      padding: 10px 20px 10px 20px !important;
      width: 100%;
      margin: 0;
    }

    .rowCustomMakeInInd {
      background-color: #fff;
      padding: 0 !important;
      width: 100%;
      margin: 0;
    }

    .homepageImage {
      /* min-height: 400px;*/
      width: 100%;
      object-fit: cover;
    }

    .madeInIndiaImageMob {
      display: none;
    }

    .madeInIndiaSpan {
      color: #000;
      position: absolute;
      margin-left: 80px;
      margin-top: 5%;
      left: 0;
    }

    .madeInIndiaText1 {
      font-size: 35px;
      line-height: 1;
      font-weight: 600;
      color: #ffe0b1;
    }

    .madeInIndiaText3 {
      margin-top: 50px;
      line-height: 1;
      font-size: 21px;
      letter-spacing: initial;
      max-width: 50%;
      color: #fff;
    }

    .madeInIndiaText2 {
      font-size: 55px;
      line-height: 1;
      font-weight: 600;
      color: #ffe0b1;
    }

    .useGoodHandleText2 {
      font-size: 17px;
      font-weight: 600;
    }

    .useGoodHandleText1 {
      font-weight: 600;
      line-height: 1;
      font-size: 35px;
    }

    .featuredProductBtn {
      font-size: 15px;
      background-color: #f2663f;
      max-width: 150px;
      text-align: center;
      padding: 5px;
      margin-top: 30px;
      color: #fff;
    }

    .featuredProductBtn1 {
      margin-top: 10px;
    }

    .featuredProductBtn2 {
      margin-top: 35px;
    }

    .featuredProductBtn3 {
      margin-top: 135px;
      padding: 8px;
    }

    .overlay-1 {
      padding-top: 56%;
      padding-left: 15px;
      background-color: transparent;
    }

    .overlay-2 {
      padding-top: 26%;
      padding-left: 50%;
      background-color: transparent;
      color: #8e727a;
    }

    .overlay-3 {
      padding-top: 30%;
      padding-left: 28%;
      background-color: transparent;
      color: #33485d;
      font-size: 15px;
      line-height: 1;
    }

    .featuredProductText {
      font-size: 25px;
    }

    #navbarSideButton {
      background-color: transparent !important;
      border: 0 !important;
      text-decoration: none;
    }

    .homeBranLogos {
      width: 100%;
      object-fit: cover;
      height: 367px;
      background-color: #f2f2f2;
    }

    #demo {
      margin-top: -5.5% !important;
    }

    .mainJobsContainer {
      display: block;
    }

    .mobJobsContainer {
      display: none;
      margin-bottom: -30px;
    }

    #navbarSideButton1 {
      float: left;
    }

    @media screen and (max-width: 1950px) {
      #demo {
        margin-top: -6% !important;
      }
    }

    @media screen and (max-width: 1800px) {
      #demo {
        margin-top: -6.5% !important;
      }
    }

    @media screen and (max-width: 1500px) {
      #demo {
        margin-top: -10% !important;
      }
    }

    @media screen and (max-width: 1486px) {
      .navbar-toggler-right {
        margin-left: -70% !important;
      }

      .overlay-1 {
        padding-top: 50%;
      }

      .overlay-2 {
        padding-top: 24%;
      }

      .overlay-3 {
        padding-top: 27%;
      }

      /*.header-txt-sm { font-size: 13px !important;}     */
    }

    @media screen and (max-width: 1414px) {
      .navbar-toggler-right {
        margin-left: -54% !important;
      }
    }

    @media screen and (max-width: 1390px) {
      .navbar-toggler-right {
        margin-left: -43% !important;
      }
    }

    @media screen and (max-width: 1268px) {
      /* .header-txt-sm{font-size: 12px !important;}*/
    }

    @media screen and (max-width: 1260px) {
      .menubar-products {
        font-size: 14px !important;
      }

      .menubarrow .header-txt-sm {
        font-size: 14px;
      }
    }

    @media screen and (max-width: 1200px) {

      /* .social-btn{
    max-width: 60% !important;
  }*/
      .padlockdiv {
        margin-top: 62% !important;
      }

      /*.menubar-products{font-size: 14px !important;}*/
    }

    @media screen and (max-width: 1195px) {
      .menubarrow .header-txt-sm {
        font-size: 13px;
      }

      .madeInIndiaText3 {
        font-size: 18px !important;
      }

      .item {
        width: 31% !important;
      }

      .homeBranLogos {
        height: 345px;
      }
    }

    @media screen and (max-width: 1152px) {
      .header-txt-sm {
        margin: 0px 5px 0px 5px !important;
      }

      .homeBranLogos {
        height: 300px;
      }
    }

    @media screen and (max-width: 1106px) {
      .header-txt-sm {
        font-size: 12px !important;
      }
    }

    @media screen and (max-width: 1048px) {
      .header-txt-sm {
        font-size: 11.5px !important;
        letter-spacing: 0.5px;
      }
    }

    @media screen and (max-width: 1085px) {
      .navbar-toggler-right {
        margin-left: -20% !important;
      }

      /* .header-txt-sm{font-size: 10px !important;}*/
      /*.social-btn{
    max-width: 65% !important;
  }*/
      /*.menubar-products{font-size: 12px !important;}*/
    }

    @media screen and (max-width: 1061px) {
      .menubar-products {
        font-size: 13px !important;
      }

      /*  .menubar-products{  font-size: 11px !important;
    padding-top: 3px;}*/
      .text-label {
        font-size: 25px;
      }

      /* .menubar-products{font-size: 12px !important;}*/
      /* .header-txt-sm {  
      font-size: 66% !important;
    } */
    }

    @media screen and (max-width: 1050px) {

      /*  .header-txt-sm{font-size: 10px !important;}*/
      .menubar-products {
        font-size: 11px !important;
      }

      /*  .menubar-products{  font-size: 11px !important;
    padding-top: 3px;}*/
      /*   .text-label{    font-size: 25px;}*/
      /* .menubar-products{font-size: 12px !important;}*/
      /*.header-txt-sm {  
      font-size: 66% !important;
    }  */
    }

    @media screen and (max-width: 1033px) {
      /*.menubar-products{font-size: 10.5px !important;}*/
    }

    @media screen and (max-width: 1025px) {

      /* .menubar-products{font-size: 10.5px !important;}*/
      /* .about{top: 56% !important;}*/
      .navbar-side {
        width: 25%;
      }
    }

    @media screen and (max-width: 992px) {
      .navbar-toggler-right {
        margin-left: 15px !important;
      }

      /*.social-btn{
    max-width: 73% !important;
  }*/
      .padlockdiv {
        margin-top: 67% !important;
      }

      /* .menubar-products{font-size: 12px;}*/
      .navbar-side {
        width: 30%;
      }

      .side-link-login,
      .side-link-register,
      .side-link-search {
        display: block !important;
      }

      .loginRegister {
        display: none;
      }

      .header-logo {
        height: 60px;
        margin-left: 0px;
      }

      .homeBranLogos {
        height: 250px;
      }
    }

    @media screen and (max-width: 850px) {

      /*.social-btn{
    max-width: 80% !important;
  }*/
      .padlockdiv {
        margin-top: 72% !important;
      }

      .menubar-products {
        font-size: 14px;
      }
    }

    @media screen and (max-width: 774px) {

      /*.social-btn{  max-width: 90% !important; }*/
      /*	.about-text{max-width:75% !important;}*/
      /*	.about{display: none;}*/
      .banner h2 {
        font-size: 30px !important;
      }

      /* .menubar-products{font-size: 8.3px!important;}*/
      .menubarrow {
        padding-top: 22.5px;
      }

      .navbar-side {
        width: 35%;
      }

      .padlockdiv {
        margin-top: 77% !important;
      }

      .products-sidebar {
        display: block;
      }

      /* #navbarSideButton{margin-top: -9% !important; margin-left:100%  !important; position: absolute;}*/
      #navbarSideButton {
        margin-top: -15% !important;
        margin-left: 36% !important;
        position: absolute;
      }

      .overlay-1 {
        padding-top: 99%;
      }

      .overlay-2 {
        padding-top: 40%;
      }

      .overlay-3 {
        padding-top: 55%;
      }

      .useGoodHandleText1 {
        font-size: 23px !important;
      }

      .madeInIndiaText3 {
        font-size: 16px !important;
        margin-top: 5px;
        max-width: 70%;
      }

      .footerLinkDiv {
        font-size: 7px !important;
      }
    }

    @media screen and (max-width: 768px) {
      .menubar {
        display: none;
      }

      #navbarSideButton {
        margin-top: -9% !important;
        margin-left: 100% !important;
        position: absolute;
      }

      .padlockdiv {
        margin-top: 38% !important;
      }
    }

    @media screen and (max-width: 746px) {
      .search-mobile {
        display: block !important;
        margin-top: -35px !important;
        right: 10px !important;
      }
    }

    @media screen and (max-width: 670px) {
      .text-label {
        font-size: 20px;
      }

      .padlockdiv {
        margin-top: 85% !important;
      }
    }

    @media screen and (max-width: 650px) {

      /* .social-btn{
    max-width: 97% !important;
  }*/
      .footerLinkDiv {
        font-size: 11px !important;
      }
    }

    @media screen and (max-width: 600px) {
      #navbarSideButton1 {
        float: right;
      }

      /*.rowCustomProduct{
    display: table-row;
  }*/
      .fb-social-btn {
        position: relative;
        margin-top: -40px;
      }

      /*  .social-btn{
    max-width: 60% !important;
  }*/
      .search-btn {
        right: 40px !important;
        width: 40px !important;
      }

      .close-btn {
        width: 40px !important;
      }

      .search-mobile {
        display: block !important;
        margin-top: -35px !important;
        right: 10px !important;
      }

      .search-web {
        display: none;
      }

      .padlockdiv {
        margin-top: 45% !important;
      }

      .rowCompanyAbout {
        margin: 0px !important;
      }

      /*  .rowProd
{
display: none;
}*/
      .rowCustomProd {
        display: table;
        width: 100%;
        table-layout: fixed;
        /* border-spacing: 10px;*/
        margin: auto;
        margin-top: -1px;
      }

      .columnCustomProd {
        display: table-cell;
        background-color: #cdd4d7;
      }

      .social-row {
        margin-top: 10px !important;
      }

      .social-instagram {
        margin-top: 10px !important;
      }

      .social-youtube {
        margin-top: 10px !important;
      }

      .footerLinkDiv {
        padding: 0px;
        margin-left: -24px;
      }

      .rowCustom {
        display: block;
        width: 100%;
        table-layout: unset;
        border-spacing: 10px;
        margin: auto;
      }

      .columnCustom {
        display: block;
        /*  background-color: #cdd4d7;*/
        margin: 10px 0px 10px 0px;
      }

      .ulCompany {
        padding-left: 0px;
        font-size: 20px;
        margin-top: 20px;
      }

      .aboutIcon {
        text-align: left !important;
      }

      .brandsDiv {
        padding-right: 15px;
      }

      .carousel .carousel-item .carousel-inner {
        height: 550px !important;
        object-fit: cover !important;
      }

      .carousel .carousel-item {
        height: 550px !important;
        object-fit: cover !important;
      }

      .carousel-inner img {
        height: 550px;
        object-fit: cover;
      }

      /*.about-text{max-width:75% !important;}*/
      .carousel-text {
        top: 40% !important;
      }

      .carousel-text h1 {
        font-size: 25px !important;
      }

      .about {
        left: 46% !important;
        top: 75% !important;
      }

      .banner h2 {
        font-size: 30px !important;
      }

      #countdown {
        font-size: 10px !important;
      }

      .navbar-side {
        width: 60%;
      }

      .menubarrow {
        padding-top: 0 !important;
      }

      .navbar-side {
        width: 75% !important;
      }

      .item_box {
        height: 150px !important;
      }

      .carousel {
        margin-top: 10%;
      }

      .nav-bg {
        min-height: 90px !important;
      }

      .header-logo {
        float: left;
        width: unset;
        margin-left: 20px;
      }

      .footermargin {
        margin-left: 0px !important;
      }

      .madeInIndiaSpan {
        padding: 20px;
        position: relative;
        margin-left: unset;
        background-color: #090907;
        margin-bottom: -30px;
      }

      .madeInIndiaText2 {
        font-size: 35px;
      }

      .madeInIndiaText2 {
        font-size: 45px;
      }

      .madeInIndiaText3 {
        font-size: 20px;
        margin-top: 40px;
        max-width: 100%;
        letter-spacing: unset;
      }

      .homepageImage {
        object-fit: contain;
      }

      .madeInIndiaImageMob {
        display: block;
      }

      .madeInIndiaImage {
        display: none;
      }

      .footericon {
        margin-top: 20px;
      }

      .formHeadings {
        font-size: 14px !important;
      }

      .maincategoryheading {
        font-size: 28px !important;
      }

      .featuredProductText {
        font-size: 17px;
      }

      .featuredProductBtn {
        font-size: 12px;
        max-width: 110px;
      }

      .featuredProductBtn1 {
        margin-top: 17px !important;
        max-width: 110px;
      }

      .featuredProductBtn2 {
        margin-top: 35px !important;
      }

      .featuredProductBtn3 {
        margin-top: 95px !important;
      }

      .mainJobsContainer {
        display: none;
      }

      .mobJobsContainer {
        display: block;
      }
    }

    @media screen and (max-width: 580px) {

      /*  #navbarSideButton{margin-top: -16% !important; margin-left:90%  !important; }*/
      #navbarSideButton {
        margin-top: -9% !important;
        margin-left: 100% !important;
      }
    }

    @media screen and (max-width: 570px) {
      #navbarSideButton {
        margin-top: -13% !important;
        margin-left: 90% !important;
      }

      .search-mobile {
        margin-top: -83px !important;
        right: 50px !important;
      }
    }

    @media screen and (max-width: 515px) {
      #navbarSideButton {
        margin-top: -13% !important;
      }

      .search-mobile {
        margin-top: -83px !important;
        right: 50px !important;
      }
    }

    @media screen and (max-width: 500px) {
      .padlockdiv {
        margin-top: 50% !important;
      }
    }

    @media screen and (max-width: 475px) {
      #navbarSideButton {
        margin-top: -15% !important;
      }

      .search-mobile {
        margin-top: -86px !important;
      }
    }

    @media screen and (max-width: 420px) {
      .search-mobile {
        margin-top: -85px !important;
      }

      .padlockdiv {
        margin-top: 57% !important;
      }

      #navbarSideButton {
        margin-top: -20% !important;
        margin-left: 90% !important;
      }

      .parallax {
        height: 25vh !important;
      }
    }

    @media screen and (max-width: 405px) {

      /* .search-mobile {
    margin-top: -75px !important;
  }*/
      #navbarSideButton {
        margin-top: -20% !important;
        margin-left: 88% !important;
      }

      #navbarSideButton.scrolled {
        margin-top: -20% !important;
      }

      .useGoodHandleText2 {
        font-size: 15px;
        font-weight: 600;
      }

      .useGoodHandleText1 {
        font-weight: 600;
        font-size: 20px !important;
        line-height: 1;
      }

      .overlay-1 {
        padding-top: 60%;
      }

      .overlay-2 {
        padding-top: 30%;
      }

      .overlay-3 {
        padding-top: 45%;
      }

      .featuredProductBtn1 {
        margin-top: 25px;
      }

      .featuredProductBtn2 {
        margin-top: 105px;
      }

      .featuredProductBtn3 {
        margin-top: 125px;
      }
    }

    @media screen and (max-width: 320px) {
      .featuredProductBtn2 {
        margin-top: 70px;
      }

      .scrollerImageText {
        font-size: 14px !important;
      }

      .navbar-side {
        width: 90% !important;
      }

      .header-logo,
      .header-logo.scrolled {
        height: 46px !important;
      }
    }

    .help-inline {
      color: red !important;
    }

    /* search start  */

    .search-inline {
      top: 100%;
      height: 50px;
      width: 100%;
      left: 0;
      padding-left: 15px;
      padding-right: 15px;
      /*  top: 0;
        height: 10%;*/
      position: absolute;
      opacity: 0;
      visibility: hidden;
      background-color: #dbdbdb;
      z-index: 9;
      transition: all 0.5s ease-in-out;
    }

    .search-inline.search-visible {
      opacity: 1;
      visibility: visible;
      animation: fadeInDown 0.4s ease-in-out;
    }

    .search-inline button[type="submit"] {
      position: absolute;
      right: 52px;
      top: 0;
      background-color: transparent;
      border: 0px;
      top: 0;
      right: 80px;
      padding: 0px;
      cursor: pointer;
      width: 80px;
      height: 99%;
      background: #dbdbdb;
      color: #000;
    }

    .search-inline .form-control {
      border: 0px;
      padding-left: 0;
      font-size: 1rem;
      position: absolute;
      left: 1%;
      top: 0;
      height: 100%;
      width: 99%;
      font-family: "Montserrat", sans-serif;
      font-weight: 700;
      outline: none;
    }

    .search-inline .search-close {
      position: absolute;
      top: 0;
      right: 0;
      color: #616161;
      width: 80px;
      height: 100%;
      text-align: center;
      display: table;
      background: #dbdbdb;
      text-decoration: none;
    }

    .search-inline .search-close i {
      display: table-cell;
      vertical-align: middle;
    }

    .form-control1 {
      display: block;
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 1.5rem;
      line-height: 1.5;
      color: #495057;
      background-color: #dbdbdb;
      background-clip: padding-box;
      border: 1px solid #efefef;
      border-radius: 0.25rem;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .search-inline input:focus {
      outline: none;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translate3d(0, -20%, 0);
      }

      to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
      }
    }

    .search-mobile {
      color: #000;
      position: absolute;
      margin-top: -88px;
      right: 45px;
      font-size: 35px;
      display: none;
    }

    .search-web {
      display: block;
    }

    .social-btn {
      width: 60px;
      /*border: 1px solid #acacac;*/
      border-radius: 5px;
      font-weight: 600;
      cursor: pointer;
      /*  background-color: #f0f0f0;*/
      margin-bottom: 2px;
      margin-left: 0px;
      font-size: 14px;
      color: #666666;
      margin-top: 7px;
    }

    .social-icon {
      height: 40px;
      margin-right: 5px;
    }

    .noselect {
      -webkit-touch-callout: none;
      /* iOS Safari */
      -webkit-user-select: none;
      /* Safari */
      -khtml-user-select: none;
      /* Konqueror HTML */
      -moz-user-select: none;
      /* Firefox */
      -ms-user-select: none;
      /* Internet Explorer/Edge */
      user-select: none;
      /* Non-prefixed version, currently
          supported by Chrome and Opera */
    }

    .page-header {
      margin-bottom: 20px;
      border-bottom: 1px solid #dbdbdb;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    a:hover {
      color: inherit;
      /* color:#00A0C6; */
      text-decoration: none;
      cursor: pointer;
    }

    .nav-bg.scrolled {
      background-color: rgba(0, 0, 0, 1);
      /*box-shadow: 1px 2px 4px #9e9e9e !important; */
      transition: background-color 200ms linear;
      color: #fff;
      height: 70px !important;
      min-height: 70px;
    }

    .nav-bg {
      color: #fff;
      background-color: rgba(0, 0, 0, 1);
      box-shadow: 1px 2px 4px #9e9e9e;
      min-height: 100px;
    }

    .search-icon-mob.scrolled {
      color: #fff;
    }

    .header-logo.scrolled {
      content: url("https://www.bonus.in/assets/images/bonus_logo_orange.png");
      height: 60px;
      /* margin-top: -9px;
        margin-left: 10px;*/
    }

    .menubartop.scrolled {
      display: none;
    }

    .menubarrow.scrolled {
      padding-top: 10.5px;
    }

    .search-icon-mob {
      color: #fff;
    }

    /*navbar-fixed-top.scrolled {
background-color: #fff !important;
transition: background-color 200ms linear;
}

.navbar-fixed-top {
background-color: #fff !important;
}*/

    .item_box {
      height: 190px;
    }

    .photo-thumb {
      width: 100%;
      height: auto;
      float: left;
      border: thin solid #d1d1d1;
      margin: 0 1em 0.5em 0;
      float: left;
    }

    .dropdown:hover>.dropdown-menu {
      display: block;
    }

    .dropdown>.dropdown-toggle:active {
      /*Without this, clicking will make it sticky*/
      pointer-events: none;
    }

    .dropdown-toggle::after {
      display: none;
    }

    .dropdown-menu {
      margin-top: -2px;
      /*display: block;*/
      padding: 0;
      /* border-color: #002f41;*/
      background-color: #333;
      padding: 5px;
    }

    .dropdown-menu li {
      /* padding-left: 10px;  color: #002f41; */
      /*border-bottom: 1px solid #dbdbdb;*/
      /*  border-width: 1px 1px 1px 0px;*/
      /*  color: #fff;*/
      color: #ccc;
      position: relative;
      padding-left: 10px;
      display: block;
      line-height: 28px;
      font-size: 14px;
    }

    .dropdown-menu.multi-column {
      width: 500px;
    }

    .dropdown-menu.multi-column .dropdown-menu {
      display: block !important;
      position: static !important;
      margin: 0 !important;
      border: none !important;
      box-shadow: none !important;
      min-width: 100px;
    }

    /*.sub-menu:hover:after{
  content: "";
  position: absolute;
  top: 42px;
  left: 50%;
  margin-left: -15px;
  width: 0px;
  height: 0px;
  margin: 0px auto;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #333;
  z-index: 9000;
}*/

    /*.sub-menu:hover:before .dropdown-toggle a{
  content: "";
  position: absolute;
  top: 42px;
  left: 50%;
  margin-left: -15px;
  width: 0px;
  height : 0px;
  margin: 0px auto;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #333;
  z-index: 9000;
}*/

    .sub-menu a:hover:after {
      content: "";
      position: absolute;
      top: 41px;
      left: 50%;
      margin-left: -15px;
      width: 0px;
      height: 0px;
      margin: 0px auto;
      border-left: 15px solid transparent;
      border-right: 15px solid transparent;
      border-bottom: 15px solid #fff;
    }

    .sub-menu a:hover:before {
      content: "";
      position: absolute;
      top: 40px;
      left: 50%;
      margin-left: -15px;
      width: 0px;
      height: 0px;
      margin: 0px auto;
      border-left: 15px solid transparent;
      border-right: 15px solid transparent;
      border-bottom: 15px solid #333;
      z-index: 9000;
    }

    .submenu-div:hover:after {
      content: "";
      position: absolute;
      top: -14px;
      left: 45px;
      margin-left: -15px;
      width: 0px;
      height: 0px;
      margin: 0px auto;
      border-left: 15px solid transparent;
      border-right: 15px solid transparent;
      border-bottom: 15px solid #333;
      z-index: 9000;
    }

    .dropdown .dropdown-menu {
      /*  display: block !important;*/
      padding: 12px;
      margin-top: 28px;
    }

    .dropdown a:hover,
    .header-txt-sm a:hover {
      color: #f2663f;
    }

    .modal {
      z-index: 999999 !important;
    }

    /*nav ul li{
  list-style:none;
  float:left;
  padding-right:20px;
}
nav ul li a{
  text-decoration:none;
  color:#222;
  background-color:#ccc;
  padding:4px 5px;
}*/

    .vertical-alignment-helper {
      display: table;
      height: 100%;
      width: 100%;
      pointer-events: none;
    }

    .vertical-align-center {
      /* To center vertically */
      display: table-cell;
      vertical-align: middle;
      pointer-events: none;
    }

    .modal-content {
      /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
      width: inherit;
      max-width: inherit;
      /* For Bootstrap 4 - to avoid the modal window stretching full width */
      height: inherit;
      /* To center horizontally */
      margin: 0 auto;
      pointer-events: all;
    }

    .modal-input {
      width: 100%;
      border: 2px solid #6d6e71;
      padding: 3px;
      margin-bottom: 10px;
      border-radius: 0;
    }

    .showSweetAlert {
      z-index: 9999999 !important;
      border: 1px solid #28a745 !important;
    }

    .navbar-toggler-right1 {
      font-size: 30px;
      /*margin-top: -15px;
    margin-left: 10px;*/
      border: 0;
      background-color: rgb(0 0 0 / 0%);
      text-decoration: none;
      cursor: pointer;
      outline: none;
    }
  </style>
</head>

<body class="home-v1">
  <script src="../../../../widget-v4.tidiochat.com/1_55_0/static/js/render.9bb1700b21f8039b8acf.js" async></script>
  <div id="preloader">
    <div id="preloader-status"></div>
  </div>
  <header>
    <div class="header-top-one">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="header-left">
              <ul>
                <li><i class="fa fa-phone"></i>+91-9358217330, +91-8433857872 </li>
                <li><i class="fa fa-envelope"></i>helix@gmail.com</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="header-right-div">
              <div class="soical-profile">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/Helix-International-573250619540863"><i
                        class="fa fa-facebook"></i></a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hd-sec">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 phone-layout-logo">
            <a href="index-2.html"><img src="images/logo-o.png" alt="" /></a>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-8 logo-area">
            <div class="logo">
              <a href="index.html"><img src="images/logo-o.png" alt="" style="max-width: 258px; height: auto" /></a>
            </div>
          </div>
          <div class="mobile-nav-menu"></div>
          <div class="col-md-8 col-sm-10 menu-left">
						<div class="menu">
							<nav id="main-menu" class="main-menu">
								<ul>
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="product-hardware.html">Products</a>
										<ul>
											<li><a href="product-hardware.html">Hardware</a>
												<ul>
													<li><a href="brass-door-kit.html">Bras Door Kits</a></li>
													<li><a href="brass-pull-handle.html">Brass Pull Handles</a></li>
													<li><a href="brass-cabinet-handle.html">Brass
															Cabinet Handles</a></li>
													<li><a href="brass-door-stoper.html">Brass
															Door Stopper</a></li>
													<li><a href="brass-curtain-bracket.html">Brass
															Curtain Brackets</a></li>
													<li><a href="brass-door-knocker.html">Brass
															Door Knockers</a></li>
													<!-- <li><a href="">Brass
															Bracket Bell</a></li> -->
													<li><a href="brass-dome.html">Brass
															Dome Bell</a></li>
													<li><a href="brass-artware.html">Brass Artware</a></li>
													<li><a href="brass-door-chain.html">Brass
															Door Chain</a></li>
													<li><a href="brass-chest-handle.html">Brass
															Chest Handles</a></li>

													
												</ul>
											</li>
											<li><a href="bathroom-fitting.html">Bathroom
													Fitting</a>
												<ul>
													<li><a href="squaro-series.html">Squaro
															Series</a></li>
													<li><a href="zodia-series.html">Zodia
															Series</a></li>
													<li><a href="crox-series.html">Crox
															Series</a></li>
													<li><a href="rosta-series.html">Rosta
															Series</a></li>
													<li><a href="roxa-series.html">Roxa
															Series</a></li>
													<li><a href="elite-series.html">Elite
															Series</a></li>
													<li><a href="corsa-series.html">Corsa
															Series</a></li>
													<li><a href="radley-series.html">Radlery
															Series</a></li>
													<li><a href="sheko-series.html">Sheko
															Series</a></li>
													<li><a href="solo-series.html">Solo
															Series</a></li>
													<li><a href="s-ron-series.html">S-Ron
															Series</a></li>
													<li><a href="sigma-series.html">Sigma
															Series</a></li>
													<li><a href="quanto-series.html">Quanto
															Series</a></li>
													<li><a href="kasa-series.html">Kasa
															Series</a></li>
													<li><a href="lodgy-series.html">Lodgy
															Series</a></li>
													<li><a href="lorie-series.html">Lorie
															Series</a></li>
													<li><a href="optima-series.html">Optima
															 Series</a></li>
													<li><a href="alfa-series.html">Alfa
															Series</a></li>
													<li><a href="conti-base.html">Conti Base
															</a></li>
													<!-- <li><a href="product-category.php?id=58&type=end-category">Shelf
														</a></li> -->
													<li><a href="towel-rod-series.html">Towel
															Rod</a></li>
												</ul>
											</li>
											<li><a href="multi-point-hook.html">Multi Point
													Hook</a>
												<ul>
													<li><a href="multi-point-hook.html">Multiple
															Hook</a></li>
												</ul>
											</li>
										</ul>
									</li>

									<!-- <li><a href="catalogue.html">E-Catalogue</a></li> -->
									<li><a href="contact-us.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
          <div class="col-md-2 col-sm-2 download-button-area">
            <div class="download-button">
              <a href="#">LOVE HELIX</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="pagehding-sec">
    <div class="pagehding-shape"></div>
    <div class="images-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-heading">
            <h1>Hardware</h1>
          </div>
          <div class="breadcrumb-list">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="product-hardware.html">Hardware</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>






  <div class="container">
    <div class="row">
      <div class="col-md-8"></div>
      <div class="row" style="background-color:#ffffff;">


        <style>
          .show {
            display: block;
          }



          /* Style the buttons */

          .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            text-decoration: none;
            border: 2px solid #929497;
          }

          .btn:hover {
            background-color: #ddd;
          }



          .card {

            transition: 0.3s;
            overflow: hidden;
            border-radius: 0;
            border: 1px solid #f2663f;
          }

          .productname {
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 600;
          }

          .products {
            font-size: 20px !important;
          }

          .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: contain;
          }

          .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
          }

          .container {
            padding: 2px 16px;
          }

          .half-circle {
            width: 80px;
            height: 40px;
            background-color: #ce1126;
            border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px;
            border-top: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
          }

          /** { box-sizing: border-box; }
        
        body { font-family: sans-serif; }*/

          select,
          label,
          input {
            font-size: 16px;
          }

          .product {
            margin-bottom: 30px;
          }

          input[type="checkbox"] {
            width: 20px;
            /*Desired width*/
            height: 20px;
            /*Desired height*/
          }



          input[type=text]:focus {
            width: 100%;
          }

          /*.productmainclass{
        
            margin :160 !important;
        }*/

          .pimage:hover {
            -moz-transform: scale(1.01);
            -webkit-transform: scale(1.01);
            transform: scale(1.01);
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
          }

          .card {
            border: 1px solid rgba(15, 25, 52, .8);
          }

          .procard {
            overflow: hidden;
          }

          /* Extra small devices (phones, 600px and down) */

          @media only screen and (max-width: 330px) {
            .card {
              height: 300px !important;
            }
          }

          @media only screen and (max-width: 600px) {
            .sidebarfilters {
              padding-left: 30px;
            }

            .procard {
              padding: 15px;
            }

            .prodcard {
              height: 350px;
            }

            .pimage {
              height: 100%;
              width: 100%;
            }

            .foot {
              width: 120% !important;
            }

            .hideonmobile {
              display: none !important;
            }

            .showonmob {
              display: block !important;
            }

            .filtercard {
              padding-left: 81%;
              padding-top: 160px;
            }

            .navleft_sidebar {
              height: 100%;
              width: 80%;
              position: fixed;
              top: 0;
              left: 0;
              padding: 0;
              list-style: none;
              border-left: 1px solid #707072; // background-color: rgba(0, 0, 0, .9);
              overflow-y: scroll;
              z-index: 4000;
            }

            .product {
              margin-bottom: 0px;
            }

            .btncust {
              font-size: 14px !important;
            }

            .productmainclass {
              padding-top: 100px !important;
              margin: 0 !important;
            }

            #myBtnContainerCategory {
              margin-top: 140px;
            }

            .maincategoryheading {
              font-size: 25px !important;
            }

            .brandLogo {
              margin-top: -75px !important;
              right: 22px !important;
              display: none;
            }
          }

          .Category-padding {
            padding-left: 2.3%;
            margin-top: -2px !important;
          }

          @media only screen and (min-width: 700px) {
            .prodcard {
              height: 270px !important;
            }
          }

          /* Small devices (portrait tablets and large phones, 600px and up) */

          @media only screen and (min-width: 600px) {
            .sidebarfilters {
              padding-left: 30px;
            }

            /*.procard{
                padding:30px;
            }*/
            .prodcard {
              height: 350px;
            }

            .pimage {
              height: 100%;
              width: 100%;
            }

            .showonmob {
              display: block !important;
            }

            .navleft_sidebar {
              height: 100%;
              width: 80%;
              position: fixed;
              top: 0;
              left: 0;
              padding: 0;
              list-style: none;
              border-left: 1px solid #707072; // background-color: rgba(0, 0, 0, .9);
              overflow-y: scroll;
              z-index: 4000;
            }

            .productmainclass {
              /* padding-top:140px !important;*/
              margin: 0 !important;
            }

            .maincategoryheading {
              font-size: 30px !important;
            }
          }

          /* Medium devices (landscape tablets, 768px and up) */

          @media only screen and (min-width: 768px) {
            .productmainclass {
              margin-top: 160px !important;
            }

            .pimage {
              height: auto;
              width: 100%;
            }

            .maincategoryheading {
              font-size: 30px !important;
            }
          }

          /* Large devices (laptops/desktops, 992px and up) */

          @media only screen and (min-width: 992px) {
            .hideondesktop {
              display: none !important;
            }

            .productmainclass {
              margin-top: 160px !important;
            }

            .pimage {
              height: auto;
              width: 100%;
            }

            .maincategoryheading {
              font-size: 30px !important;
            }
          }

          /* Extra large devices (large laptops and desktops, 1200px and up) */

          @media only screen and (min-width: 1200px) {
            .hideondesktop {
              display: none !important;
            }

            .productmainclass {
              margin-top: 130px !important;
            }

            .pimage {
              height: auto;
              width: 100%;
            }
          }

          .filterDiv {
            float: left;
            background-color: #2196F3;
            color: #ffffff;
            width: 100px;
            line-height: 100px;
            text-align: center;
            margin: 2px;
            display: none;
          }

          .main-menu ul li.active {
            position: relative;
            border: none;
            /* font-size: 3rem; */
          }

          /*.btn.active {
          background-color: #666;
          color: white;
        }*/

          .productsrow .box {
            float: left;
            width: 150px;
            margin: 20px;
          }

          .productsrow .box .top {
            padding: 12px;
            background-color: blue;
            color: white;
            cursor: pointer;
          }

          .productsrow .box .bottom {
            padding: 12px;
            background-color: red;
            color: white;
            display: none;
          }

          .bottom {
            display: none;
          }

          @media only screen and (max-width: 600px) {
            .Category-padding {
              padding-left: 8.5% !important;
            }

          }
        </style>



        <style type="text/css">
          .btncust {

            background: transparent;
            font-size: 18px;
            font-weight: 500;
            outline: 0 !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
            padding-bottom: 0px !important;
            padding-top: 0px !important;
            margin-top: 10px;
          }

          button:active {
            outline: none;
            border: none;
          }

          button:focus {
            outline: 0;
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.25) !important;
          }

          .active,
          .btn:hover {
            /* background-color: #666;*/
            background: transparent;
            /*  color: #000000;
      font-weight: 600;*/
            outline: 0 !important;
            font-family: 'DIN Bold' !important;
            border: 2px solid #929497;
            font-weight: 600;
            color: #f2663f;
          }

          .overlay {
            position: absolute;
            /* top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0; */

            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #000000;
          }

          .card:hover .overlay {
            opacity: .5;
          }

          .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: #000;
          }
        </style>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  productmainclass"
          style="background-color:#ffffff;margin-bottom:0px;">
          <div class="Category-padding">
            <h2 class="maincategoryheading"
              style="font-weight: 600;color: #658a06;    font-size: 30px;font-family: 'DIN Bold' !important;margin-bottom: 0; margin-top: -100px;">
              <a href="product-hardware.html">HARDWARE</a>
            </h2>
            <img class="brandLogo" src="./images/logo-o.png"
              style="width: 150px;height: 70px; object-fit: contain; position: absolute;     right: 40px; margin-top: -60px;" />
          </div>
          <div class="Category-padding" style="margin-bottom: 10px;  margin-top: -10px;">

            <a href="brass-door-kit.html"><button class="btn btn1 btncust active" id="subCatBtn0"
                onclick="filterSelection('0','1')">BRASS DOOR KITS</button></a>

            <a href="brass-pull-handle.html">

              <button class="btn btn1 btncust" id="subCatBtn1"
                data-desc="The G5 series is our flagship array of door handles. With patented, state of the art, and ergonomically designed high quality hardware, made to provide ease of use and the highest levels of security."
                onclick="filterSelection('1','1')">BRASS PULL HANDLES</button>
            </a>

            <a href="brass-cabinet-handle.html">

              <button class="btn btn1 btncust" id="subCatBtn2"
                data-desc="A collection of door handles made to beat the highest industry standard. Crafted with the most premium materials such as extruded and forged brass meant to give the products a longer life and make your doors look beautiful. Finished by hand with elegant craftsmanship to ensure that every product of the Premier Series is perfect for all your contemporary desires."
                onclick="filterSelection('2','1')">BRASS CABINET HANDLES</button>
            </a>

            <a href="brass-door-stoper.html">

            <button class="btn btn1 btncust" id="subCatBtn3"
              data-desc="With an aim to provide a selection of locks which combine minimalistic designs with maximum functionality, Bonus brings you a range of compact handles made with exquisite craftmanship to provide a series with appealing geometry, sleek finish, and functional form."
              onclick="filterSelection('3','1')">BRASS DOOR STOPER</button>

            </a>

            <a href="brass-curtain-bracket.html">

            <button class="btn btn1 btncust" id="subCatBtn4"
              data-desc="The SST series is designed to give unmatched value for money in today’s economic market. Simple but elegant designs, low maintenance and reliable performance are the main advantages of this series."
              onclick="filterSelection('4','1')">BRASS CURTAIN BRACKETS</button>

            </a>

            <a href="brass-door-knocker.html">

            <button class="btn btn1 btncust" id="subCatBtn4"
              data-desc="The SST series is designed to give unmatched value for money in today’s economic market. Simple but elegant designs, low maintenance and reliable performance are the main advantages of this series."
              onclick="filterSelection('4','1')">BRASS DOOR KNOCKERS</button>

            </a>

            <a href="brass-dome.html">

            <button class="btn btn1 btncust" id="subCatBtn4"
              data-desc="The SST series is designed to give unmatched value for money in today’s economic market. Simple but elegant designs, low maintenance and reliable performance are the main advantages of this series."
              onclick="filterSelection('4','1')">BRASS DOMES</button>

            </a>

            <a href="brass-artware.html">

            <button class="btn btn1 btncust" id="subCatBtn4"
              data-desc="The SST series is designed to give unmatched value for money in today’s economic market. Simple but elegant designs, low maintenance and reliable performance are the main advantages of this series."
              onclick="filterSelection('4','1')">BRASS ARTWARE</button>

            </a>

            <a href="brass-door-chain.html">

            <button class="btn btn1 btncust" id="subCatBtn4"
              data-desc="The SST series is designed to give unmatched value for money in today’s economic market. Simple but elegant designs, low maintenance and reliable performance are the main advantages of this series."
              onclick="filterSelection('4','1')">BRASS DOOR CHAIN</button>

            </a>

            <a href="brass-chest-handle.html">

            <button class="btn btn1 btncust" id="subCatBtn4"
              data-desc="The SST series is designed to give unmatched value for money in today’s economic market. Simple but elegant designs, low maintenance and reliable performance are the main advantages of this series."
              onclick="filterSelection('4','1')">BRASS CHEST HANDLES</button>

            </a>


          </div>



          <p style="margin: 0px 15px 15px 30px;display: none;" id="productDescription"></p>


          <div class="row dataRow" style="margin: 0px 15px 15px 15px;">



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="hexxi.html">
                <div class="card prodcard">
                  <div style="background: #0f1934; padding: 2px 10px 2px 10px; ">
                    <span class="productame" style="background: #0f1934; text-align:left; color: #fff;">Hexxi
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="./prod-img/Hexxi.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>

                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="zesta.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Zesta
                      <!--  - Code : 1.00 -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="./prod-img/Zesta.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="volvo.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Volvo
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="" alt="product" class="card-img-top img-responsive pimage" style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="rider.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Rider
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/Rider.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="crescent.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Crescent
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/Crescent.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>

                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="vitara.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Vitara
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/" alt="product" class="card-img-top img-responsive pimage" style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="royce.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Royce
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/Royce.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="nysa.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Nysa
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/Nysa.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="audi.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Audi
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/Audi.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4  procard product box">
              <a href="texo.html">
                <div class="card prodcard">
                  <div style="background-color: #0f1934;padding: 2px 10px 2px 10px;">
                    <span class="productame" style="background-color: #0f1934;text-align:left;color: #fff;">Texo
                      <!--  -->
                    </span>
                  </div>
                  <div class="card red prodcard card-img-top" style=" padding: 10px;">
                    <img src="prod-img/Texo.png" alt="product" class="card-img-top img-responsive pimage"
                      style="height: 100%;">
                    <div class="overlay">
                      <div class="text">View Details</div>
                    </div>
                  </div>
                </div>
                <!-- <div style="padding: 0px;">
                <span class="top " style="text-align: right; right: 20px; position: absolute; margin-top: -45px;cursor: pointer;color: #ffffff; background-color: #fff;  padding: 5px;  border-radius: 20px;  font-size: 13px;" title="View Details"> <img src="https://www.bonus.in/assets/images/details.png"> </span>
        </div> -->
                <div class="bottom"
                  style=" padding: 15px;   text-align: justify; background-color: rgb(249, 249, 249);  border-style: solid; border-color: rgb(219, 219, 219);border-width: 0px 1px 1px 1px;">

                  <div>
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                      <div style="line-height: 1;font-family: DIN Bold;">BRH-01-004</div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Door Thickness
                          :</span>
                        <span style="font-family: DIN Bold;">35-68 mm</span>
                      </div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Finish
                          :</span> <span style="font-family: DIN Bold;">BSN, CP</span></div>
                      <div style="line-height: 1;"><span style="font-family: DIN Regular;color: #919192;">Make :</span>
                        <span style="font-family: DIN Bold;">Virgin Brass</span></div>
                    </div>
                    <div class="row" style="padding: 0; margin:5px 0px 0px 0px;">
                      <span class="enqBtn"
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">PRODUCT
                        ENQUIRY</span> &nbsp;&nbsp;&nbsp;
                      <span
                        style="text-align: center; border-right: 1px solid white;    background-color: #18aa7e;color: #fff;    padding: 3px 10px 3px 10px;font-weight: 600;    font-size: 15px;cursor: pointer;">DOWNLOAD</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>





      </div>








    </div>
  </div>
  </div>

  <footer class="footer">
    <div class="footer-shape"></div>
    <div class="footer-overlay"></div>
    <div class="footer-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="footer-wedget-one">
              <a href="index.html" class="footer-logo"><img src="images/logo-f.png" alt="" /></a>
              <p>
                We offer wide range of latest designer-superior quality
                stainless steel bathroom accessories for ultra morden
                luxurious bathroom by our state-of-art manufacturing facility.
                We produce our products from high quality AISI 304 stainless
                steel. Superior Quality, Latest Design Durability & Zero
                Maintenance Product are our key principals.
              </p>
              <div class="footer-social">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/Helix-International-573250619540863/?ti=as"><i
                        class="fa fa-facebook"></i></a>
                  </li>
                  <!-- <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-widget-menu">
              <h2>Quick links</h2>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">about us</a></li>

                <li>
                  <a href="product-hardware.html">Hardware</a>
                </li>
                <li>
                  <a href="bathroom-fitting.html">Bathroom Fitting</a>
                </li>
                <li>
                  <a href="multi-point-hook.html">Multi Point Hook</a>
                </li>
                <li><a href="contact-us.html">contact </a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-5 col-sm-6">
            <div class="footer-wedget-four">
              <h2>Map</h2>
              <div class="footer-contact-form">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.751285541812!2d77.43577334999999!3d28.58663955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1643669647424!5m2!1sen!2sin"
                  width="500" height="250" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 footer-contact-inner">
            <div class="footer-contact-info">
              <div class="footer-contact-info-icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="footer-contact-info-text">
                <span>BY Pass Road, Sasni Gate,</span>
                <span>Aligrah-202001(UP)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 footer-contact-inner">
            <div class="footer-contact-info">
              <div class="footer-contact-info-icon">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="footer-contact-info-text">
                <span>helix@gmail.com</span>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 footer-contact-inner">
            <div class="footer-contact-info">
              <div class="footer-contact-info-icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="footer-contact-info-text">
                <span>+91-9012938301</span>
                <span>+91-9358217330</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <div class="copy-right">
              <span>Copyright 2021 &copy; HELIX, all right reserved </span>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="site-developer">
              <span>Design by
                <a href="http://webadsindia.com/">WebadsIndia</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/owl.animate.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.meanmenu.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
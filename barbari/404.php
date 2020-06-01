<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style-font.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.min.css">
        <title>صفحه مورد نظر یافت نشد!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      line-height: 1.2;
      margin: 0;
    }

    html {
      color: #888;
      display: table;
      font-family: sans-serif;
      height: 100%;
      text-align: center;
      width: 100%;
    }

    body {
      display: table-cell;
      vertical-align: middle;
      margin: 2em auto;
      font-size:62.5%;
      font-family:iransans;
    }

    h1 {
      color: black;
      font-size: 2rem;
      font-weight: 400;
    }

    p {
      margin: 0 auto;
      width: 280px;
      color:white;
      font-size:0.9rem;
    }
    .error{
      background-color:tomato;
      width: 50%;
      justify-content: center;
      display: inline-block;
      border-radius: 1rem;
      height: 6rem;
    }
    div.sad{
      color: red;
      font-size: 15rem;
    }
    @media only screen and (max-width: 280px) {

      body,
      p {
        width: 95%;
        font-size:0.3rem;
      }

      h1 {
        font-size: 0.6rem;
        margin: 0 0 0.3em;
        margin-top: 1.3rem;
      }
      div.sad{
        font-size:10rem;
      }
      .error{
        height:4rem;
      }
    }
    @media only screen and (min-width: 281px){
      body,
      p {
        width: 95%;
        font-size:0.3rem;
      }

      h1 {
        font-size: 0.6rem;
        margin: 0 0 0.3em;
        margin-top: 1.3rem;
      }
      div.sad{
        font-size:10rem;
      }
      .error{
        height:4rem;
      }
    }
    @media only screen and (min-width: 600px){
      body,
      p {
        width: 95%;
        font-size:0.8rem;
      }

      h1 {
        font-size: 1.2rem;
        margin: 0 0 0.3em;
        margin-top: 0.1rem;
      }
      div.sad{
        font-size:10rem;
      }
      .error{
        height:4rem;
      }
    }
    @media only screen and (min-width: 992px){
      body,
      p {
        width: 95%;
        font-size:1.5rem;
      }

      h1 {
        font-size: 2rem;
        margin: 0 0 0.3em;
        margin-top: 1.8rem;
      }
      div.sad{
        font-size:15rem;
      }
      .error{
        height:9rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
  <div class="col-6 error">
  <h1>
    !صفحه مورد نظر یافت نشد
  </h1>
  <p>!متاسفانه ، صفحه مورد نظر شما یافت نشد</p>
  <a href="<?php bloginfo('home'); ?>">
    بازگشت به صفحه اصلی
  </a>
  </div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-6 sad">
    <i class="far fa-sad-tear"></i>
    </div>  
    </div>
  </div>
  </div>  
  <script src="<?php bloginfo('template_url'); ?>/js/all.min.js"></script>
</body>

</html>

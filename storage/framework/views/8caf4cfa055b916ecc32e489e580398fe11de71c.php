<!DOCTYPE html>
<html>
    <head>
        <title>Qbank</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/css/component.css"/>
        <script src="/js/modernizr.custom.js"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Josefin Sans', sans-serif;
                background-color: rgba(243, 238, 238, 0.14);
            }

            img{
                display: block;
                vertical-align: top;
            }

            .header{
                width: 100%;
                height: 60px;
                color: #ffffff;
                font-size: 20px;
                line-height: 20px;
                background-color: #2c3e4f;
            }

            .header-logo{
                display: inline-block;
                padding-left: 5%; 
            }

            .nav-item{
                display: inline-block;
                float: right;
                padding-right: 5%;
            }

            .nav-item ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #2c3e4f;
            }

            .nav-item li{
                float: left;
            }

            .nav-item li a{
                display: block;
                color: #eaeaea;
                text-align: center;
                padding: 20px 30px;
                text-decoration: none;
                font-weight: bold;
            }

            .nav-item li a:hover{
                background-color: #000000;
            }

            .container {
                text-align: center;
            }
            
            .title {
                font-size: 96px;
            }

            .search {
                width: 600px;
                height: 80px;
                margin: 0 auto;
                background-color: #ffffff;
            }

            .left-side-bar {
                width: 200px;
                margin: 0 auto;
                display: inline-block;
                vertical-align: top;
            }

            /*inside left-side-bar start*/
            .category {
                text-align: left;
                padding: 15px 5px;
            }

            .category ul {
                list-style-type: circle;
                padding-left: 5px;
                margin: 5px 0;
            }

            .category li {
                padding-top: 10px;
            }

            .category li a {
                text-decoration: none;
                font-size: 16px;
                color: #2c3e4f;
            }

            .category li a:hover {
                color: #000000;
            }
            /*inside left-side-bar end*/

            .right-side-bar {
                width: 200px;
                margin: 0 auto;
                display: inline-block;
                vertical-align: top;
            }

            /*inside content start*/
            .content {
                width: 600px;
                min-height: 500px;
                margin: 0 auto;
                display: inline-block;
                background-color: #ffffff;
                text-align: left;
            }

            .askQ {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .content-body {
                padding: 20px;
            }

            .content-body li{
                list-style-type: none;
                padding: 10px 0;
            }

            .content-body li a{
                text-decoration: none;
                color: #222888;
                font-size: 24px;
                line-height: 26px;
                font-weight: bold;
            }

            .content-body li a:hover{
                color: #000000;
            }

            /*inside content end*/
            /* Form inputs */

            label {
                font-family: 'Josefin Sans', sans-serif;
                font-size: 20px;
                line-height: 20px;
            }
            
            input[type=text], select{
                width: 100%;
                background-color: #ffffff;
                padding: 12px 20px;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-family: 'Josefin Sans', sans-serif;
                font-size: 18px;
                line-height: 18px;
            }

            textarea {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                margin: 8px 0 20px 0;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
                font-family: 'Josefin Sans', sans-serif;
                font-size: 18px;
                line-height: 22px;
            }

            .submitButton {
                width: 100px;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-family: 'Josefin Sans', sans-serif;
                font-size: 20px;
                line-height: 20px;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .inputText-margin {
                margin: 8px 0 20px 0;
            }

            .footer{
                width: 100%;
                height: 60px;
                background-color: #2c3e4f;
            }

            .footer-text {
                color: #eaeaea;
                font-size: 20px;
                line-height: 20px;
                padding-top: 20px;
                text-align: center;
            }

        </style>
    </head>
    <body>

        <div class="header">
            <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        
        <div class="search"><?php echo $__env->make('includes.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
        
        <div class="container">
            <div class="left-side-bar"><?php echo $__env->make('includes.left-side-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
            <div class="content"><?php echo $__env->yieldContent('content'); ?></div>
            <div class="right-side-bar">right-side-bar</div>
        </div>

        <div class="footer">
            <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>


        <script src="/js/classie.js"></script>
        <script src="/js/uisearch.js"></script>
        <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script>

    </body>
</html>

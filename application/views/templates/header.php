<head>
    <?php if (strstr(base_url(),'teamcalendar.ai')) : ?>
    <?php endif; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ai powered Team Calendar to organize your meetings better.">

    <title>TeamCalendar.ai - <?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/webfont.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" />
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body>
    <div id="wrapper" class="menuDisplayed">
        <!-- Sidebar -->
        <div class="text-center custom-logo">
            <a id="menu-toggle" class="navbar-brand"
                style="margin-left:10px;padding-bottom:8px;position:absolute;left:20px;z-index:5" href="#">
                <img src="<?php echo base_url()?>/assets/images/logomini.png" style="width:60px;padding-right:20px;"
                    title="Calndr Inc. - Powered by TeamCalendar.ai" class="d-inline-block align-top" alt=""
                    data-pagespeed-url-hash="3623013285"> <br>
            </a>
        </div>

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a title="Home" href="https://ateam.teamcalendar.ai/homeui">
                        <div data-icon="" class="icon h4 stdcolor"><span>Home</span></div>
                    </a></li>
                <li><a title="Team Calendar" href="https://ateam.teamcalendar.ai/homeui/calendar">
                        <div data-icon="M" class="icon h4 "><span>Calendar</span></div>
                    </a></li>
                <li><a title="Users" href="https://ateam.teamcalendar.ai/homeui/users">
                        <div data-icon="" class="icon h4 "><span>Users</span></div>
                    </a></li>
                <!-- <li><a title="Report"  href="https://ateam.teamcalendar.ai/homeui/report"><div data-icon="&#xe000;" class="icon h4 "></div></a></li> -->
                <li><a title="Setting" href="https://ateam.teamcalendar.ai/homeui/setting">
                        <div data-icon="~" class="icon h4 "><span>Setting</span></div>
                    </a></li>
            </ul>
            <div style="position:absolute;bottom:20px;" class="sidebar-nav">
                <a title="Log Out" href="https://ateam.teamcalendar.ai/homeui/logout">
                    <div data-icon="=" class="icon h4"></div>
                </a>
            </div>
            <small title="version 1.4 release date April 2020" style="position:absolute;bottom:0px;"
                class="text-center">&nbsp;</small>

        </div>
        <!-- Page Content -->
        
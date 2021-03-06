<html>
<head>
    <style>
        .menu-sidebar {
            width: 300px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background: #fff;
            overflow-y: auto;
        }

        .menu-sidebar .logo {
            background: #f5f5f5;
            height: 75px;
            padding: 0 35px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
            border-right: 1px solid #e5e5e5;
            position: relative;
            z-index: 3;
        }

        .menu-sidebar .navbar__list .navbar__sub-list {
            display: none;
            padding-left: 34px;
        }

        .menu-sidebar .navbar__list .navbar__sub-list li a {
            padding: 11.5px 0;
        }

        .menu-sidebar__content {
            position: relative;
            height: -webkit-calc(100vh - 75px);
            height: -moz-calc(100vh - 75px);
            height: calc(100vh - 75px);
        }


    </style>

</head>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('src/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('src/css/style.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="module" src="{{ asset('src/js/core.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('src/js/swiper.bundle.min.js') }}">
    <title>@yield('title')</title>
</head>

<body>
    <menu class="fixed container menu" id="home">
        <nav class="sidenav-active main-menu animate__animated animate__bounceInDown " id="menu">
            <label class="show-menu" for="show-menu">
                <div class="topbar"><span class="logo menu-logo mobile-logo dark-logo"><a href="index.html"><img
                                src="{{ asset('src/img/logo.png') }}" alt="#{logoMenu}" /></a></span>
                    <div class="lines"></div>
                </div>
            </label>
            <input id="show-menu" type="checkbox" />
            <ul id="menu">
                <li class="undefined logo menu-logo "><a href="index.html"><img src="{{ asset('src/img/logo.png') }}"
                            alt="#{logoMenu}" /><img class="logo-small court" src="{{ asset('src/img/court justice.jpg') }}"
                            alt="#{logoMenu}" /></a></li>
                <div class="undefined menu-links " id="menu_links">
                    <li class="button no-margin"><a class="btn btn-sm btn-" href="#"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="button no-margin"><a class="btn btn-sm btn-" href="/Chat"><i
                                class="fab fa-rocketchat"></i></a>
                    </li>
                    <li class="button no-margin"><a class="btn btn-sm btn-" href="#"><i
                                class="fas fa-calendar-alt"></i></a>
                    </li>

                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </ul>
        </nav>
    </menu>
    <div class="sidebar active" id="sidenav">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">Menu</div>
            </div><i class="fas fa-bars" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li><a class="active" href="/admin/Dashboard"><i class="fas fa-gauge"></i><span
                        class="links_name">Dashboard</span></a><span class="tooltip">Dashboard</span></li>
            {{-- <li><a href="#"><i class="fas fa-calendar"></i><span class="links_name">Calendar</span></a><span class="tooltip">Calendar</span></li> --}}
            <li><a href="/admin/News"><i class="fas fa-user"></i><span class="links_name">News</span></a><span class="tooltip">News</span></li>
            {{-- <li><a href="/Practices"><i class="fas fa-user"></i><span class="links_name">Key Practices</span></a><span class="tooltip">Key Practices</span></li> --}}
            <li><a href="/admin/Roles"><i class="fas fa-user"></i><span class="links_name">Roles</span></a><span class="tooltip">Roles</span></li>
            <li><a href="/admin/Courses"><i class="fas fa-laptop-file"></i><span class="links_name">Courses</span></a><span class="tooltip">Courses</span></li>
        </ul>
    </div>
    @yield('content')
</body>
<script src="{{ asset('src/js/jquery.min.js') }}"> </script>
<script src="{{ asset('src/js/index.js') }}"> </script>
<script src="{{ asset('src/js/aos.js') }}"> </script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    var dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
    [ "Doris Wilder", "Sales Assistant", "Sydney", "3023", "2010/09/20", "$85,600" ],
    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
    [ "Michelle House", "Integration Specialist", "Sydney", "2769", "2011/06/02", "$95,400" ],
    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];

$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." },
            { title: "Start date" },
            { title: "Salary" }
        ]
    } );
} );
</script>
<script>
  AOS.init({
      easing: 'ease-in-out-sine'
  });
</script>
</html>

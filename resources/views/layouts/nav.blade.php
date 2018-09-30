<nav class="navbar navbar-default navabr-static-top">
    <div class="container">
        {{-- <-- App name--> --}}
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>


            <div class="container">
                {{-- <-- Left Side Of Navbar --> --}}
                    <ul class="nav navbar-nav">
                        <li class="nav-item active"><a href="/">Home</a></li>
                        <li class="nav-item active"><a href="/tickets/create">New Test Request Submission</a></li>
                        <li class="nav-item active"> <a href="/ticketslist">Ticket Overview</a></li>
                        <li class="nav-item active"><a href="/mastertable">Master Table</a></li>
                        <li class="nav-item active"><a href="/testmachine">Machines</a></li>

                        <li> <a href="/tests">Test Overview</a></li>
                        <li><a href="/testscheduling">Scheduling</a></li>

                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Project <span class="caret"></span></a>
                            <ul class="dropdown-menu"> --}}
                                <li><a href="/projects">Project Listing</a></li>
                                {{-- </ul>
                        </li> --}}

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Machine Overview <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/newmachine">Add new Machine</a></li>
                                <li><a href="/machinedowntime/create">Machine Down Time Request Form</a></li>
                                <li><a href="/machineslistoverview">Machine Down Time list</a></li>
                                <li><a href="/machinesdownsummary">Machine Down Time list Summary</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">T&V Info <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/operation">T&V Operation</a></li>
                                <li><a href="/manpower">Manpower Planning</a></li>
                                <li><a href="/teamsetuppicture">Team Setup Picture</a></li>
                                <li><a href="/log">TRMS System Log</a></li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Test Masterview<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/testprotocolmasterview">Test Protocol Masterview</a></li>
                                <li><a href="/testdurationmasterview">Test Duration Masterview</a></li>
                            </ul>
                        </li>
                        <li><a href="/import">Import</a></li>
                        <li><a href="/archive">Archive</a></li>
                        {{-- <li><a href="/newcreate">Create test template</a></li>
                        <li><a href="/newcreatereporttemplate">Create report template</a></li> --}}
                        {{-- <li><a href="/search">Search</a></li> --}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Data Visual<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/testdurationcomparsion">Test Duration Comparsion</a></li>
                                <li><a href="/samplearrivaldate">Sample Arrival Date</a></li>
                                <li><a href="/lifetestschedule">Schedule of Life Test</a></li>
                            </ul>
                        </li>


                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if (Auth::user()->type=="admin")
                                <li>
                                    <a href="/admin">Admin Control</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
            </div>
    </div>
</nav>
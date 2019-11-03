<!DOCTYPE HTML>
<!--
    dashboard page
-->
<html>
    <head>
        <title>Stellar by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header" class="alt">
                        <span class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></span>
                        <h1>Stellar</h1>
                        <p>Just another free, fully responsive site template<br />
                        built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a>.</p>
                    </header>

                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li><a href="#buku" class="active">Daftar Buku</a></li>
                            <li><a href="#first">Peminjaman</a></li>
                            <li><a href="#second">Pengembalian</a></li>
                            <li><a href="#cta">Laporan</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                        </ul>
                    </nav>

                <!-- Main -->
                    <div id="main">

                        <!-- Introduction -->
                            <section id="buku" class="main">
                                <div class="spotlight">
                                    <div class="content">
                                        <header class="major">
                                            <h2>Daftar Buku</h2>
                                            <strong>Daftar Buku Terbaru</strong>
                                        </header>
                                            <div class="table-wrapper">
                                            <table class="alt">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Kategori</th>
                                                        <th>Jumlah</th>
                                                        <th>Pengarang</th>
                                                        <th>Tahun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($buku as $b)
                                                    <tr>
                                                        <td><a href="/book/{{ $b->id }}">{{ $b->nama }}</a></td>
                                                        <td>{{ $b->kategori }}</td>
                                                        <td>{{ $b->jumlah }}</td>
                                                        <td>{{ $b->pengarang }}</td>
                                                        <td>{{ $b->tahun }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        <!-- First Section -->

                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <section>
                            <h2>Aliquam sed mauris</h2>
                            <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
                            <ul class="actions">
                                <li><a href="generic.html" class="button">Learn More</a></li>
                            </ul>
                        </section>
                        <section>
                            <h2>Etiam feugiat</h2>
                            <dl class="alt">
                                <dt>Address</dt>
                                <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
                                <dt>Phone</dt>
                                <dd>(000) 000-0000 x 0000</dd>
                                <dt>Email</dt>
                                <dd><a href="#">information@untitled.tld</a></dd>
                            </dl>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
                            </ul>
                        </section>
                        <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
            <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
            <script src="{{ asset('js/browser.min.js') }}"></script>
            <script src="{{ asset('js/breakpoints.min.js') }}"></script>
            <script src="{{ asset('js/util.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
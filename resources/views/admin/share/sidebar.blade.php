 <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{asset('images/icon/logo.png')}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('admin')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Formation</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('NosForamtions')}}">Nos formations</a>
                                </li>
                                <li>
                                    <a href="{{route('AddFormation')}}">Ajouter Formation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Services</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('NosServices')}}">Nos Services</a>
                                </li>
                                <li>
                                    <a href="{{route('AddService')}}">Ajouter Service</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Temoignage</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('NosTemoignages')}}">Nos Temoignages</a>
                                </li>
                                <li>
                                    <a href="{{route('AddTemoignage')}}">Ajouter Temoignage</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Equipe</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('NotreEquipe')}}">Notre Equipe</a>
                                </li>
                                <li>
                                    <a href="{{route('AddMembre')}}">Ajouter Membre</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('listRendezVous')}}">
                                <i class="fas fa-copy"></i>Rendez-Vous</a>
                        </li>
                         <li>
                            <a href="{{route('config')}}">
                                <i class="fas fa-copy"></i>Configuration</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
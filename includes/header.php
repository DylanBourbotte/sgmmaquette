<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SGM BTP - Intégration Maquette</title>
</head>
<body>

<header class="mainHeader">
    <div class="container">
        <nav class="nav">
            <img class="logo img-fluid" src="./img/logo.png" alt="Logo de la société" onclick="window.location.href='index.php'">
            <div class="btnMenu"><i class="fas fa-bars"></i></div>
            
            <div class="overlayMenu">
                <div class="row">
                    <div class="col-12">
                    <ul class="navbar-nav align-bottom text-center">
                <li class="nav-items"><a class="mobile" style="margin: auto;" href="btp.php">Matériel de btp</a></li>
                <li class="nav-items"><a class="mobile" style="margin: auto;" href="transport.php">Matériel de transport</a></li>
                <li class="nav-items"><a class="mobile" style="margin: auto;" href="agricole.php">Matériel agricole</a></li>
                <li class="nav-items"><a class="mobile" style="margin: auto;" href="contact.php">Autres services</a></li>
            </ul>
            </div>
            </div>
            </div>
            
            <ul class="navbar-nav align-bottom text-left">
                <li class="nav-items materielbtp"><a href="btp.php">Matériel de<br>btp</a>
                <ul class="text-left menu-deroulant">
                    <li class="submenu"><a href="btp.php?materiel=pelleteuse">Pelle</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=chargeuse">Chargeuse</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=bulldozer">Bulldozer</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=niveleuse">Niveleuse</a></li>
                    <hr class="submenu hr">
                    <li class="submenu materielbtp"><a href="btp.php?materiel=tractopelle">Tractopelle</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=tomberau">Tomberau</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=grue">Grue</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=forage">Forage</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?matereiel=concassage">Concassage</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=groupe">Groupe<br> électrogène</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=porteengin">Porte engin</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=location">Location</a></li>
                    <hr class="submenu hr">
                    <li class="submenu"><a href="btp.php?materiel=pieces">Pieces</a></li>
                    <hr class="submenu hr">
                    <li class="submenu last-item"><a href="btp.php?materiel=pneu">Pneu</a></li>
                </ul>
                </li>
                <li class="nav-items materieltransport"><a href="transport.php">Matériel de<br>transport</a>
                    <ul class="text-left menu-deroulant-transport">
                        <li class="submenu-transport"><a href="transport.php?materiel=camions">Camions</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport"><a href="transport.php?materiel=tracteurs">Tracteurs</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport"><a href="transport.php?materiel=utilitaires">Utilitaires</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport"><a href="transport.php?materiel=remorque">Remorques</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport"><a href="transport.php?materiel=remorque">Semi remorques</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport"><a href="transport.php?materiel=bus">Bus - Minibus - Autocar</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport"><a href="transport.php?materiel=location">Location</a></li>
                        <hr class="submenu-transport hr">
                        <li class="submenu-transport last-item"><a href="transport.php?materiel=piece">Pieces</a></li>
                    </ul>
                </li>
                <li class="nav-items materielagricole"><a href="agricole.php">Matériel<br>agricole</a>
                    <ul class="text-left menu-deroulant-agricole">
                        <li class="submenu-agricole"><a href="agricole.php?materiel=tracteurs">Tracteurs</a></li>
                        <hr class="submenu-agricole hr">
                        <li class="submenu-agricole"><a href="agricole.php?materiel=recolte">Récolte</a></li>
                        <hr class="submenu-agricole hr">
                        <li class="submenu-agricole"><a href="agricole.php?materiel=balles">Balles</a></li>
                        <hr class="submenu-agricole hr">
                        <li class="submenu-agricole"><a href="agricole.php?materiel=pulverisateur">Pulvérisateur</a></li>
                        <hr class="submenu-agricole hr">
                        <li class="submenu-agricole"><a href="agricole.php?materiel=feneison">Feneison</a></li>
                        <hr class="submenu-agricole hr">
                        <li class="submenu-agricole"><a href="agricole.php?materiel=irigation">Irrigiton</a></li>
                        <hr class="submenu-agricole hr">
                        <li class="submenu-agricole last-item"><a href="agricole.php?materiel=agricolepiece">Pieces</li>
                    </ul>
                </li>
                <li class="nav-items"><a href="contact.php">Autres<br>services</a></li>
                <li>
                    
                </li>
            </ul>
        </nav>
    </div>
</header>
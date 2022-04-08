@include('layouts.header')
<link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

@section('title', 'Home')

<style>
    td .p {
        font-size: 14px !important;
    }

</style>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.nav')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.layout')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0" style="text-transform: capitalize;">
                                {{ $pagename }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Templates</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">{{ $pagename }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section id="nav-tabs-aligned">
                    <div class="row match-height">
                        <!-- Centered Aligned Tabs starts -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="salads-tab-center" data-toggle="tab"
                                                href="#salads-center" aria-controls="salads-center" role="tab"
                                                aria-selected="true">SALADS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="starter-tab-center" data-toggle="tab"
                                                href="#starter-center" aria-controls="starter-center" role="tab"
                                                aria-selected="false">STARTER</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="mains-tab-center" data-toggle="tab"
                                                href="#mains-center" aria-controls="mains-center" role="tab"
                                                aria-selected="false">MAINS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="dessert-tab-center" data-toggle="tab"
                                                href="#dessert-center" aria-controls="dessert-center" role="tab"
                                                aria-selected="false">DESSERT</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane active" id="salads-center"
                                            aria-labelledby="salads-tab-center" role="tabpanel">
                                            <p>
                                            <h2><input type="text" value="SALADS" class="form-control"></h2>
                                            </p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4><input type="text" value="GRÜNER SALAT" class="form-control"></h4>
                                                            <p><input type="text" value="Frische Blattsalate" class="form-control"></p>
                                                        </td>
                                                        <td><input type="number" value="9.50" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GEMISCHTER SALAT</h4>
                                                            <p>Saisonaler Salatmix</p>
                                                        </td>
                                                        <td>13.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEAT.ME-SALAT</h4>
                                                            <p>Blattsalat mit Speck,<br>
                                                                Cherry-Tomaten, Avocadowürfel<br>
                                                                und Brotcroûtons</p>
                                                        </td>
                                                        <td>16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>TOMATEN, ONION &amp; BASILIKUM</h4>
                                                            <p>Tomaten in Scheiben,<br>
                                                                angemacht mit gereiftem<br>
                                                                Aceto Balsamico, Basilikumblättern<br>
                                                                und Zwiebelringe</p>
                                                        </td>
                                                        <td>11.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>TOMATEN &amp; BUFALA</h4>
                                                            <p>Burrata mit frischen Cherry-Tomaten,<br>
                                                                Basilikumblättern und Olivenöl</p>
                                                        </td>
                                                        <td>22.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GAMBERONI AUF RUCOLA</h4>
                                                            <p>Grillierte Riesencrevetten auf<br>
                                                                Rucolasalat mit Peperoncini,<br>
                                                                dazu servieren wir<br>
                                                                Olivenöl «Virgen Extra» und<br>
                                                                Aceto Balsamico</p>
                                                        </td>
                                                        <td>23.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEAT.ME SASHIMI</h4>
                                                            <p>Dünn aufgeschnittenes in<br>
                                                                Kräuter eingelegtes Rindsfilet,<br>
                                                                serviert mit Chilli-Sojasauce<br>
                                                                und Olivenöl, garniert mit<br>
                                                                Salatbouquet und Sesam</p>
                                                        </td>
                                                        <td>27.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>CAESAR-SALAT</h4>
                                                            <p>Gartenfrischer Eisbergsalat<br>
                                                                mit Parmesansplittern,<br>
                                                                Brotcroûtons, Cherry-Tomaten,<br>
                                                                serviert an hausgemachtem<br>
                                                                Parmesandressing</p>
                                                        </td>
                                                        <td>19.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mit Poulet</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mit Crevetten</td>
                                                        <td>28</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mit RindFleisch</td>
                                                        <td>30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="starter-center"
                                            aria-labelledby="starter-tab-center" role="tabpanel">
                                            <p>
                                            <h2>STARTER</h2>
                                            </p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>CONSOMMÉ MIT SHERRY</h4>
                                                            <p>Eine Suppe für den Feinschmecker</p>
                                                        </td>
                                                        <td>10.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>TOMATENCRÈMESUPPE</h4>
                                                            <p>Mit Basilikum und Rahmhäubchen</p>
                                                        </td>
                                                        <td>11.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>RIESENCREVETTEN AGLIO OLIO</h4>
                                                            <p>Meerfrische Riesencrevetten<br>
                                                                auf mediterranem<br>
                                                                Gemüse,gebraten mit<br>
                                                                Knoblauch und Olivenöl</p>
                                                        </td>
                                                        <td>21.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILLIERT JAKOBSMUSCHELN</h4>
                                                            <p>Frische Jakobsmuscheln<br>
                                                                nach einem feurigen, argentinischen<br>
                                                                Rezept, serviert<br>
                                                                mit Avocado-Chili-Salat</p>
                                                        </td>
                                                        <td>25.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>EMPANADAS</h4>
                                                            <p>Die populärste Füllung für<br>
                                                                dieses traditionelle<br>
                                                                argentinische Gebäck ist<br>
                                                                Rindfleisch<br>
                                                                mit schwarzen Oliven nach<br>
                                                                einem Hausrezept</p>
                                                        </td>
                                                        <td>15.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEAT.ME WARME TAPAS</h4>
                                                            <p>Grillierte Jakobsmuscheln,<br>
                                                                Chorizowurst und<br>
                                                                Empanadas serviert mit<br>
                                                                Peperonistreifen</p>
                                                        </td>
                                                        <td>26.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>DER KLASSIKER CARPACCIO</h4>
                                                            <p>Feingeschnittenes Rindfleisch<br>
                                                                aus Argentinien mit Parmesan,<br>
                                                                Rucola, kaltgepresstem<br>
                                                                Olivenöl und frischem Zitronensaft</p>
                                                        </td>
                                                        <td>22.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>RINDSTATAR</h4>
                                                            <p>Rindstatar mild, medium<br>
                                                                oder pikant. Servieret mit Toastbrot<br>
                                                                und Butter</p>
                                                        </td>
                                                        <td>24.50 / 34.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>SALSICCIA</h4>
                                                            <p>Italienische, pikant gewürzte Wurst</p>
                                                        </td>
                                                        <td>17</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEAT.ME WARME TAPAS:</h4>
                                                            <p>MEAT.ME WARME TAPAS:<br>
                                                                Grillierte Jakobsmuscheln,<br>
                                                                Salsicca, Empanadas und Crevetten</p>
                                                        </td>
                                                        <td>p./P 28.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="mains-center" aria-labelledby="mains-tab-center"
                                            role="tabpanel">
                                            <p>
                                            <h2>MAINS</h2>
                                            </p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>POULETBRUSTFILET VOM GRILL</h4>
                                                            <p>Saftig grilliertes Poulet</p>
                                                        </td>
                                                        <td>29.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILLIERTES KALBSSCHNITZEL</h4>
                                                            <p>Zartes KalbFleisch aus der Region Simmental</p>
                                                        </td>
                                                        <td>38.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>BIFE DE CABALLO</h4>
                                                            <p>Ein auf den Punkt grilliertes,<br>
                                                                schmackhaftes Pferdefilet</p>
                                                        </td>
                                                        <td>33.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILLIERTER LAMMRACK</h4>
                                                            <p>Butterzarte Lammkoteletts</p>
                                                        </td>
                                                        <td>39.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>THE GAUCHO-BURGER</h4>
                                                            <p>A-la-minute gehackt, fein gewürzt und<br>
                                                                mit Zwiebeln und Crème fraîche vermengt</p>
                                                        </td>
                                                        <td>33.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILLIERTE SPIESSLI</h4>
                                                            <p>220g Rindfleisch - die Besten der Stadt Zürich</p>
                                                        </td>
                                                        <td>32.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILLIERTES THUNFISCHSTEAK</h4>
                                                            <p>Frischer Thunfisch, saftig grilliert<br>
                                                                und mit Zitrone serviert</p>
                                                        </td>
                                                        <td>41</td>
                                                    </tr>
                                                    <tr>
                                                        <td>mit Speck</td>
                                                        <td>+ 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>mit Spiegelei</td>
                                                        <td>+ 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>mit Cheddar Cheese</td>
                                                        <td>+ 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEAT LOVERS MIXED PLATE</h4>
                                                            <p>Saftig grillierte Lammkoteletts,<br>
                                                                Pouletbrust und Entrecôte</p>
                                                        </td>
                                                        <td>39.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h2 class="mt-3">ASADO-TELLER</h2>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span class="ftd">Eine Variation der saftigsten
                                                                Steaks</span><br>
                                                            <span class="std">Bestes Rindfleisch
                                                                ausschliesslich von ausgewählten Jungtieren. Entrecôte,
                                                                Rumpsteak und Filet.</span>
                                                        </td>
                                                        <td>240g/49.50</td>
                                                        <td>400g/72.50</td>
                                                        <td>600g/93.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>LOMO DE ARGENTINO</h4>
                                                            <p>Bestes Rindsfilet am Stück grilliert, dazu servieren
                                                                wir<br>
                                                                Ihnen Beilagen und 4 Saucen nach Ihrer Wahl.</p>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Für 2 Personen (4 Beilagen)</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>600g/149</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ab 2 - 4 Personen (4 Beilagen)</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>1200g/285</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ab 4 – 6 Personen (6 Beilagen)</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>1800g/425</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h2 class="mt-3">BIFE ARGENTINO</h2>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>180g</td>
                                                        <td>250g</td>
                                                        <td>400g</td>
                                                        <td>500g</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEAT LOVERS DE QUADRIL</h4>
                                                            <p>Ein geschmackvolles und fettarmes Rumpsteak<br>
                                                                von mit Pampas-Gras gefütterten Stieren.</p>
                                                        </td>
                                                        <td>35.50</td>
                                                        <td>44.50</td>
                                                        <td>66.50</td>
                                                        <td>79.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>BIFE DE CHORIZO</h4>
                                                            <p>Das traditionelle Entrecôte, unter den Steaks</p>
                                                        </td>
                                                        <td>37.50</td>
                                                        <td>46.50</td>
                                                        <td>69.50</td>
                                                        <td>83.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>BIFE DE LOMO</h4>
                                                            <p>Das zarteste und feinste Filetstück -<br>
                                                                eine schmackhafte Delikatesse</p>
                                                        </td>
                                                        <td>44.50</td>
                                                        <td>54.50</td>
                                                        <td>80.50</td>
                                                        <td>93.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>U.S. BIFE ANCHO</h4>
                                                            <p>Schön marmoriertes Rib-Eye-Steak vom Hohrücken</p>
                                                        </td>
                                                        <td></td>
                                                        <td>49.50</td>
                                                        <td>75.50</td>
                                                        <td>89.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h2 class="mt-3">VEGETARIAN</h2>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>GEMÜSETELLER</h4>
                                                            <p>Sechs frisch zubereitete, verschiedene<br>
                                                                Saisongemüse, gebraten und grilliert, serviert<br>
                                                                mit einem Spiegelei.</p>
                                                        </td>
                                                        <td>26.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>TAGLIATELLE ALFREDO</h4>
                                                            <p>Frische Steinpilze scharf angebraten<br>
                                                                an einer leichten Rahmsauce</p>
                                                        </td>
                                                        <td>28.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h2 class="mt-3">SIDE DISHES</h2>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>GRÜNER SALAT</h4>
                                                        </td>
                                                        <td>7</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>POMMES ALUMETTES</h4>
                                                        </td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>SWEET POTATO FRIES</h4>
                                                        </td>
                                                        <td>6.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>POMMES FRITES</h4>
                                                        </td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>ROSMARINKARTOFFELN</h4>
                                                        </td>
                                                        <td>6.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>BUTTERREIS</h4>
                                                        </td>
                                                        <td>5.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>TAGLIATELLE</h4>
                                                        </td>
                                                        <td>5.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MAISKOLBEN</h4>
                                                        </td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILLIERTE CHAMPIGNONS</h4>
                                                        </td>
                                                        <td>7</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>FRISCHER BLATTSPINAT AN TOMATEN-KNOBLAUCH-BUTTER</h4>
                                                        </td>
                                                        <td>7</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MEDITERRANES GEMÜSE</h4>
                                                        </td>
                                                        <td>6.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>GRILL-GEMÜSE (TOMATEN, CHAMPIGNONS UND PEPERONI)</h4>
                                                        </td>
                                                        <td>7.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h2 class="mt-3">SAUCEN NACH IHRER WAHL</h2>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span class="ftd">Grüne Pfeffersauce<br>
                                                                Béarnaise Sauce<br>
                                                                BBQ Sauce</span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="std">Die berühmte Chimichurri –
                                                                diese traditionelle<br>
                                                                argentinische Sauce ist ein «Muss».<br>
                                                                Sie besteht aus gehackter Petersilie, Koriander,<br>
                                                                Knoblauch und Öl</span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jede zweite Sauce:</td>
                                                        <td>3.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="dessert-center"
                                            aria-labelledby="dessert-tab-center" role="tabpanel">
                                            <p>
                                            <h2>DESSERT</h2>
                                            </p>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h4>TRES QUESOS</h4>
                                                            <p>Dreierlei Käse, angerichtet<br>
                                                                mit Trauben und Nüssen</p>
                                                        </td>
                                                        <td>13.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>MOUSSE AU CHOCOLAT</h4>
                                                            <p>Hausgemachte Schokoladenmousse</p>
                                                        </td>
                                                        <td>11.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>NY CHEESECAKE</h4>
                                                            <p>Ein Rezept vom Küchenchef,<br>
                                                                serviert mit Erdbeercoulis</p>
                                                        </td>
                                                        <td>11.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>AFFOGATO AL CAFFÈ</h4>
                                                            <p>Vanille-Eis mit einem Shot<br>
                                                                Espresso-Amaretto</p>
                                                        </td>
                                                        <td>11.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>DULCE DE LECHE</h4>
                                                            <p>Feine Crêpes mit Dulce de Leche<br>
                                                                und Vanille-Eis. Ein argentinischer<br>
                                                                Bestseller unter den Desserts</p>
                                                        </td>
                                                        <td>13.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>CRÈME BRÛLÉE</h4>
                                                            <p>Serviert mit frischen Früchten</p>
                                                        </td>
                                                        <td>12.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>SCHOKOKUCHEN</h4>
                                                            <p>Mit flüssigem Schokokern</p>
                                                        </td>
                                                        <td>13.50</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Centered Aligned Tabs ends -->


                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.footer')
    <script>
        '@if (session()->has('message'))<div class="alert alert-success">' + toastr["success"]("{{ session()->get('message') }}") + '</div>@endif'
    </script>
</body>

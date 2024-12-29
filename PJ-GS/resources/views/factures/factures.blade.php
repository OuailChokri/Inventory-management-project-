<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="./lib/bootstrap_5/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <style>
        .dataTables_filter {
            margin-bottom: 10px; /* Adjust margin as needed */
            text-align: right; /* Align text to the right */
        }

        .dataTables_filter input {
            width: 300px; /* Set width as desired */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px; /* Set font size as desired */
        }

        .dataTables_paginate {
            text-align: center;
            margin-top: 20px; /* Ajustez la marge si nécessaire */
            margin-left: 65%;
            justify-content: center;
        }

        .paginate_button {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 2px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s; /* Ajoute une transition douce */
        }

        .paginate_button:hover {
            background-color: #f0f0f0;
        }

        .paginate_button.current {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        #clients-table td {
            padding: 0.75rem; /* Ajustez le rembourrage */
            text-align: center; /* Centrer le texte */
            background-color: white;
        }

        .no-print { display: none; }

        table thead th {
            border-bottom: 2px solid #dee2e6 !important;
        }

        .table-responsive {
            overflow-x: hidden !important;
        }

        .action-buttons {
            white-space: nowrap;
        }

        .action-buttons a, .action-buttons form {
            display: inline-block;
            margin: 0 5px;
        }

        table, th, td {
            width: auto; /* Allow the table to auto-adjust */
        }
        .btn-edit {
            color: blue;
            border: 1px solid #ccc;
        }
        .btn-edit:hover {
            background-color: blue;
            color: white;
        }
        .btn-delete {
            color: red;
            border: 1px solid #ccc;
        }
        .btn-delete:hover {
            background-color: red;
            color: white;
        }
        @media print {
            .card-header, .action-buttons, .btn, .dataTables_filter, .dataTables_info, .dataTables_paginate, .dataTables_length {
                display: none;
            }}
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container" style="margin-left:10px;">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{asset('/dashboard')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">GSTOCK</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          
          <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
                    <!-- Statistics -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Statistics</span></li>
          <!-- Dashboards -->
          <li class="menu-item">
            <a href="{{asset('/dashboard')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-home"></i>
              <div data-i18n="Basic">DASHBOARD</div>
            </a>
          </li>
          <!-- Clients -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Clients</span></li>
          <li class="menu-item">
            <a href="{{asset('/clients')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-users"></i>
              <div data-i18n="Basic">CLIENTS</div>
            </a>
          </li>
          <!-- Stock -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Stock</span></li>
          <li class="menu-item">
            <a href="{{asset('/produits')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-box"></i>
              <div data-i18n="Basic">PRODUITS</div>
            </a>
          </li>
          <!-- Sales -->
          <li class="menu-item">
            <a href="{{asset('/ventes')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-chart-line"></i>
              <div data-i18n="Basic">VENTES</div>
            </a>
          </li>
          <!-- Purchases -->
          <li class="menu-item">
            <a href="{{asset('/achats')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-shopping-cart"></i>
              <div data-i18n="Basic">ACHATS</div>
            </a>
          </li>
          <!-- Others -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Autre</span></li>
          <li class="menu-item">
            <a href="{{asset('/fournisseurs')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-truck"></i>
              <div data-i18n="Basic">FOURNISSEURS</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{asset('/factures')}}" class="menu-link">
              <i class="menu-icon tf-icons fas fa-file-invoice"></i>
              <div data-i18n="Basic">FACTURE</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->


        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav 
          style="margin-left: 15px; align-items:center;"
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse"  >
              <!-- Search -->
              <div class="navbar-nav align-items-center" >
                <div class="nav-item d-flex align-items-center" >
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('profile.edit') }}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Mon Profile</span>
                      </a>
                    </li>
                    
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
        <i class="bx bx-power-off me-2"></i>
        <span class="align-middle">Déconnexion</span>
    </a>
</form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <div class="container mt-5">
    <!-- Table des factures -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-capitalize">Factures data</h5>
                    <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addInvoiceModal">
            Ajouter Facture
        </button>                    </div>
                </div>
                <div class="d2c_dataTable table-responsive text-center">
                    <table id="factures-table" class="display w-100 ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client</th>
                                <th>Vente id</th>
                                <th>Montant total</th>
                                <th style="padding-right:110px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <!-- Modifier le code HTML pour inclure un identifiant unique pour chaque ligne de facture -->
@foreach($factures as $facture)
<tr id="facture-{{ $facture->id }}">
    <td>{{ $facture->id }}</td>
    <td>{{ $facture->client_nom }}</td>
    <td>
        <div class="row">
            @foreach($facture->ventes as $vente)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h6 class="badge bg-label-danger" style="font-size: 13px;">Vente ID: {{$vente->id}}</h6>
                        <p class="text-primary">Produit: {{$vente->produit_nom}}</p>
                        <p class="badge bg-label-warning" style="font-size: 13px;" >Quantité: {{$vente->quantite}}</p>
                        <p class="text-success">Prix: {{$vente->prix}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </td>
    <td class="badge bg-label-success" style="margin-top:92px;" >{{ $facture->montant_total }}</td>
    <td class="action-buttons">
        <div class="d-flex align-items-center">
            <a href="{{ route('factures.edit', $facture->id) }}" class="btn btn-edit btn-sm me-2">
                <i class="far fa-edit"></i>
            </a>
            <form action="{{ route('factures.destroy', $facture->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette facture?');">
                    <i class="far fa-times-circle"></i>
                </button>
            </form>
            <button type="button" class="btn btn-print btn-sm" data-id="{{ $facture->id }}">
                <i class="fas fa-print"></i>
            </button>
        </div>
    </td>
</tr>
@endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la table des factures -->
</div>

<hr class="my-5" />

 <!-- Modal pour Ajouter une Facture -->
<div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addInvoiceModalLabel">Ajouter Facture</h5>
                <div class="logo-container" style="padding-left:10px;">
                    <img src="./images/facture.png" alt="Logo" class="modal-logo">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('factures.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="clientSelect" class="form-label">Client</label>
                        <select id="clientSelect" name="nomClient" class="form-select">
                            <option value="" selected disabled>Choisir le client</option>
                            @foreach($clients as $client)
                                <option value="{{ $client->nom }}">{{ $client->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ventesSelect" class="form-label">Ventes</label>
                        <select id="ventesSelect" name="idVentes[]" class="form-select select2" multiple disabled>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    // Initialiser Select2
    $('.select2').select2();
    var spanSelect2Disabled = $('.select2-container--disabled');
        spanSelect2Disabled.addClass('d-none'); // Cacher le span par défaut

    // Gérer le changement de sélection dans #clientSelect
    $('#clientSelect').change(function() {
        var clientNom = $(this).val();
        var ventesSelect = $('#ventesSelect');
        

        // Désactiver la sélection des ventes et effacer les options existantes
        ventesSelect.prop('disabled', true).empty();
        


        if (clientNom) {
            $.ajax({
                url: `/api/ventes/${clientNom}`,
                type: 'GET',
                success: function(data) {
                    if (data.ventes && data.ventes.length > 0) {
                        data.ventes.forEach(function(vente) {
                            // Créer une option avec seulement l'ID de vente
                            var option = new Option(`${vente.id} - ${vente.produit_nom} - ${vente.prix} DH`, vente.id, false, false);
                            ventesSelect.append(option);
                        });
                        ventesSelect.prop('disabled', false).trigger('change.select2');

                    }
                },
                error: function(error) {
                    console.error('Erreur :', error);
                }
            });
        }
    });

    // Gérer le changement de sélection dans #ventesSelect
    
});

    $('#factures-table').DataTable({
        dom: "<'row align-items-center'<'col-sm-12 col-md-6 px-3 text-center text-md-start'B><'col-sm-12 col-md-6 px-3'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
            { extend: 'copy', className: 'btn btn-primary' },
            { extend: 'csv', className: 'btn btn-secondary' },
            { extend: 'excel', className: 'btn btn-success' },
            {
                extend: 'pdf',
                className: 'btn btn-warning',
                customize: function (doc) {
                    doc.content.splice(0, 1, {
                        text: 'Gestion des Factures',
                        fontSize: 18,
                        bold: true,
                        margin: [0, 0, 0, 12],
                        alignment: 'center'
                    });
                    doc.styles.tableHeader = {
                        fillColor: '#4CAF50',
                        color: 'white',
                        alignment: 'center'
                    };
                    doc.styles.tableBodyEven = { alignment: 'center' };
                    doc.styles.tableBodyOdd = { alignment: 'center' };
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }
            },
            {
                extend: 'print',
                className: 'btn btn-danger',
                customize: function (win) {
                    $(win.document.body)
                        .css('font-family', 'Arial, sans-serif')
                        .prepend('<h1 style="text-align: center; color: #4CAF50; margin-bottom: 20px;">Gestion des Factures</h1>');

                    $(win.document.body).find('table')
                        .addClass('table table-bordered')
                        .css({
                            'font-size': '12px',
                            'width': '100%',
                            'margin-bottom': '20px'
                        });

                    $(win.document.body).find('th, td')
                        .addClass('text-center')
                        .css({
                            'border': '1px solid #dee2e6',
                            'padding': '8px'
                        });

                    $(win.document.body).find('th')
                        .css({
                            'background-color': '#4CAF50',
                            'color': 'white'
                        });
                }
            }
        ]
    });

    // Print specific invoice on button click
    $('.btn-print').on('click', function () {
        var id = $(this).data('id');
        console.log("Selected invoice ID:", id);

        printInvoice(id);
    });

function printInvoice(id) {
    var row = $('#factures-table').DataTable().row('#facture-' + id);

    if (row.any()) {
        var data = row.data();

        var content = '<div style="font-family: Arial, sans-serif; padding: 20px; text-align: center;">';
        content += '<h1 style="color: #4CAF50;">N° Facture: ' + data[0] + '</h1>';
        content += '<p ><strong >Client:</strong> ' + data[1] + '</p>';
        content += '<p><strong>Vente ID:</strong> ' + data[2] + '</p>';
        content += '<p><strong style="color:red;">Montant total:</strong> ' + data[3] + '</p>';
        content += '</div>';

        var printWindow = window.open('', '_blank');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Facture</title></head><body style="background-color: #f4f4f4;">');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    } else {
        alert('Facture avec l\'identifiant spécifié n\'a pas été trouvée.');
    }
}

</script>







</body>
</html>
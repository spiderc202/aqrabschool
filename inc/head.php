<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <link rel="stylesheet" href="vendor/intl-tel-input/build/css/intlTelInput.css" />
  <title><?= $site_title ?></title>
  <style>
    .titles {
      font-family: 'Roboto Slab', serif;
      font-size: 18px;
    }

    .green-hr {
      display: block;
      margin-top: 0em;
      margin-bottom: 0.5em;
      margin-left: -5em;
      margin-right: -3em;
      border-style: inset;
      border-width: 2px;
      border-top: 3px solid <?= $primary_color ?>;
    }

    .red-hr {
      display: block;
      margin-top: -0.5em;
      margin-bottom: 1.5em;
      margin-left: -5em;
      margin-right: -3em;
      border-style: inset;
      border-width: 2px;
      /* border-color: red; */
      border-top: 3px solid <?= $secondary_color ?>;
    }

    .available {
      color: black;
      background-color: #e5e7e9;
      border-color: <?= $secondary_color ?>!important;
    }

    .bought {
      color: white;
      background-color: <?= $primary_color ?>;
      border-color: <?= $secondary_color ?>!important;
    }

    .font-lot {
      font-size: 6px;
    }

    .nav-link.active {
      font-size: 7px!important;
      color: black!important;
      background-color: #7dd627!important;
      font-weight: bold!important;
      border-color: white!important;
      border-bottom-color: #7dd627!important;
      padding-bottom: 10px;
      /* margin-bottom: 10px; */
    }

    .nav-link {
      font-size: 7px!important;
      color: white!important;
      background-color: #0e6d62!important;
      font-weight: bold!important;
      border-color: white!important;
      border-bottom-color: #0e6d62!important;
      padding-bottom: 10px;
    }

    .sidebar {
      margin: 0 -14px;
      margin-top: 10px;
      background-color: black;
      color: white;
      padding: 20px;
      /* font-weight: bold; */
    }

    .sub-sidebar {
      margin: 0 -14px;
      margin-top: 5px;
      background-color: black;
      color: white;
      padding: 5px;
      font-weight: normal;
      margin-bottom: 10px;
    }

    .header-img {
      width: 350px;
    }

    @media (min-width: 992px) {
      .nav-link.active {
        font-size: 13px!important;
        color: black!important;
        background-color: #7dd627!important;
        font-weight: bold!important;
        border-color: white!important;
        border-bottom-color: #7dd627!important;
        padding-bottom: 10px;
      }
      .nav-link {
        font-size: 13px!important;
        color: white!important;
        background-color: #0e6d62!important;
        font-weight: bold!important;
        border-color: white!important;
        border-bottom-color: #0e6d62!important;
        padding-bottom: 10px;
      }
      .font-lot {
        font-size: 14px;
      }
      .titles {
        font-family: 'Roboto Slab', serif;
        font-size: 26px;
      }
      .shadows {
        text-shadow:
        -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000;
        font-size: 24px;
        color: <?= $primary_color ?>;
        letter-spacing: 0.07em
      }
      .titles2 {
        font-family: 'Roboto Slab', serif;
        font-size: 16px;
        letter-spacing: 1px;
        /* font-weight: bold; */
      }
      .header-img {
        width: 540px;
      }
    }
  </style>
</head>

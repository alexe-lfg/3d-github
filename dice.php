<!DOCTYPE html>
<html lang="en">
<head>
    <!--Plugin JavaScript file-->
    <script src="script.js"></script>

    <script src="/files/jquery.js"></script>
    <script src="/files/cbrd.js"></script>
    <script src="/files/cookie.js"></script>
    <script src="/files/bootstrap.js"></script>
    <script src="/files/feather.js"></script>
    <script src="/files/typehead.js"></script>
    <script src="/files/perfect-scrollbar.js"></script>
    <script src="/files/jquery_005.js"></script>
    <script src="/files/jquery_006.js"></script>
    <script src="/files/jquery_003.js"></script>
    <script src="/files/Chart.js"></script>
    <script src="/files/dataTables.responsive.min.js"></script>
    <script src="/files/responsive.dataTables.min.js"></script>
    <script src="/files/dataTables.js"></script>
    <script src="/files/jquery_002.js"></script>
    <script src="/files/jquery_004.js"></script>
    <script src="/files/moment.js"></script>
    <script src="/files/daterangepicker.js"></script>
    <script src="/files/odometer.js"></script>

    <script src="/files/dfg_003.js"></script>
    <script src="/files/dfg.js"></script>
    <script src="/files/jquery-ui.min.js"></script>
    <script src="/files/ion.js"></script>


     <!-- vendor css -->
    <link href="/css/all.css" rel="stylesheet">
    <link href="/css/ionicons.css" rel="stylesheet">
    <link href="/css/jqvmap.css" rel="stylesheet">

    <!-- dfg CSS -->
    <link rel="stylesheet" href="/css/dfg_002.css">
    <link rel="stylesheet" href="/css/dfg.css">
    <link id="dfMode" rel="stylesheet" href="/css/skin.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Cabura.cash — развлечения и полноценный заработок</title>
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
    <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
                <a href="/" class="df-logo">Cabura</a>
                <a id="mainMenuClose" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></a>
            </div><!-- navbar-menu-header -->
            <ul class="nav navbar-menu">
                <li class="nav-item active"><a href="/" class="nav-link"> Главная</a></li>
                <li class="nav-item" datait="about"><a href="/about" class="nav-link"> Как играть</a></li>
                <li class="nav-item" datait="faq"><a href="/faq" class="nav-link"> FAQ</a></li>
                <li class="nav-item" datait="ref"><a href="#modalSignIn" data-toggle="modal" class="nav-link"> Рефералы</a></li>
                <li class="nav-item" datait="bonus"><a href="#modalSignIn" data-toggle="modal" class="nav-link"> Бонусы</a></li>
                <li class="nav-item" datait="support"><a href="#modalSignIn" data-toggle="modal" class="nav-link"> Контакты</a></li>
                <li class="nav-item d-none" datait="contacts"><a href="/contacts" class="nav-link"> Контакты</a></li>

            </ul>
        </div>
    <div class="card"> 
        <div class="card-header pd-y-20 d-md-flex align-items-center justify-content-between d-none d-sm-block">
            <h4 class="mg-b-0">Dice</h4>

        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
                    <div class="pd-dc">
                        <h5 class="tx-normal tx-rubik tx-dark tx-60 tx-spacing--1 mg-b-0 d-flex justify-content-center d-md-none" id="diceResultMobile">1.25</h5>
                        <p class="tx-13  tx-semibold tx-spacing-0 tx-color-03 d-flex justify-content-center tx-thin d-md-none">Возможный выигрыш</p>
                        <div class="row row-sm mg-t-10 ">
                            <div class="col-6 col-xs-6 col-md-6">
                                <h6 class="mg-b-15 h-mob-d">Cумма:</h6>
                                <div class="input-group tx-light tx-24 dice-input">
                                    <input value="1" id="diceGameAmount" autocomplete="off" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;" onkeyup="validateDiceGameAmount(this);updateResultSize()" class="tx-20 tx-center form-control tx-normal tx-rubik" placeholder="Сумма">
                                </div>
                                <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center">
                                    <button onclick="var max = $('#userBalance').attr('myBalance');$('#diceGameAmount').val(Math.max(max,1));updateResultSize()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Max</button>
                                    <button onclick="$('#diceGameAmount').val(1);updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Min</button>
                                    <button onclick="var x = ($('#diceGameAmount').val()*2);$('#diceGameAmount').val(parseFloat(x.toFixed(2)));updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">x2</button>
                                    <button onclick="$('#diceGameAmount').val(Math.max(($('#diceGameAmount').val()/2).toFixed(2), 1));updateResultSize()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">/2</button>
                                </div>


                            </div>
                            <div class="col-6 col-xs-6  col-md-6">
                                <h6 class="mg-b-15 h-mob-d">Шанс:</h6>
                                <div class="input-group tx-thin tx-24 dice-input">
                                    <input value="80" id="diceGamePercent" autocomplete="off" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;" onkeyup="validateDiceGamePercent(this);updateResultSize()" class="tx-20 tx-center form-control tx-normal tx-rubik" placeholder="Шанс">
                                </div>
                                <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center">
                                    <button onclick="$('#diceGamePercent').val(95);updateResultSize()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Max</button>
                                    <button onclick="$('#diceGamePercent').val(1);updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Min</button>
                                    <button onclick="$('#diceGamePercent').val(Math.min(($('#diceGamePercent').val()*2).toFixed(2), 95));updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines ">x2</button>
                                    <button onclick="$('#diceGamePercent').val(Math.max(($('#diceGamePercent').val()/2).toFixed(2).replace(/.00/g, ''), 1));updateResultSize()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines ">/2</button>
                                </div>


                            </div>
                        </div>
                        <div class="divider-text hash-mob mg-t-20">Hash игры</div>
                        <div class="col-md-12  tx-xs-center tx-color-03 tx-thin d-none d-sm-block hash-mob" id="hashBet">
                            1e47698bc3d6904105c1d8f89b8a65f84cbb2ef7ef6fd7dd08dfd29b9c6e5e55a7225d9cd0fc3a2443a54a73d64f9b0fe0fe9c330ae5f345bcd858ed82182768                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="col-lg-12 but-dice">
                        <h4 class="tx-normal tx-rubik tx-dark tx-60 tx-spacing--1 mg-b-0 justify-content-center d-none d-sm-flex" id="diceResult">1.25</h4>
                        <p class="tx-13  tx-semibold tx-spacing-0 tx-color-03 justify-content-center tx-thin d-none d-sm-flex" style="pointer-events: none">Возможный выигрыш</p>
                        <div class="row row-sm">
                            <div class="form-group col-6 col-md-6">
                                <p class="mg-b-0 tx-color-03 tx-thin d-flex justify-content-center mb-2 h-mob-d" style="pointer-events: none">0 - <span id="minButton" class="pd-l-3">799999</span></p>
                                <button onclick="bet('betMin')" id="buttonMin" style="padding: 11px;" class="btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Меньше</button>
                            </div>
                            <div class="form-group col-6 col-md-6 ">
                                <p class="mg-b-0 tx-color-03 tx-thin d-flex justify-content-center mb-2 h-mob-d" style="pointer-events: none"><span id="maxButton" class="pd-r-3">200000</span> - 999999</p>
                                <button onclick="bet('betMax')" id="buttonMax" style="padding: 11px;" class="btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Больше</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12 but-dice ht-30">
<center><div class="spinner-border" id="betLoad" role="status" style="color: #7a86a1;
    border: .1em solid currentColor;
    border-right-color: transparent;display:none">
                          <span class="sr-only">Loading...</span>
                        </div></center>
                        <button id="succes_bet" style="  padding: 11px;pointer-events: none;margin-top: 0px;display:none;" class="btn btn-block tx-medium btn-la-mob bg-success-dice tx-white bd-0 btn-sel-d "></button>
                        <button id="error_bet" style="padding: 11px; pointer-events:none; display:none; margin-top:0" class="btn btn-block tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d "></button>
                        <span id="checkBet" class="align-items-center link-03 justify-content-center mg-t-5" href="#checkModal" data-toggle="modal" style="display:none; cursor:pointer">Проверить игру</span>
                 
                    </div>
                </div>
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div>
</body>
</html>


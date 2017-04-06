<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
  <style>
    body {
      font-family: Bangla MN, sans-serif;
      background-color: white;
      margin: 0 auto;
    }
    #header {
      height: 60px;
      background-color: #4A4A4A;
      padding-top: 25px;
      padding-left: 25px;
    }
    #glasses {
      margin-top: 25px;
    }
    #glasses img {
      display:block;
      margin:auto;
    }
    #text {
      margin-top: 25px;
      margin-left: 30px;
      margin-right: 30px;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 15pt;
    }
    #product {
      color: #989798;
      text-align: left;
    }
    #price {
      color: #4A4A4A;
      text-align: right;
    }
    #checkout {
      margin-top: 25px;
      text-align: center;
    }
  </style>
</head>
<body>

  <div id="header">
    <img id="logo" src="/img/gafas-logo.png"/>
  </div>

  <div id="glasses">
    <img src="/img/gafas-img.png"/>
  </div>

  <div id="text">
    <div id="product">Gafas Azules</div>
    <div id="price">35,95 €</div>
  </div>

  <form id="checkout" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="tusgafas@azules.com">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="GafasAzules">
    <input type="hidden" name="amount" value="35.95">
    <input type="hidden" name="currency_code" value="EUR">
    <!-- <input type="hidden" name="no_shipping" value="1"> -->

  <script src="https://www.paypalobjects.com/api/button.js?"
       data-locale="es_ES" /* en_US, en_AU, en_GB, fr_CA, es_ES, it_IT, fr_FR, de_DE, pt_BR, zh_CN, da_DK, zh_HK, id_ID, he_IL, ja_JP, nl_NL, no_NO, pl_PL, pt_PT, ru_RU, sv_SE, th_TH, zh_TW */
       data-merchant="merchant-name"
       data-id="paypal-button"
       data-button="checkout"
       data-color="gold" /* gold, blue, silver */
       data-size="medium" /* small, tiny, medium */
       data-shape="pill" /* pill, rect */
       data-button_type="submit"
       data-button_disabled="false"
   ></script>

  </form>

</body>
</html>

<?php
     $request = [
        "language"=> "es",
        "command"=> "SUBMIT_TRANSACTION",
        "merchant"=> [
           "apiKey"=> "4Vj8eK4rloUd272L48hsrarnUA",
           "apiLogin"=> "pRRXKOl8ikMmt9u"
        ],
        "transaction"=> [
           "order"=> [
              "accountId"=> "512321",
              "referenceCode"=> "TestPayU",
              "description"=> "payment test",
              "language"=> "es",
              "signature"=> "7ee7cf808ce6a39b17481c54f2c57acc",
              "notifyUrl"=> "http://www.tes.com/confirmation",
              "additionalValues"=> [
                 "TX_VALUE"=> [
                    "value"=> 20000,
                    "currency"=> "COP"
              ],
                 "TX_TAX"=> [
                    "value"=> 3193,
                    "currency"=> "COP"
              ],
                 "TX_TAX_RETURN_BASE"=> [
                    "value"=> 16806,
                    "currency"=> "COP"
              ]
              ],
              "buyer"=> [
                 "merchantBuyerId"=> "1",
                 "fullName"=> "First name and second buyer  name",
                 "emailAddress"=> "buyer_test@test.com",
                 "contactPhone"=> "7563126",
                 "dniNumber"=> "5415668464654",
                 "shippingAddress"=> [
                    "street1"=> "calle 100",
                    "street2"=> "5555487",
                    "city"=> "Medellin",
                    "state"=> "Antioquia",
                    "country"=> "CO",
                    "postalCode"=> "000000",
                    "phone"=> "7563126"
                 ]
              ],
              "shippingAddress"=> [
                 "street1"=> "calle 100",
                 "street2"=> "5555487",
                 "city"=> "Medellin",
                 "state"=> "Antioquia",
                 "country"=> "CO",
                 "postalCode"=> "0000000",
                 "phone"=> "7563126"
              ]
           ],
           "payer"=> [
              "merchantPayerId"=> "1",
              "fullName"=> "First name and second payer name",
              "emailAddress"=> "payer_test@test.com",
              "contactPhone"=> "7563126",
              "dniNumber"=> "5415668464654",
              "billingAddress"=> [
                 "street1"=> "calle 93",
                 "street2"=> "125544",
                 "city"=> "Bogota",
                 "state"=> "Bogota DC",
                 "country"=> "CO",
                 "postalCode"=> "000000",
                 "phone"=> "7563126"
              ]
           ],
           "creditCard"=> [
              "number"=> "4097440000000004",
              "securityCode"=> "321",
              "expirationDate"=> "2019/12",
              "name" =>"APPROVED"
           ],
           "extraParameters"=> [
              "INSTALLMENTS_NUMBER"=> 1
           ],
           "type"=> "AUTHORIZATION_AND_CAPTURE",
           "paymentMethod"=> "VISA",
           "paymentCountry"=> "CO",
           "deviceSessionId"=> "vghs6tvkcle931686k1900o6e1",
           "ipAddress"=> "192.168.175.25",
           "cookie"=> "pt1t38347bs6jc9ruv2ecpv7o2",
           "userAgent"=> "Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0"
        ],
        "test"=> false
  ];
  $url = 'https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi';
  
  
  //Se inicia. el objeto CUrl
  $ch = curl_init($url);
  
  //creamos el json a partir del arreglo
  $jsonDataEncoded = json_encode($request);
  
  //Indicamos que nuestra petición sera Post
  curl_setopt($ch, CURLOPT_POST, 1);
  
  //para que la peticion no imprima el resultado como un echo comun, y podamos manipularlo
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
  //Adjuntamos el json a nuestra petición
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
  
  
        //Agregar los encabezados del contenido
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'User-Agent: cUrl Testing'));
  
  $response=curl_exec($ch);

  /*$result = str_replace(array("\n", "\r", "\t"), '', $response);
       $xml = simplexml_load_string($result);
       $object = new \stdclass();
       $object->webservice[] = $xml;
       $result = json_encode($object);
       header('content-Type: application/json');
       print $result;
  */
  print_r($response);
?>
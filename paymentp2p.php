 <?php
 	$seed = date('c');
        if (function_exists('random_bytes')) {
        $nonce = bin2hex(random_bytes(16));
      } elseif (function_exists('openssl_random_pseudo_bytes')) {
        $nonce = bin2hex(openssl_random_pseudo_bytes(16));
      } else {
        $nonce = mt_rand();
      }
      
      $secretKey = '024h1IlD';
      
      $nonceBase64 = base64_encode($nonce);
      
      $tranKey = base64_encode(sha1($nonce . $seed . $secretKey, true));
      
      $request = [
        'auth' => [
        'login' => '6dd490faf9cb87a9862245da41170ff2',
        'seed' => date('c'),
        'nonce' => $nonceBase64,
        'tranKey' => $tranKey,
        ],
      
       'buyer' => [
           'name' => 'John',
           'surname' => 'Doe',
           'email' => 'john.doe@example.com',
           'address' => [
               'city' => 'Bogotá',
               'street' => 'Calle 14 # 13b - 03'
           ]
       ],
       'payment' => [
           'reference' => '587548758',
           'description' => 'Testing payment',
           'amount' => [
                'currency' => 'COP',
                'total' => 10000
            ]
      
      ],
      
        'expiration' => date('c', strtotime('+2 days')),
        'returnUrl' => 'http://example.com/response?reference=',
        'ipAddress' => '127.0.0.1',
        'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
      ];
      
      //return $request;
      
      
      $url = 'https://test.placetopay.com/redirection/api/session';
      
      
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
      
      //Ejecutamos la petición
      $result = curl_exec($ch);
      
      
      print_r($result);
      ?>
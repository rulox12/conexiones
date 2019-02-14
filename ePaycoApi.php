<?php
$request = [
    "public_key"=> "45b960805ced5c27ce34b1600b4b9f54",
    "tipo_doc"=> "84Z9H44DIbHIbtWTAqt/5g==",
    "documento"=> "oki8uSkHqoR9UjkCNQZLuA==",
    "fechaExpedicion"=> "4fze5rCu6BhpEuEzORxPcQ==",
    "nombres"=> "enDmJC0lgrcfc4kXCUkApw==",
    "apellidos"=> "6SQR00bU4hwgpQOgRHE3Fg==",
    "email"=> "Xi6+dCcf1VNf+fOfdL/I489i0t3z3iR+dpJi2oYKRqo=",
    "pais"=> "/xj4+zt9oUQqDDhrAsxZ3g==",
    "depto"=> "b9WzUeEU+5dqTU+kUEC29A==",
    "ciudad"=> "6LdEzjnlJzetrKFyd2TwtA==",
    "telefono"=> "rSK+Jkfpk5xA1/yFAPGjwA==",
    "celular"=> "MgX2/Rg9IhsIclrR6rBcPw==",
    "direccion"=> "RuisJWpwvDR1/5ANPp2/6SCVeC50aUZUEH9M3u1qt1Q=",
    "ip"=> "dnBbYE+Iqv2Yid/XZpP43g==",
    "factura"=> "UyWuvm8CZ+JITVOnuzQI3w==",
    "descripcion"=> "HrjCJyRqc+PIniCs2cJodEoiJrP3iXHszYhAZowCuNQ=",
    "iva"=> "SN15iDtEvqRuqSEzIMy1uA==",
    "baseiva"=> "SN15iDtEvqRuqSEzIMy1uA==",
    "valor"=> "MkH9Jpoa8lNFWJIM3N1A6A==",
    "moneda"=> "BtJnH72ZhtIA8m7Tg2dq9g==",
    "tarjeta"=> "eNkjYyxrCOgxb9hdRxQoMq59kLD3DlG9keH1PyR8Ns8=",
    "fechaexpiracion"=> "TDGOhmWCw2Y+vWRWXkoM9g==",
    "codigoseguridad"=> "QG2ANxYV/Np6XvezGxudwQ==",
    "franquicia"=> "CpogvcXnoliSU4QonrYjXQ==",
    "cuotas"=> "wb4iJFl9GlXm7bZHX4VMSQ==",
    "url_respuesta"=> "tzhPnWgJOaHdH75arHBQh/DdyiJHjhC8mA8pJvYRTh4=",
    "url_confirmacion"=> "tzhPnWgJOaHdH75arHBQh/DdyiJHjhC8mA8pJvYRTh4=",
    "metodoconfirmacion"=> "JY8t3swUoHU4HV+AgyWF+Q==",
    "lenguaje"=> "php",
    "i"=> "MDAwMDAwMDAwMDAwMDAwMA==",
    "enpruebas"=> "vxGQj9FZusNz6NbwEzukeg=="
 ];
 $url = 'https://secure.payco.co/restpagos/pagos/comercios.json';
 
 
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
   $resuldecode= json_decode($result);
   print_r($resuldecode);


?>
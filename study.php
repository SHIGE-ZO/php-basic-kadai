<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
   //  $price=1000;
   //  $tax='軽減税率';
   //     if('標準税率'== $tax){
   //        $total_price = $price * 1.1;
   //     }elseif('軽減税率'==$tax){
   //        $total_price = $price * 1.08;
   //     };
   //     echo $total_price,$tax;

      function tax_in_price($tax){
         $price=1000;
         if($tax=='標準税率'){
            $price = $price * 1.1;
         }elseif($tax=='軽減税率'){
            $price = $price * 1.08;
         }
      };
         $total_price = tax_in_price('標準税率');
         echo $total_price;
       ?>
</body>
</html>
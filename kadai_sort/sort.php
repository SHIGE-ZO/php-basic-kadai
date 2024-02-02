<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
     $array = [15, 4, 18, 23, 10 ];
     function sort_2way ($array,$oder) {
       if($oder){
        sort($array);
        echo '昇順にソートします。<br>';
       }else{
        rsort($array);
        echo '降順にソートとします。<br>';
        };
       foreach ($array as $val){
        echo $val.'<br>';
        };
      };
     sort_2way($array,TRUE);
     sort_2way($array,FALSE);
      
    ?>
  </p>
</body>
</html>
<!-- // $name = filter_input(INPUT_POST,"user_name");
// $email = filter_input(INPUT_POST,"user_email");
// $gender = filter_input(INPUT_POST,"user_gender");
// $category = filter_input(INPUT_POST,"category");
// $message = filter_input(INPUT_POST,"message"); -->
<?php 
 $name = $_POST['user_name'];
 $email = $_POST["user_email"];
 $gender = $_POST["user_gender"];
 $category = $_POST["category"];
 $message = $_POST["message"];
 ?>
 
 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
   <title>PHP基礎</title>
 </head>
   <body>
     <h2>入力内容をご確認ください。</h2>
     <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

     <table border="1">
       <tr>
         <th>項目</th>
         <th>入力内容</th>
       </tr>
       <tr>
         <td>お名前</td>
         <td><?php echo $name; ?></td>
       </tr>
       <tr>
         <td>メールアドレス</td>
         <td><?php echo $email;?></td>
       </tr>
       <tr>
         <td>性別</td>
         <td><?php echo $gender;?></td>
       </tr>
       <tr>
         <td>お問い合わせ種別</td>     
         <td><?php echo $category;?></td>
       </tr>
       <tr>
       <td>お問い合わせ内容</td>
       <td><?php echo $message;?></td>
       </tr>
     </table>

     <button id="confirm-btn" onclick="location.href=complete.php";>確定</button>
     <button id="cancel-btn" history.back;>キャンセル</button>
   </body>
 </html>
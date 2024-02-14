<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h2>お問い合わせ</h2>
  <!-- action属性でデータの送信先URLを指定 -->
  <form action="confirm.php" merhod="post">
    <table>
      <tr>
        <td>お名前</td>
        <td>
          <input type="text" name="user_name">
        </td>
      </tr> 
      <tr>
        <td>メールアドレス</td>
        <td>
          <input type="text" name="user_email">
        </td>
      </tr>
      <tr>
        <td>性別</td>
        <td>
          <input type="radio" name="user_gender" value="男性"checked>男性
          <input type="radio" name="user_gender" value="女性">女性
          <input type="radio" name="user_gender" value="その他">その他
        </td>
      </tr>
      <tr>
        <td>お問い合わせ種別</td>
        <td>
          <select name="category">
            <option value="ご意見やご感想">ご意見やご感想</option>
            <option value="不具合について">不具合について</option>
            <option value="その他">その他</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>お問い合わせ内容</td>
        <!-- clos属性＝入力欄の幅（文字数）、rows属性＝入力欄の高さ（行数） -->
        <td>
          <textarea name="message" cols="30" rows="10"></textarea>
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
    <!-- input type属性でテキストボックスを作製
    <label>お名前</label>
    <input type="text" placeholder="名前を入力してください">
    <br>
    <label>メールアドレス</label>
    <input type="text" placeholder="メールアドレスを入力してください">
    <br>
    <!-- input radio属性でラジオボタンを作製  -->
    <!-- <label>男性</label><input type="radio"  name="gender">
    <label>女性</label><input type="radio"  name="gender">
    <label>その他</label><input type="radio"  name="gender">
    <br> -->
    <!-- selectタグの中にoptionタグを記述し、セレクトボックス（選択肢）を作製 -->
    <!-- <label>お問い合わせ種別</label>
    <select>
      <option>選択肢1</option>
      <option>選択肢1</option>
      <option>選択肢1</option>
    </select>
    <br> -->
    <!-- テキストエリアタグでテキストエリアを作製 -->
    <!-- <label>お問い合わせ内容</label>
    <textarea></textarea>
    <br> -->
    <!-- input type属性で送信ボタン（submit）を作製 -->
    <!-- <input type="submit" value="送信"> -->
    <!-- input type属性でキャンセルボタン（reset）を作製 -->
    <!-- <input type="reset" value="キャンセル"> -->
  </form>
</body>
</html>
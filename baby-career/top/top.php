<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/top.css" class="css">
  <title>Document</title>
</head>
<body>

<header class="header">
  <div class="top-container">
    <h1 class="logo">Baby Career</h1>
  </div>
</header>


<div class="banner">
  <p>Baby Careerで0歳からお子さんの将来のプランを立てませんか?
    <br>
    目指す大学・年収・希望する小中高の地域を選択すれば、その状況に近い現役大学生が検索できます</p>
</div>



<form action="search.php" method="post" enctype="multipart/form-data">
<div class="container">
  <div class="control-group" id="purudown">
    <h1>目指す大学</h1>
    <div class="select" >
      <select name="university">
        <option value="上智">上智</option>
      </select>
    </div>
    </div>
  <div class="checkbox-container">
    
    <div class="control-group">
      <h1>年収</h1>
      <label for="income-1" class="radio-label">
      <input type="radio" id="income-1" class="radio" value="1" name="income" checked>
        <span class="label-check check">
          ～200万
        </span>
    </label>
    <label for="income-2" class="radio-label">
      <input type="radio" id="income-2" class="radio" value="2" name="income">
        <span class="label-check check">
          200万～400万
        </span>
    </label>
    <label for="income-3" class="radio-label">
      <input type="radio" id="income-3" class="radio" value="3" name="income">
        <span class="label-check check">
        400万～600万
        </span>
    </label>
    <label for="income-4" class="radio-label">
      <input type="radio" id="income-4" class="radio" value="4" name="income">
        <span class="label-check check">
        600万～800万
        </span>
    </label>
    <label for="income-5" class="radio-label"> 
      <input type="radio" id="income-5" class="radio" value="5" name="income">
        <span class="label-check check">
        800万～1000万
        </span>
    </label>
    <label for="income-6" class="radio-label"> 
      <input type="radio" id="income-6" class="radio" value="6" name="income">
        <span class="label-check check">
        1000万~
        </span>
    </label>
    </div>
    <div class="control-group">
      <h1>希望する小中高の地域</h1>
      <label for="blood-1" class="radio-label">
      <input type="radio" id="blood-1" class="radio" value="関東圏" name="blood" checked>
        <span class="label-check check">
          関東圏
        </span>
    </label>
    <label for="blood-2" class="radio-label">
      <input type="radio" id="blood-2" class="radio" value="埼玉県" name="blood">
        <span class="label-check check">
          埼玉
        </span>
    </label>
    <label for="blood-3" class="radio-label">
      <input type="radio" id="blood-3" class="radio" value="千葉県" name="blood">
        <span class="label-check check">
         千葉
        </span>
    </label>
    <label for="blood-4" class="radio-label">
      <input type="radio" id="blood-4" class="radio" value="東京県" name="blood">
        <span class="label-check check">
          東京
        </span>
    </label>
    <label for="blood-5" class="radio-label">
      <input type="radio" id="blood-5" class="radio" value="神奈川県" name="blood">
        <span class="label-check check">
         神奈川
        </span>
    </label>
    </div>
  </div>

  <input type="submit" value="検索する" class="btn">
</form>
</div>

  
</body>
</html>
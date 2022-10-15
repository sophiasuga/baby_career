<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
 <a href="../top/top.php">トップページへ</a>
<form action="student_add_check.php" method="post">
<p>性別</p>
<input type="radio" name="sex" value="1" id="sex_1"><label for="sex_1">男</label>
<input type="radio" name="sex" value="0" id="sex_0"><label for="sex_0">女</label>

 <p>年収</p>
<p><select name="income">
  <option value="1">~200万</option>
  <option value="2">200万～400万</option>
  <option value="3">400万～600万</option>
  <option value="4">600万～800万</option>
  <option value="5">800万～1000万</option>
  <option value="6">1000万～</option>
</select></p>
<p>奨学金</p>
<input type="radio" name="scholarship" value="1" id="scholarship_1"><label for="scholarship_1">有</label>
<input type="radio" name="scholarship" value="0" id="scholarship_0"><label for="scholarship_0">無</label>

<p> 出身地：</p>
<p><select name="blood" >

<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
</select></p>

<p>大学名：</p>
<select name="university" id="">
  <option value="上智">上智</option>
</select><br>

<p>入学年</p>
<select name="enroll_year" >
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
</select><br>


<p>学部:</p>
<input type="text" name="faculty">学部
<br>

<p>入試方式</p>
<select name="exam-type" >
  <option value="一般入試">一般入試</option>
  <option value="指定校推薦">指定校推薦</option>
  <option value="AO入試">AO入試</option>
  <option value="公募推薦">公募推薦</option>
  <option value="国際バカロレア">国際バカロレア</option>
</select>

<p>経歴</p>
<input type="text" name="primary" placeholder="（例）〇〇県立〇〇小学校" >→
<input type="text" name="junior_high" placeholder="（例）××私立××中学校">→
<input type="text" name="high" placeholder="（例）〇〇県立〇〇高校">
<br>

<p>高校偏差値</p>
<select name="high_school_level" >
  <option value="1">40以下</option>
  <option value="2">40～50</option>
  <option value="3">51～55</option>
  <option value="4">56～60</option>
  <option value="5">61～65</option>
  <option value="6">66～70</option>
  <option value="7">それ以上</option>
</select>

<p>高校時の成績</p>
<input type="number" name="grade" step="0.1" value="3.0" max="5" min="1">

<br>
<p>同じ高校から何人ほど入学したか？</p>
<select name="how_many_student" >
  <option value="1">1人</option>
  <option value="2">2～5人</option>
  <option value="3">6～10人</option>
  <option value="4">11～15人</option>
  <option value="5">それ以上</option>
</select><br>




  <input type="submit" value="登録する" class="btn">
 </form>

  
</body>
</html>
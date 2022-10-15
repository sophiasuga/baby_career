<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>document</title>
</head>

<body>
<?php
  $income = htmlspecialchars($_POST['income'], ENT_QUOTES);
  $sex = htmlspecialchars($_POST['sex'], ENT_QUOTES);
  $scholarship = htmlspecialchars($_POST['scholarship'], ENT_QUOTES);
  $blood = htmlspecialchars($_POST['blood'], ENT_QUOTES);
  $university = htmlspecialchars($_POST['university'], ENT_QUOTES);
  $enroll_year = htmlspecialchars($_POST['enroll_year'], ENT_QUOTES);
  $faculty = htmlspecialchars($_POST['faculty'], ENT_QUOTES);
  $exam_type = htmlspecialchars($_POST['exam-type'], ENT_QUOTES);
  $primary = htmlspecialchars($_POST['primary'], ENT_QUOTES);
  $junior_high = htmlspecialchars($_POST['junior_high'], ENT_QUOTES);
  $high = htmlspecialchars($_POST['high'], ENT_QUOTES);
  $high = htmlspecialchars($_POST['high'], ENT_QUOTES);
  $high_school_level = htmlspecialchars($_POST['high_school_level'], ENT_QUOTES);
  $grade = htmlspecialchars($_POST['grade'], ENT_QUOTES);
  $how_many_student = htmlspecialchars($_POST['how_many_student'], ENT_QUOTES);
  
  
print $sex;
  if($income==''){
    print '年収が入力されていません';
  }else{
    
    if($income==1){
      print '~200万';
    }elseif($income==2){
      print '200~400万';
    }elseif($income==3){
      print '400~600万';
    }elseif($income==4){
      print '600~800万';
    }elseif($income==5){
      print '800~1000万';
    }elseif($income==6){
      print '1000万~';
    }
    
    print '<br>';
  }
  if($blood==''){
    print '出身地が入力されていません';
  }else{
    print $blood;
    print '<br>';

  }
  if($university==''){
    print '大学名が入力されていません';
  }else{
    print $university;
    print '<br>';

  }

  if($enroll_year==''){
    print '入学年が入力されていません';
  }else{
    
    if($enroll_year==2015){
      print '2015年';
    }elseif($enroll_year==2016){
      print '2016年';
    }elseif($enroll_year==2017){
      print '2017年';
    }elseif($enroll_year==2018){
      print '2018年';
    }elseif($enroll_year==2019){
      print '2019年';
    }elseif($enroll_year==2020){
      print '2020年';
    }elseif($enroll_year==2021){
      print '2021年';
    }elseif($enroll_year==2022){
      print '2022年';
    }
    print '<br>';
  }


  if($faculty==''){
    print '学部が入力されていません';
  }else{
    print $faculty;
    print '<br>';
  }
  if($exam_type==''){
    print '入試方法が入力されていません';
  }else{
    print $exam_type;
    print '<br>';
  }


if($sex==''){
 print '性別を選択してください';
}else{
    if($sex==1){
      print '男';
      print '<br>';
    }elseif($sex==0){
      print '女';
      print '<br>';
    }
  }



  if($scholarship==''){
    print '奨学金の有無を入力してください';
    print '<br>';
  }else{
    if($scholarship==1){
      print '有';
      print '<br>';
    }elseif($scholarship==0){
      print '無';
      print '<br>';
    }
  }
  if ($primary== '') {
    print '小学校が入力されていません';
    print '<br>';
  } else {
    print '小学校:';
    print $primary;
    print '<br>';
  }
  if ($junior_high=='') {
    print '中学校が入力されていません';
    print '<br>';
  } else {
    print '中学:';
    print $junior_high;
    print '<br>';
  }
  if($high==''){
    print '高校が入力されていません';
  }else{
    print '高校';
    print $high;
    print '<br>';
  }
  
  if($high_school_level==''){
    print '高校偏差値が入力されていません';
  }else{
    
    if($high_school_level==1){
      print '～40';
    }elseif($high_school_level==2){
      print '40～50';
    }elseif($high_school_level==3){
      print '50～55';
    }elseif($high_school_level==4){
      print '56～60';
    }elseif($high_school_level==5){
      print '61～65';
    }elseif($high_school_level==6){
      print '66～70';
    }elseif($high_school_level==7){
      print 'それ以上';
    }
    print '<br>';
  }
  if($grade==''){
    print '成績が入力されていません';
  }else{
    print '成績';
    print $grade;
    print '<br>';
  }
  if($how_many_student==''){
    print '同じ高校からの合格者数が入力されていません';
  }else{
    print '同じ高校からの合格者数';
    print $how_many_student;
    print '<br>';
  }

  if ($income==''||$blood==''||$university==''||$faculty==''||$exam_type==''|| $sex=='' || $scholarship=='' ||$primary == '' || $junior_high == '' || $high == ''||$grade==''||$how_many_student=''||$high_school_level==''){
    print '<form >';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print "</form>";
  } else {
   
    print '<form action ="student_add_done.php" method="post">';

    print '<input type="hidden" name="income" value="'.$income.'">';
    print '<input type="hidden" name="sex" value="'.$sex.'">';
    print '<input type="hidden" name="scholarship" value="'.$scholarship.'">';
    print '<input type="hidden" name="blood" value="'.$blood.'">';
    print '<input type="hidden" name="university" value="'.$university.'">';
    print '<input type="hidden" name="enroll_year" value="'.$enroll_year.'">';
    print '<input type="hidden" name="faculty" value="'.$faculty.'">';
    print '<input type="hidden" name="exam_type" value="'.$exam_type.'">';
    print '<input type="hidden" name="primary" value="'.$primary.'">';
    print '<input type="hidden" name="junior_high" value="'.$junior_high.'">';
    print '<input type="hidden" name="high" value="'.$high.'">';
    print '<input type="hidden" name="high_school_level" value="'.$high_school_level.'">';
    print '<input type="hidden" name="grade" value="'.$grade.'">';
    print '<input type="hidden" name="how_many_student" value="'.$how_many_student.'">';

    print '<input type="submit" value="登録する">';
    print "</form>";
  }

  ?>


</body>

</html>
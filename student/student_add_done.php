<?php
try {
  $income = htmlspecialchars($_POST['income'], ENT_QUOTES);
  $sex = htmlspecialchars($_POST['sex'], ENT_QUOTES);
  $scholarship = htmlspecialchars($_POST['scholarship'], ENT_QUOTES);
  $blood = htmlspecialchars($_POST['blood'], ENT_QUOTES);
  $university = htmlspecialchars($_POST['university'], ENT_QUOTES);
  $enroll_year = htmlspecialchars($_POST['enroll_year'], ENT_QUOTES);
  $faculty = htmlspecialchars($_POST['faculty'], ENT_QUOTES);
  $exam_type = htmlspecialchars($_POST['exam_type'], ENT_QUOTES);
  $primary = htmlspecialchars($_POST['primary'], ENT_QUOTES);
  $junior_high = htmlspecialchars($_POST['junior_high'], ENT_QUOTES);
  $high = htmlspecialchars($_POST['high'], ENT_QUOTES);
  $high_school_level = htmlspecialchars($_POST['high_school_level'], ENT_QUOTES);
  $grade = htmlspecialchars($_POST['grade'], ENT_QUOTES);
  $how_many_student = htmlspecialchars($_POST['how_many_student'], ENT_QUOTES);

  $db = new PDO('mysql:dbname=baby_career;host=localhost', 'root');
  $stt = $db->prepare('INSERT INTO student SET university_name=?,enroll_year=?, sex=?,scholarship=?,income=?,blood=?,exam_type=?,primary_=?,junior_high=?,high=?,faculty=?,grade=?,how_many_student=?,high_school_level=?');
  $stt->execute(array($university,$enroll_year,$sex,$scholarship,$income,$blood,$exam_type,$primary,$junior_high,$high,$faculty,$grade,$how_many_student,$high_school_level));
  $db = null;

  print '追加しました';
} catch (Exception $e) {
  print  $e->getMessage();
  exit();
}

?>
<a href="../top/top.php">トップページへ</a>
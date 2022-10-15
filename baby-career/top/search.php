
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/search.css">
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
    
    <?php
$income=htmlspecialchars($_POST['income'],ENT_QUOTES);
$blood=htmlspecialchars($_POST['blood'],ENT_QUOTES);
$university_name=$_POST['university'];

//大学情報取得
try{
  $db = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=sophitaro_baby', 'sophitaro_suyu','Tshy0915');
  $universitys=$db->prepare('SELECT * FROM university WHERE name=? ');
  $universitys->execute(array($university_name));
  $university=$universitys->fetch();

}catch(Exception $e){
  echo $e->getMessage();
}

//サーチ結果取得
if($_POST['blood']=='関東圏'){
  $db = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=sophitaro_baby', 'sophitaro_suyu','Tshy0915');
  $states=$db->prepare('SELECT * FROM student where university_name=? AND income=?');
  $states->execute(array($university_name,$income));
  
}else{
  try{
     $db = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=sophitaro_baby', 'sophitaro_suyu','Tshy0915');
    $states=$db->prepare('SELECT *  FROM student where university_name=? AND blood=? AND income=?');
    $states->execute(array($university_name,$blood,$income));
    
  
  }catch(Exception $e){
    echo $e->getMessage();
  }
}

// 件数取得
if($_POST['blood']=='関東圏'){
   $db = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=sophitaro_baby', 'sophitaro_suyu','Tshy0915');
   $counts=$db->prepare('SELECT Count(*) AS student_count FROM student where university_name=? AND income=?');
   $counts->execute(array($university_name,$income));
   $count=$counts->fetch();
 }else{
try{
   $db = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=sophitaro_baby', 'sophitaro_suyu','Tshy0915');
  $counts=$db->prepare('SELECT Count(*) AS student_count  FROM student where university_name=? AND blood=? AND income=?');
  $counts->execute(array($university_name,$blood,$income));
  $count=$counts->fetch();

}catch(Exception $e){
  echo $e->getMessage();
}
 }

?>


<header class="header">
  <div class="container">
    <h1 class="logo">Baby Career</h1>
    <ul class="nav">
      <li><a href="top.php">top-page</a></li>
      <li><a href="#university">about-university</a></li>
    </ul>
  </div>
</header>


<div class="banner"><?php print $university_name; ?>大学</div>
<div class="search_result">
  <p><?php print $count['student_count']; ?>人の生徒がヒット</p>
</div>

<div class="body">

  <?php while($search=$states->fetch()): ?>
  <div class="hit-student">
    
      <div class="sex">
        <?php if($search['sex']==1): ?>
          <i class="fa-solid fa-person fa-6x man"></i>
          <p class="japanese-man">男性</p>
          <?php else: ?>
            <i class="fa-solid fa-person-dress fa-6x woman"></i>
            <p class="japanese-woman">女性</p>
            <?php endif; ?>
        <p><?php print $search['enroll_year']; ?>年入学</p>
      </div>  
      <section class="someTabs" data-tabs>
        <nav class="tabs__nav">
          <a href="#" class="tabs__item active" data-tab>個人情報</a>
          <a href="#" class="tabs__item" data-tab>経歴</a>
          <a href="#" class="tabs__item" data-tab>質問</a>
        </nav>
        <div class="tabs__div ">
          <div class="tabs__content active" data-tab-content>
          <div class="about_student">
                  
                  <div class="faculty">
                  <div class="faculty-title">学部</div>  
                  <div class="student-faculty"><?php print  $search['faculty']; ?>学部</div>
                </div>
              
              <div class="income">
              <div class="income-title">親の年収</div>
              <div class="student-income">
    
            <?php  if($income==1){
              print '~200万';
            }elseif($income==2){
              print '200~400万';
            }elseif($income==3){
              print '400~600万';
            }elseif($income==4){
              print'600~800万';
            }elseif($income==5){
              print '800~1000万';
            }elseif($income==6){
               print '1000万~';
            };  ?>
              </div>
              </div>
              <div class="scholarship">
                <div class="scholarship-title">奨学金</div>
                <div class="student-scholarship">
    
                <?php 
                 if($search['scholarship']==1){
                print '有';
              }else{
                print '無';
              }
              ; ?>
                </div>
              </div>
             </div>
          </div>
              <div class="tabs__content" data-tab-content>
              <div class="student_career">
                <div class="primary">
                  <p class="student-primary"><?php print $search['primary_']; ?></p>
                  <div class="how_junior_high">
                  <i class="fa-solid fa-forward fa-lg"></i>
                  </div>
                </div>
                <div class="junior_high">
                  <p class="student-junior_high"><?php print $search['junior_high']; ?></p>
                  <div class="how_high">
                    <i class="fa-solid fa-forward fa-lg"></i>
                  </div>
                </div>
                <div class="high">
                  <div class="student-high">
                    <a href="high.php" ><?php print $search['high']; ?></a>
                    (<?php print $search['high_school_level']; ?>)
                  </div>
                 <section class="how_university">
                  <p class="arrow"><i class="fa-solid fa-forward fa-lg"></i></p>
                  <p class="student-exam_type"><?php print $search['exam_type'] ?></p>
                 </section>
                  </div>
                  <div class="university">
                    <?php print $search['university_name']; ?>
                  </div>
            
              </div>
              </div>
              <div class="tabs__content" data-tab-content>
              <div class="personal_Q">
                <div class="exam_type">
                  <div class="question">・入試方法</div>
                  <div class="answer"><?php print $search['exam_type'] ?></div>
                </div>
                <div class="personal_Q1">
                  <div class="question">・5段階成績</div>
                  <div class="answer"><?php print $search['grade']; ?></div>
                </div>
            
                <div class="personal_Q2">
                 <div class="question">・<?php print $search['university_name']; ?>への入学者数</div>
                 <div class="answer">
                   
                   <?php if($search['how_many_student']==1): ?>
                    1人
                    <?php elseif($search['how_many_student']==2): ?>
                    2~5人
                    <?php elseif($search['how_many_student']==3): ?>
                    6~10人
                    <?php elseif($search['how_many_student']==4): ?>
                      11~15人
                    <?php elseif($search['how_many_student']==5): ?>
                      それ以上
                    <?php endif; ?>
                    
                    </div> 
                  
                </div>
                
            
              </div>
            </div>
        </div>
      </section>
    </div>
    
    <?php endwhile; ?>
    
   <div class="about_university" id="university">
 
 <h1>大学情報</h1>

 <div class="box">
   <div class="box1">
     <h2 class="cost_top">費用/情報
     </h2>
        <div class="info">
          <div class="university_name"><p class="theme">大学名</p><p class="detail"><?php print $university_name; ?></p></div>
          <div class="tuition"><p class="theme">授業料</p><p class="detail"><?php print $university['tuition']; ?>円</p></div>
          <div class="facility_fee"><p class="theme">施設費</p><p class="detail"><?php print $university['facility_fee']; ?>円</p></div>
          <div class="home_page"><p class="theme">HP</p><a class="detail"><?php print $university['Home_page']; ?></a></div>
       </div>
  </div>
  
  <div class="box2">
  <h2 scholarship_top>奨学金</h2>
   <div class="info">

   <div class="scholarship_name"><p class="theme">名前</p><p p class="detail"><?php print $university['scholarship']; ?></p></div>
   <div class="is_Scholarship_Refund"><p class="theme">返金の有無</p><p p class="detail"><?php if($university['is_Scholarship_Refund']==0):?>
       *返金する必要ありません
      <?php elseif($university['is_Scholarship_Refund']==1) :?>
        <p>返金が必要です</p>
        <?php endif ; ?></p></div>
  
   <div class="HowScholarship"><p class="theme">支給額</p><p p class="detail"><?php print $university['HowScholarship']; ?></p></div>
   <div class="scholarship_criterion"><p class="theme">基準</p><p p class="detail"><?php print $university['scholarship_criterion']; ?></p></div>
   <div class="scholarship_memo"><p class="theme">その他</p><p p class="detail"><?php print $university['scholarship_memo']; ?></p></div>
 </div>
  </div>

 </div>

   </div>  


</div>

    
 <script src="../js/search.js"></script>

</body>
</html>

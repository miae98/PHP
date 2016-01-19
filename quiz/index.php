<?php
header("Content-Type: text/html;  charset=UTF-8");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<h1>나랑 잘 어울리는 남자 아이돌은?</h1>
<h3>
수많은 남자 아이돌 중 당신과 가장 잘 어울리는 남자 아이돌을 추천해드립니다
</h3>
<h4><?=$count?>명이 참여했습니다.</h4>

<form method="post"  action="index.php"  class="navbar-form navbar-left">
  <div class="form-group">
   
    <input type="text"  class="form-control"  id="name"  name="name"  placeholder="이름을 입력하세요">
  </div>
  <button type="submit"  class="btn btn-default">테스트 하기</button>
</form>

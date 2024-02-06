<?php
$title = 'Home';
  require_once('inc/header1.php');
  // include_once('inc/header.php');
?>

<p>ABC.com에 오신 것을 환영합니다!</p>

<?php
  include('inc/footer.php');
?>

<!-- 
  include는 그 파일을 제외한 뒤에 있는 파일은 그대로 보여줌
  require는 반드시 그 파일이 존재해야함.
  해당파일이 없을 경우 warning / fatal error
  여러번 포함 include() / require()
  한 번만 포함 include_once() / require_once()
-->
<?php
// 내 서버가 외부에 요청을 보낼 때 사용하는 실제 아웃바운드 IP
echo "전달할 API 호출 IP: " . file_get_contents('https://api.ipify.org');
?>

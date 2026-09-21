<?php
// 서버에서 외부로 요청을 보내어 실제 아웃바운드 공인 IP를 가져옴
header('Content-Type: text/plain; charset=utf-8');
echo file_get_contents('https://api.ipify.org');
?>
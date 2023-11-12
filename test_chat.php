<?php
$github_user = 'kittichok555';
$github_repo = 'testchat-gpt';

$api_url = "https://api.github.com/repos/{$github_user}/{$github_repo}/commits";

// ส่วนนี้ใช้ cURL เพื่อทำ HTTP request
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// แปลง JSON response เป็น associative array
$data = json_decode($result, true);

// ตัวอย่างการดึงข้อมูล commit
$latest_commit = $data[0]['commit']['message'];
echo "Latest commit message: {$latest_commit}";
?>
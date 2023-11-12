<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$github_user = 'kittichok555';
$github_repo = 'testchat-gpt';

$api_url = "https://api.github.com/repos/{$github_user}/{$github_repo}/commits";

// ส่วนนี้ใช้ cURL เพื่อทำ HTTP request
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// เพิ่ม header สำหรับ GitHub API token
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer YOUR_GITHUB_TOKEN']);
$result = curl_exec($ch);

// ตรวจสอบว่าได้รับข้อมูลจาก GitHub API ได้สำเร็จหรือไม่
if ($result === false) {
    die('Error fetching data from GitHub API');
}

curl_close($ch);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChatGPT</title>
</head>
<body>

<form method="POST" action="test_chat.php">
    
    <label for="user_input">ป้อนข้อความ:</label>
    <input type="text" id="user_input" name="user_input" required>

    <button type="submit">ส่งข้อความ</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าจาก POST request
    $user_input = $_POST['user_input'];

    // ทำตามที่คุณต้องการกับ $user_input

    // ตัวอย่าง: ให้ ChatGPT ตอบโดยใช้ $user_input
    $response = "คุณพูดว่า: " . $user_input;
} else {
    // ถ้าไม่ได้รับ POST request
    $response = "ยังไม่ได้รับข้อมูลผ่านทาง POST";
}

// แสดงผลลัพธ์
echo $response;
?>
</body>
</html>
</body>
</html>
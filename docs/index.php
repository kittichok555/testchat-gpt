<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenAI WebGPT Integration</title>
</head>
<body>
    
    <?php

    // OpenAI API key
    $apiKey = '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';
    
    // ChatGPT API endpoint
    $endpoint = 'https://api.openai.com/v1/chat/completions';
    
    // User input
    $userInput = 'สวัสดี, ChatGPT!';
    
    // Request data
    $data = [
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            ['role' => 'system', 'content' => 'You are a helpful assistant.'],
            ['role' => 'user', 'content' => $userInput],
        ],
    ];
    
    // Set up HTTP headers
    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ];
    
    // Initialize cURL session
    $ch = curl_init($endpoint);
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Execute cURL session
    $response = curl_exec($ch);
    
    // Close cURL session
    curl_close($ch);
    
    // Decode and print the response
    $result = json_decode($response, true);
    echo $result['choices'][0]['message']['content'];
    
    ?>
</body>
</html>

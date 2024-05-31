<?php
require_once 'controllers/ChatController.php';

$chatController = new ChatController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'sendMessage') {
    $username = $_POST['username'];
    $message = $_POST['message'];
    if ($chatController->sendMessage($username, $message)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getMessages') {
    $messages = $chatController->getMessages();
    foreach ($messages as $message) {
        echo "<p class='message'>" . htmlspecialchars($message['time']) . " " . htmlspecialchars($message['username']) . ": " . htmlspecialchars($message['message']) . "</p>";
    }
    exit;
}

include 'views/chat.php';

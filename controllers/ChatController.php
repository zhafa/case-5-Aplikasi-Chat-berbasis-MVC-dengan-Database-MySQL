<?php
require_once 'models/ChatModel.php';

class ChatController
{
    private $chatModel;

    public function __construct()
    {
        $this->chatModel = new ChatModel();
    }

    public function sendMessage($username, $message)
    {
        return $this->chatModel->sendMessage($username, $message);
    }

    public function getMessages()
    {
        return $this->chatModel->getMessages();
    }
}

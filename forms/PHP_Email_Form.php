<?php
class PHP_Email_Form {
    public $to = '';
    public $from_name = '';
    public $from_email = '';
    public $subject = '';
    public $message = '';

    public function send() {
        if (empty($this->to) || empty($this->from_email) || empty($this->subject) || empty($this->message)) {
            return "Error: All fields are required.";
        }

        $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
        if (mail($this->to, $this->subject, $this->message, $headers)) {
            return "Message sent successfully.";
        } else {
            return "Error: Message could not be sent.";
        }
    }
}
?>

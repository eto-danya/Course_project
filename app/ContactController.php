<?php
class ContactController {
    public function index() {
        require_once '../views/layout/header.php';
        require_once '../views/contact.php';
        require_once '../views/layout/footer.php';
    }
}
<?php
require 'Form.php';

$form = new DWA\Form($_GET);

$submitted = $form->isSubmitted();

if ($submitted) {
    $errors = $form->validate(
        [
            'email' => 'required|email',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|digit|minLength:10|maxLength:10',
        ]
    );
}
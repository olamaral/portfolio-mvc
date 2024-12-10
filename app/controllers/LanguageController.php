<?php
require_once __DIR__ . '/../models/LanguageModel.php';

class LanguageController {
    private $model;
    private $supportedLanguages = ['en', 'pt', 'ja'];

    public function __construct() {
        session_start();
        $language = $this->detectLanguage();
        $this->model = new LanguageModel($language);
    }

    private function detectLanguage() {
        // Prioritize language selection order
        if (isset($_GET['lang']) && in_array($_GET['lang'], $this->supportedLanguages)) {
            $_SESSION['language'] = $_GET['lang'];
            return $_GET['lang'];
        }

        if (isset($_SESSION['language'])) {
            return $_SESSION['language'];
        }

        // Detect browser language
        $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);
        return in_array($browserLang, $this->supportedLanguages) ? $browserLang : 'en';
    }

    public function renderView() {
        $data = $this->model->getData();
        require __DIR__ . '/../views/portfolio.php';
    }
}
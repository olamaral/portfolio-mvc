<?php

if (!class_exists('LanguageModel')) {
    class LanguageModel {
        private $languageData;
        private $supportedLanguages = ['en', 'pt', 'ja'];

        public function __construct($language = 'en') {
            $language = $this->validateLanguage($language);
            $this->loadLanguageFile($language);
        }

        private function validateLanguage($language) {
            return in_array($language, $this->supportedLanguages) ? $language : 'en';
        }

        public function loadLanguageFile($language) {
            $filePath = __DIR__ . "/../../languages/{$language}.json";
            
            if (file_exists($filePath)) {
                $this->languageData = json_decode(file_get_contents($filePath), true);
            } else {
                // Fallback to English if language file is missing
                $this->loadLanguageFile('en');
            }
        }

        public function getData() {
            return $this->languageData;
        }

        public function get($key) {
            return $this->languageData[$key] ?? $key;
        }
    }
}
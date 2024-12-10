<?php

use PHPUnit\Framework\TestCase;

class LanguageModelTest extends TestCase
{
    public function testLanguageModel()
    {
        // Inclui o arquivo do modelo manualmente
        require_once __DIR__ . '/../app/models/LanguageModel.php';

        // Aqui você pode criar instâncias do LanguageModel e fazer asserções
        $model = new LanguageModel('en');
        $this->assertNotEmpty($model->getData());
    }

    public function testLoadLanguageFile()
    {
        require_once __DIR__ . '/../app/models/LanguageModel.php';

        // Testa se o arquivo de linguagem foi carregado corretamente
        $model = new LanguageModel('en');
        $data = $model->getData();
        $this->assertArrayHasKey('aboutNav', $data);
    }

    public function testInvalidLanguageFallback()
    {
        require_once __DIR__ . '/../app/models/LanguageModel.php';

        // Testa se o fallback para o inglês funciona quando a linguagem é inválida
        $model = new LanguageModel('invalidLang');
        $data = $model->getData();
        $this->assertArrayHasKey('aboutNav', $data); // Assuming 'aboutNav' exists in English
    }

    public function testGetMethod()
    {
        require_once __DIR__ . '/../app/models/LanguageModel.php';

        // Testa o método get para pegar o valor de uma chave
        $model = new LanguageModel('en');
        $this->assertEquals('about', $model->get('aboutNav')); // Assuming 'aboutNav' exists in the English file
    }
}

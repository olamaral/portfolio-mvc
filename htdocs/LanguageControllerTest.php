<?php
use PHPUnit\Framework\TestCase;


class LanguageControllerTest extends TestCase
{
    // Testa a inicialização do LanguageController
    public function testLanguageControllerInitialization()
    {
        require_once __DIR__ . '/../app/controllers/LanguageController.php';

        $controller = new LanguageController();

        // Usando ReflectionClass para acessar a propriedade privada 'model'
        $reflection = new ReflectionClass($controller);
        $modelProperty = $reflection->getProperty('model');
        $modelProperty->setAccessible(true);
        $model = $modelProperty->getValue($controller);

        $this->assertInstanceOf(LanguageModel::class, $model);
    }

    // Testa a detecção de idioma a partir da sessão
    public function testDetectLanguageFromSession()
    {
        $_SESSION['language'] = 'ja';  // Simula um idioma na sessão

        require_once __DIR__ . '/../app/controllers/LanguageController.php';
        $controller = new LanguageController();

        // Verifica se o idioma correto foi detectado da sessão
        $this->assertEquals('ja', $_SESSION['language']);
    }

    // Testa o fallback de idioma
    public function testDetectLanguageFallback()
    {
        $_SESSION['language'] = 'fr';  // Idioma não suportado

        require_once __DIR__ . '/../app/controllers/LanguageController.php';
        $controller = new LanguageController();

        // Verifica o fallback para 'en'
        $this->assertEquals('en', $_SESSION['language']);
    }

    // Testa o método de renderização da view (com mock de dependência)
    public function testRenderView()
    {
        $controller = $this->getMockBuilder(LanguageController::class)
            ->onlyMethods(['renderView'])  // Substitua 'setMethods' por 'onlyMethods'
            ->getMock();

        $controller->expects($this->once())
            ->method('renderView')
            ->with('language/index');

        $controller->renderView('language/index');
    }
}

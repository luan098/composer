<?php
require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador; // Autoload da classe Buscador
use GuzzleHttp\Client; // library PHP_HTTP_Client
use Symfony\Component\DomCrawler\Crawler; // Crawler que vai executar a busca.

$client = new Client(['base_uri' => 'https://www.alura.com.br/', 'verify' => false]);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);

$cursos = $buscardor->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}

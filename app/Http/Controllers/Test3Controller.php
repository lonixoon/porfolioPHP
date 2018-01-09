<?php

namespace App\Http\Controllers;

use App\Test2;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Test3Controller extends Controller
{
    public function index()
    {
        $link = 'http://portfoliophp/login';
        $html = file_get_contents($link);
        $crawler = new Crawler(null, $link);
        $crawler->addHtmlContent($html, 'UTF-8');
        $token = $crawler->filter('.authorization__form input')->attr('value');

        dump($token);

        $client = new \GuzzleHttp\Client();
        $cookieJar = new \GuzzleHttp\Cookie\CookieJar();

//        $response = $client->get($link);

        $response = $client->post($link, [
                'form_params' => [
                    '_token' => $token,
                    'email' => '',
                    'password' => '',
//                    'action' => 'login'
                ],
                'cookies' => $cookieJar
            ]
        );
        $response->get($link);
        $xml = $response->getBody()->getContents();
        echo $xml;
//        $response2 = $client->get('http://website.com/otherpage/', ['cookies' => $cookieJar]);

    }
}

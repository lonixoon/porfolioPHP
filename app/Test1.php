<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;


class Test1 extends Model
{
    /**
     * Get content from html.
     *
     * @param $parser object parser settings
     * @param $link string link to html page
     *
     * @return array with parsing data
     * @throws \Exception
     */
//    public function getContent($parser, $link)
    public function getContentNgs($link)
    {
        // Get html remote text.
        $html = file_get_contents($link);

//        $html =
//            '<!DOCTYPE html>
//            <html>
//                <body>
//                    <p class="message">Hello World!</p>
//                    <p>Hello Crawler!</p>
//                </body>
//            </html>';

        // Create new instance for parser.
        $crawler = new Crawler(null, $link);
        $crawler->addHtmlContent($html, 'UTF-8');

//         Get title text.
        $title = $crawler->filter('[class=ngs-article__tit]')->each(function (Crawler $node, $i) {
            return $node->text();
        });
//        $title = $crawler->filter('[class=ngs-informers__info-text-value]')->text();

        // If exist settings for teaser.
//        if (!empty(trim($parser->settings->teaser))) {
//            $teaser = $crawler->filter($parser->settings->teaser)->text();
//        }

        // Get images from page.
//        $images = $crawler->filter($parser->settings->image)->each(function (Crawler $node, $i) {
//            return $node->image()->getUri();
//        });

        // Get body text.
//        $body = $crawler->filter('[class=ngs-article]')->each(function (Crawler $node, $i) {
//            return $node->html();
//        });
//        $body = $crawler->filter('[class=ngs-article]')->text();

        $content = [
//            'link' => $link,
            'title' => $title,
//            'images' => $images,
//            'teaser' => strip_tags($teaser),
//            'body' => $body
        ];

        return $content;
    }
}

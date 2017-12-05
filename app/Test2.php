<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\DomCrawler\Crawler;


class Test2 extends Model
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
    }
}

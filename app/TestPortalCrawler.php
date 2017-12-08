<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\DomCrawler\Crawler;


class TestPortalCrawler extends Model
{
    // https://stackoverflow.com/questions/14731787/how-to-crawl-a-login-protected-page
// запуск функции: crawl_page("http://hobodave.com", 2);
    function crawl_page($url, $depth = 5)
    {
        static $seen = array();
        if (isset($seen[$url]) || $depth === 0) {
            return;
        }

        $seen[$url] = true;

        $dom = new DOMDocument('1.0');
        @$dom->loadHTMLFile($url);

        $anchors = $dom->getElementsByTagName('a');
        foreach ($anchors as $element) {
            $href = $element->getAttribute('href');
            if (0 !== strpos($href, 'http')) {
                $path = '/' . ltrim($href, '/');
                if (extension_loaded('http')) {
                    $href = http_build_url($url, array('path' => $path));
                } else {
                    $parts = parse_url($url);
                    $href = $parts['scheme'] . '://';
                    if (isset($parts['user']) && isset($parts['pass'])) {
                        $href .= $parts['user'] . ':' . $parts['pass'] . '@';
                    }
                    $href .= $parts['host'];
                    if (isset($parts['port'])) {
                        $href .= ':' . $parts['port'];
                    }
                    $href .= $path;
                }
            }
            crawl_page($href, $depth - 1);
        }
        echo "URL:",$url,PHP_EOL,"CONTENT:",PHP_EOL,$dom->saveHTML(),PHP_EOL,PHP_EOL;
    }

    /*require_once('WebClient.php');
    $url = 'http://example.com/administrator/index.php'; // This a Joomla admin

    $wc = new WebClient();
    $page = $wc->Navigate($url);
    if ($page === FALSE) {
         die('Failed to load login page.');
    }

    echo('Logging in...');

    $post = $wc->getInputs();
    $post['username'] = $username;
    $post['passwd'] = $passwd;

    $page = $wc->Navigate($url, $post);
    if ($page === FALSE) {
        die('Failed to post credentials.');
    }

  echo('Initializing installation...');

    $page = $wc->Navigate($url.'?option=com_installer');
    if ($page === FALSE) {
        die('Failed to access installer.');
    }

    echo('Installing...');

    $post = $wc->getInputs();
    $post['install_package'] = '@'.$file; // The @ specifies we are sending a file

    $page = $wc->Navigate($url.'?option=com_installer&view=install', $post);
    if ($page === FALSE) {
        die('Failed to upload file.');
    }

    echo('Done.');*/
}
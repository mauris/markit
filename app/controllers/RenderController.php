<?php

namespace Mauris\Markit;

use Controller;
use Config;
use Markdown;
use App;
use View;

class RenderController extends Controller
{
    public function render($path)
    {
        if (substr($path, -1) == '/') {
            $path .= 'index.md';
        }
        $path = Config::get('markit.repository') . $path;
        if (file_exists($path)) {
            $content = Markdown::render(file_get_contents($path));
            $title = self::getH1Text($content);
            if (!$title) {
                $title = Config::get('markit.default_title');
            }
            return View::make('default')
                ->with('content', $content)
                ->with('title', Config::get('markit.title_prefix') . $title);
        } else {
            App::abort(404);
        }
    }

    private static function getH1Text($string)
    {
        preg_match_all("/<h1>(.*)<\/h1>/is", $string, $matches);
        return ($matches[1][0]);
    }
}

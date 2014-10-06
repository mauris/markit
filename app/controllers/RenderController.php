<?php

namespace Mauris\Markit;

use Controller;
use Config;
use Markdown;
use App;
use View;
use Cache;
use File;

class RenderController extends Controller
{
    public function render($path)
    {
        $repository = Config::get('markit.repository');
        if (substr($repository, -1) != '/') {
            $repository .= '/';
        }
        if (substr($path, -1) == '/') {
            $path .= 'index.md';
        }
        $path = $repository . $path;
        if (file_exists($path)) {
            list($content, $title) = $this->loadContent($path);
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

    private function loadContent($path)
    {
        if (Cache::has($path . '-lastMod') && Cache::has($path . '-content')) {
            $lastMod = File::lastModified($path);
            if (Cache::get($path . '-lastMod') == $lastMod) {
                return Cache::get($path . '-content');
            }
        }

        $lastMod = File::lastModified($path);
        $content = Markdown::render(file_get_contents($path));
        $title = self::getH1Text($content);
        Cache::put($path . '-lastMod', $lastMod, 720);
        Cache::put($path . '-content', array($content, $title), 720);
        return array($content, $title);
    }

    private static function getH1Text($string)
    {
        preg_match_all("/<h1>(.*)<\/h1>/is", $string, $matches);
        return ($matches[1][0]);
    }
}

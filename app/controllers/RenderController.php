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
            return View::make('default')
                ->with('content', Markdown::render(file_get_contents($path)));
        } else {
            App::abort(404);
        }
    }
}

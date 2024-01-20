<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use ValidatesRequests;

    /**
     * Renders a view wrapped into the page layout.
     * @param string $view  The view to render.
     * @param string $title The main title of the page.
     * @param array $data   Variables to pass to the main view, as name => value.
     * @return View
     */
    protected function renderPage(string $view, string $title, array $data = []): View {
        return view('layout.page', [
            'mainView' => $view,
            'mainTitle' => $title,
            'mainData' => $data,
        ]);
    }

    /**
     * Returns a redirect to another page.
     * Calling this instead of the redirect helper directly will simplify the auto-generated return value for controller methods.
     * @param string $route The url to redirect to, as defined in routes/web.php, without the trailing slash.
     * @return RedirectResponse
     */
    protected function redirect(string $route): RedirectResponse {
        return redirect($route);
    }

}

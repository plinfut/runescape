<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TargetController extends Controller {

    public function add(Request $request): View {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'description' => 'required|string',
                'members_only' => 'required|boolean',
                'priority' => 'required|numeric|integer|min:1|max:'.MAX_PRIO,
            ]);
            // Save the target
            createTarget($validated['description'], $validated['members_only'], $validated['priority']);
            // @todo Redirect to view target
        }
        return $this->renderPage('targets.add', 'Add Target');
    }

}

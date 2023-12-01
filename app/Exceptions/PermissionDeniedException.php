<?php

namespace App\Exceptions;

use Exception;

class PermissionDeniedException extends Exception {
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report() {
        //
    }


    /**
     * @param $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function render($request) {
        if ($request->wantsJson()) {
            return response(['success' => false, 'message' => $this->getMessage()], 403);
        }

        $notification = ['message' => $this->getMessage(), 'alert-type' => 'error'];
        return redirect()->back()->with($notification);
    }
}

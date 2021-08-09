<?php


function isAdmin() {
    $user = auth()->user();
    if ( $user ) {
        return $user->is_admin == 1;
    }

    return false;
}

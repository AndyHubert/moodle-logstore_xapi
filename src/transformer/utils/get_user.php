<?php

namespace transformer\utils;

function get_user(array $config, $user) {
    if ($config['sendmbox'] == true) {
        return [
            'name' => $user->fullname,
            'mbox' => $user->email,
        ];
    } else {
        return [
            'name' => $user->fullname,
            'account' => [
                'homePage' => $user->url,
                'name' => strval($user->id),
            ],
        ];
    }
}

<?php

use App\Models\Users;

function createUser($data)
{
    
    $prefix_id   = empty($data['prefix_id']) ? null : $data['prefix_id'];
    $first_name  = empty($data['first_name']) ? null : $data['first_name'];
    $last_name   = empty($data['last_name']) ? null : $data['last_name'];
    $room        = empty($data['room']) ? null : $data['room'];
    $work_status = empty($data['work_status']) ? null : $data['work_status'];
    $username    = empty($data['username']) ? null : $data['username'];
    $password    = empty($data['password']) ? null : $data['password'];
    $email       = empty($data['email']) ? null : $data['email'];
    $line_id     = empty($data['line_id']) ? null : $data['line_id'];
    $root_status = empty($data['root_status']) ? null
        : $data['root_status'];
    
    try {
        $lastUserId = \App\Models\Users::orderBy('user_id', 'desc')
            ->limit(1)
            ->firstOrFail();
        $lastUserId = $lastUserId->user_id + 1;
    } catch (Exception $e) {
        $lastUserId = 1; // First user_id
    }
    
    Users::create(
        [
            'prefix_id'   => is_null($prefix_id) ? 2 : $prefix_id,
            'first_name'  => is_null($first_name) ? 'first_name_'
                . $lastUserId
                : $first_name,
            'last_name'   => is_null($last_name) ? 'last_name_' . $lastUserId
                : $last_name,
            'room'        => is_null($room) ? rand(201, 205) : $room,
            'work_status' => is_null($work_status) ? 1 : $work_status,
            'username'    => is_null($username) ? 'user' . $lastUserId
                : $username,
            'password'    => is_null($password) ? bcrypt('1234') : $password,
            'email'       => is_null($email) ? 'demo_mail_' . $lastUserId
                . '@gmail.com' : $email,
            'line_id'     => is_null($line_id) ? 'demo_line_' . $lastUserId
                : $line_id,
            'root_status' => is_null($root_status) ? 0 : $root_status,
        ]
    );
}

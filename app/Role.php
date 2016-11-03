<?php

namespace App;
use ReflectionClass;

class Role
{
    const SUPERADMIN = 'superadmin';
    const ADMIN = 'admin';
    const STUDENT = 'student';
    const TEACHER = 'teacher';
    const GUARDIAN = 'guardian';

    static public function getConstants() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}

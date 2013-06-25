<?php

class UserTest extends TestCase {
    public function testUserNameIsAlwaysUppercase()
    {
        $user = new User();
        print "User is Eloquent: " . ($user instanceof Eloquent ? "YES" : "NO") . "\n";
        $user->save();
    }
}
<?php


namespace A4anthony\Kuponify;


class Kuponify
{
    public function hello()
    {
        //dd(config('kuponify_types'));
        $text = 'Welcome to Coupon';
        return $text;
    }

    public function getTypes()
    {
        return config('kuponify_types.types');
    }
}
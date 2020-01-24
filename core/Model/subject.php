<?php

namespace core\model;

interface subject
{

    public function attach($obs);
    public function detach();
    public function notify();

}

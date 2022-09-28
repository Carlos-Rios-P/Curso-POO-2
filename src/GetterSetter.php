<?php

namespace Carlos;

trait GetterSetter
{
    public function __set($name, $value)
    {
        $method = 'set' . ucfirst($name);
        if(method_exists($this, $method)){
            $this->$method($value);
        } else {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if(method_exists($this, $method)){
            return $this->$method();
        }

        return $this->$name;
    }
}
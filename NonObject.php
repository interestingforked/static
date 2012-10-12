<?php

namespace h4kuna;

class NonObject {

    final public function __construct() {
        throw new \RuntimeException('This class ' . get_class($this) . ' cannot instance of object.');
    }

}

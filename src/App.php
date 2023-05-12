<?php

namespace App;

class App {
    public function run(): void {
        require base_path("routes/api.php");
    }
}
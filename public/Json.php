<?php

class Json {

    public function doSave(string $filepath, string $jsonData) 
    {
        file_put_contents($filepath, $jsonData);
    }
}
<?php

require 'vendor/autoload.php';

 //Phake::setMockLoader(new Phake\ClassGenerator\FileLoader(__DIR__));


trait SayHello {
    public function hello(string $name): string {
        return $this->greetings() . " " . $name;
    }

    private function greetings(): string
    {
        return "Hello";
    }
}

$mock = Phake::partialMock(SayHello::class);
var_dump(Phake::makeVisible($mock)->greetings());
echo $mock->hello("Pierrick"), PHP_EOL;

<?php
  namespace OsyKunchen\Belajar;

  class Customer
  {
    private string $name;

    public function __construct(string $name)
    {
      $this->name = $name;
    }

    public function sayHello(string $name = "Guest"): string
    {
      return "Hello $name, My Name is $this->name" . PHP_EOL;
    }
  }

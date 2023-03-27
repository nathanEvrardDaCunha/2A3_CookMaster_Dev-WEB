<?php

namespace Classes;

class ClassTest
{
    private int $privateTestVar;
    protected float $protectedTestVar;
    public string $publicTestVar;

    public function __construct(int $privateTest, float $protectedTest, string $publicTest)
    {
        $this->privateTestVar = $privateTest;
        $this->publicTestVar = $publicTest;
        $this->protectedTestVar = $protectedTest;
    }

    public function setProtectedVar(float $newProtectedVar)
    {
        $this->protectedTestVar = $newProtectedVar;
    }

    public function getPublicVar(string $newPublicVar) : string
    {
        return $this->publicTestVar;
    }
}
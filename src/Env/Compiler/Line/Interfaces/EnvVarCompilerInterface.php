<?php

namespace LDL\Env\Compiler\Line\Interfaces;

use Symfony\Component\String\UnicodeString;

interface EnvVarCompilerInterface extends EnvLineCompilerInterface
{
    public function getKey() : UnicodeString;
    public function getValue() : UnicodeString;
}
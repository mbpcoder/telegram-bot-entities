<?php

class  EncryptedPassportElement
{
    public string $type;
    public string|null $data;
    public string|null $phone_number;
    public string|null $email;
    /**
     * @var array<PassportFile>|null
     */
    public array|null $files;
    public PassportFile|null $front_side;
    public PassportFile|null $reverse_side;
    public PassportFile|null $selfie;
    /**
     * @var array<PassportFile>|null
     */
    public array|null $translation;
    public string $hash;
}
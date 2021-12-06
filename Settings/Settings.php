<?php

declare(strict_types=1);

namespace App\Clients\Settings;

use App\Exceptions\SettingsException;

class Settings
{
    private string $user;
    private string $password;

    public function __construct(array $rawSettings)
    {
        $this->validateRawSettings($rawSettings);

        $this->user = $rawSettings['user'];
        $this->password = $rawSettings['passwd'];
    }

    public function getUser(): string
    {
        return (string)$this->user;
    }

    public function getPassword(): string
    {
        return (string)$this->password;
    }

    private function validateRawSettings(array $rawSettings): void
    {
        // TODO! Add more validation (is valid strings).

        if (empty($rawSettings['user']))
            throw new SettingsException('User must be set!');

        if (empty($rawSettings['passwd']))
            throw new SettingsException('Password must be set!');
    }
}
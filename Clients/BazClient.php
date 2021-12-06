<?php

declare(strict_types=1);

namespace App\Clients;

use App\Clients\Contracts\ClientContract;
use App\Clients\Settings\Settings;
use App\Structures\StatusCode;

class BazClient implements ClientContract
{
    private Settings $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function send(array $data): int
    {
        $user = $this->settings->getUser();
        $password = $this->settings->getPassword();

        // TODO! Implement BazClient::send logic here

        return StatusCode::SUCCESS;
    }
}

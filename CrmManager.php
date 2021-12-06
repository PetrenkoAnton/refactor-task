<?php

declare(strict_types=1);

namespace App;

use App\Clients\Contracts\ClientContract;

class CrmManager
{
    private ClientContract $client;

    public function __construct(ClientContract $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the person to a crm
     */
    public function sendPerson(array $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}

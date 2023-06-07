<?php

namespace ayd1ndemirci;

use ayd1ndemirci\task\WebhookTask;
use pocketmine\Server;

class WebhookAPI
{
    public string $webhook;
    public function __construct(string $webhook, array $data)
    {
        try {
            $this->webhook = $webhook;
            Server::getInstance()->getAsyncPool()->submitTask(new WebhookTask($this->webhook, serialize($data)));
        }catch (\Exception $exception) {Server::getInstance()->getLogger()->alert("Error: ".$exception->getMessage());}
    }
}
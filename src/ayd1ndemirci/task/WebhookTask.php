<?php

namespace ayd1ndemirci\task;

use pocketmine\scheduler\AsyncTask;

class WebhookTask extends AsyncTask
{

    public $webhook, $options;

    public function __construct($webhook, $options)
    {
        $this->webhook = $webhook;
        $this->options = $options;
    }

    public function onRun(): void
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->webhook);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(unserialize($this->options)));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $this->setResult(curl_exec($curl));
        curl_close($curl);
    }
}
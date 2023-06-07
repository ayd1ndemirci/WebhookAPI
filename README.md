# WebhookAPI
An easy-to-use API for Discord webhook

Example

Add use
```php
use ayd1ndemirci\WebhookAPI;
```

Usage:

```php

 $webhook = "your_discord_webhook_url";
       $dateTime = new \DateTime("now", new \DateTimeZone("Europe/Istanbul"));
       new WebhookAPI($webhook, [
           "username" => "Test user",
           "embeds" => [
               [
                   "title" => "Test Title",
                   "description" => "This is a test message",
                   "color" => 3066993,
                   "timestamp" => $dateTime->format("Y-m-d\TH:i:s.v\Z"),
                   "image" => [
                       "url" => "https://w0.peakpx.com/wallpaper/77/228/HD-wallpaper-m-kemal-ataturk-1881-ataturk-ataturk-imzasi-cumhuriyet-leader-mustafa-kemal-supreme-commander-tarih-turkey-vatan.jpg"
                   ],
                   "foother" => [
                       "text" => "Foother text",
                       "icon_url" => "https://w0.peakpx.com/wallpaper/77/228/HD-wallpaper-m-kemal-ataturk-1881-ataturk-ataturk-imzasi-cumhuriyet-leader-mustafa-kemal-supreme-commander-tarih-turkey-vatan.jpg"
                   ]
               ]
           ]
       ]);
```

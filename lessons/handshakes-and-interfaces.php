<?php

class CampaignMonitor
{
    public function subscribe($email)
    {
        die('Subscribing with Campaign Monitor');
    }
}

class Drip
{
    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}

class NewsletterSubscriptionController
{
    public function store($newsletter)
    {
        $email = "joe@email.com";

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new Drip);

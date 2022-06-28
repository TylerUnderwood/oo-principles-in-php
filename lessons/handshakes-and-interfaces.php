<?php

interface NewsLetter
{
    public function subscribe($email);
}

class CampaignMonitor implements NewsLetter
{
    public function subscribe($email)
    {
        die('Subscribing with Campaign Monitor');
    }
}

class Drip implements NewsLetter
{
    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}

class NewsletterSubscriptionController
{
    public function store(NewsLetter $newsletter)
    {
        $email = "joe@email.com";

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new CampaignMonitor);

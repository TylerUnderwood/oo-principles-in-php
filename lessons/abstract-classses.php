<?php

class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        // FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name()) . '.png');
    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {

    }
}

$achievement = new FirstThousandPoints();

echo $achievement->name();
echo "\n----------------\n";
echo $achievement->icon();

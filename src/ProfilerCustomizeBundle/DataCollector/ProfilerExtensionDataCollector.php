<?php

namespace ProfilerCustomizeBundle\DataCollector;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class ProfilerExtensionDataCollector extends DataCollector
{
    private static $name = "profileExtender";

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data = [
            'text' => 'Here we are!',
            'data' => [
                'text' => 'Here we are, again!',
                'values' => [
                    1,2,3,4,5,6,7,8,9,42
                ]
            ]
        ];
    }

    public function getText()
    {
        return $this->data['text'];
    }

    public function getData()
    {
        return $this->data['data'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::$name;
    }
}

<?php

namespace AGILEDROP\LaravelTelnyx\Messages;

class TelnyxMessage
{
    /**
     * The message text content.
     *
     * @var string
     */
    public $content;

    /**
     * The message image urls, used in case of MMS.
     *
     * @var string
     */
    public $images;

    /**
     * The phone number the message should be sent from.
     *
     * @var string
     */
    public $from;

    /**
     * The message type.
     *
     * @var string
     */
    public $type = 'text';

    /**
     * The custom Telnyx client instance.
     *
     * @var \Telnyx\Client|null
     */
    public $client;

    /**
     * The client reference.
     *
     * @var string
     */
    public $clientReference = '';

    /**
     * Create a new message instance.
     *
     * @param string $content
     * @param array $images
     */
    public function __construct($content = '', $images = null)
    {
        $this->content = $content;
        $this->images = $images;
    }

    /**
     * Set the message content.
     *
     * @param string $content
     * @param null $images
     *
     * @return $this
     */
    public function content($content, $images = null)
    {
        $this->content = $content;
        $this->images = $images;

        return $this;
    }

    /**
     * Set the phone number the message should be sent from.
     *
     * @param  string  $from
     * @return $this
     */
    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Set the message type.
     *
     * @return $this
     */
    public function unicode()
    {
        $this->type = 'unicode';

        return $this;
    }

    /**
     * Set the client reference (up to 40 characters).
     *
     * @param  string  $clientReference
     * @return $this
     */
    public function clientReference($clientReference)
    {
        $this->clientReference = $clientReference;

        return $this;
    }

    /**
     * Set the Telnyx client instance.
     *
     * @param  \Telnyx\Client  $clientReference
     * @return $this
     */
    public function usingClient($client)
    {
        $this->client = $client;

        return $this;
    }
}

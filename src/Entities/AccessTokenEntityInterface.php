<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Entities;

use League\OAuth2\Server\CryptKeyInterface;

interface AccessTokenEntityInterface extends TokenInterface
{
    /**
     * Set a private key used to encrypt the access token.
     */
    public function setPrivateKey(CryptKeyInterface $privateKey);

    /**
     * Generate a string representation of the access token.
     */
    public function __toString();
}

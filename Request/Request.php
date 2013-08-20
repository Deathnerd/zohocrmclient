<?php
namespace Christiaan\ZohoCRMClient\Request;

/**
 * All public API requests implement this interface
 */
interface Request
{
    /**
     * @param TransportRequest $request
     */
    public function __construct(TransportRequest $request);

    /**
     * @return array
     */
    public function request();
}
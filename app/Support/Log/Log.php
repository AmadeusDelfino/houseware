<?php


namespace App\Support\Log;


use App\Support\Model\ModelBase;

define('LOG_ACTION_CREATE', 'create');
define('LOG_ACTION_UPDATE', 'update');
define('LOG_ACTION_DELETE', 'delete');


trait Log
{
    public function makeLog($userId, $action, ModelBase $resource, $appendBody = [])
    {
        if(!method_exists($resource, 'logs')) {
            throw new LogRelationNotFoundException();
        }

        $resource->logs()->create([
            'user_id' => $userId,
            'body' => json_encode([
                'action' => $action,
                'resource' => $resource,
                'extra' => $appendBody,
            ]),
        ]);
    }
}

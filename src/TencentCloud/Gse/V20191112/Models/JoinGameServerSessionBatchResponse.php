<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JoinGameServerSessionBatch response structure.
 *
 * @method array getPlayerSessions() Obtain Player session list. Up to 25 sessions.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setPlayerSessions(array $PlayerSessions) Set Player session list. Up to 25 sessions.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class JoinGameServerSessionBatchResponse extends AbstractModel
{
    /**
     * @var array Player session list. Up to 25 sessions.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $PlayerSessions;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $PlayerSessions Player session list. Up to 25 sessions.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PlayerSessions",$param) and $param["PlayerSessions"] !== null) {
            $this->PlayerSessions = [];
            foreach ($param["PlayerSessions"] as $key => $value){
                $obj = new PlayerSession();
                $obj->deserialize($value);
                array_push($this->PlayerSessions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

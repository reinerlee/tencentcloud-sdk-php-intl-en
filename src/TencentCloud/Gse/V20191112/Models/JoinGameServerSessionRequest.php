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
 * JoinGameServerSession request structure.
 *
 * @method string getGameServerSessionId() Obtain Game server session ID
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID
 * @method string getPlayerId() Obtain Player ID
 * @method void setPlayerId(string $PlayerId) Set Player ID
 * @method string getPlayerData() Obtain Custom player information
 * @method void setPlayerData(string $PlayerData) Set Custom player information
 */
class JoinGameServerSessionRequest extends AbstractModel
{
    /**
     * @var string Game server session ID
     */
    public $GameServerSessionId;

    /**
     * @var string Player ID
     */
    public $PlayerId;

    /**
     * @var string Custom player information
     */
    public $PlayerData;

    /**
     * @param string $GameServerSessionId Game server session ID
     * @param string $PlayerId Player ID
     * @param string $PlayerData Custom player information
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
        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("PlayerData",$param) and $param["PlayerData"] !== null) {
            $this->PlayerData = $param["PlayerData"];
        }
    }
}
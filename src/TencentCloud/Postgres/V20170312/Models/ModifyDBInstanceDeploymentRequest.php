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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceDeployment request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method array getDBNodeSet() Obtain Instance node information.
 * @method void setDBNodeSet(array $DBNodeSet) Set Instance node information.
 * @method integer getSwitchTag() Obtain Switch time. Valid values: `0` (switch immediately), `1` (switch at a specified time). Default value: `0`.
 * @method void setSwitchTag(integer $SwitchTag) Set Switch time. Valid values: `0` (switch immediately), `1` (switch at a specified time). Default value: `0`.
 * @method string getSwitchStartTime() Obtain The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00".
 * @method void setSwitchStartTime(string $SwitchStartTime) Set The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00".
 * @method string getSwitchEndTime() Obtain The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00".
 * @method void setSwitchEndTime(string $SwitchEndTime) Set The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00".
 */
class ModifyDBInstanceDeploymentRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var array Instance node information.
     */
    public $DBNodeSet;

    /**
     * @var integer Switch time. Valid values: `0` (switch immediately), `1` (switch at a specified time). Default value: `0`.
     */
    public $SwitchTag;

    /**
     * @var string The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00".
     */
    public $SwitchStartTime;

    /**
     * @var string The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00".
     */
    public $SwitchEndTime;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param array $DBNodeSet Instance node information.
     * @param integer $SwitchTag Switch time. Valid values: `0` (switch immediately), `1` (switch at a specified time). Default value: `0`.
     * @param string $SwitchStartTime The earliest time to start a switch in the format of "HH:MM:SS", such as "01:00:00".
     * @param string $SwitchEndTime The latest time to start a switch in the format of "HH:MM:SS", such as "01:30:00".
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot file information
 *
 * @method string getSnapshotPolicyId() Obtain Snapshot policy ID
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) Set Snapshot policy ID
 * @method string getInstanceId() Obtain ID of the instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance.
 * @method string getSnapshotFileId() Obtain Snapshot file ID
 * @method void setSnapshotFileId(string $SnapshotFileId) Set Snapshot file ID
 * @method string getBackupTime() Obtain Backup time
 * @method void setBackupTime(string $BackupTime) Set Backup time
 * @method string getOperator() Obtain Operator UIN
 * @method void setOperator(string $Operator) Set Operator UIN
 */
class SnapshotFileInfo extends AbstractModel
{
    /**
     * @var string Snapshot policy ID
     */
    public $SnapshotPolicyId;

    /**
     * @var string ID of the instance.
     */
    public $InstanceId;

    /**
     * @var string Snapshot file ID
     */
    public $SnapshotFileId;

    /**
     * @var string Backup time
     */
    public $BackupTime;

    /**
     * @var string Operator UIN
     */
    public $Operator;

    /**
     * @param string $SnapshotPolicyId Snapshot policy ID
     * @param string $InstanceId ID of the instance.
     * @param string $SnapshotFileId Snapshot file ID
     * @param string $BackupTime Backup time
     * @param string $Operator Operator UIN
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
        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotFileId",$param) and $param["SnapshotFileId"] !== null) {
            $this->SnapshotFileId = $param["SnapshotFileId"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}

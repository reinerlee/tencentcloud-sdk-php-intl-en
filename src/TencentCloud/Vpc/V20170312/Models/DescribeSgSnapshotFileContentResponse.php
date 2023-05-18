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
 * DescribeSgSnapshotFileContent response structure.
 *
 * @method string getInstanceId() Obtain Security group ID
 * @method void setInstanceId(string $InstanceId) Set Security group ID
 * @method string getSnapshotPolicyId() Obtain Snapshot policy IDs
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) Set Snapshot policy IDs
 * @method string getSnapshotFileId() Obtain Snapshot file ID
 * @method void setSnapshotFileId(string $SnapshotFileId) Set Snapshot file ID
 * @method string getBackupTime() Obtain Backup time
 * @method void setBackupTime(string $BackupTime) Set Backup time
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method array getOriginalData() Obtain Original data
 * @method void setOriginalData(array $OriginalData) Set Original data
 * @method array getBackupData() Obtain Backup data
 * @method void setBackupData(array $BackupData) Set Backup data
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSgSnapshotFileContentResponse extends AbstractModel
{
    /**
     * @var string Security group ID
     */
    public $InstanceId;

    /**
     * @var string Snapshot policy IDs
     */
    public $SnapshotPolicyId;

    /**
     * @var string Snapshot file ID
     */
    public $SnapshotFileId;

    /**
     * @var string Backup time
     */
    public $BackupTime;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var array Original data
     */
    public $OriginalData;

    /**
     * @var array Backup data
     */
    public $BackupData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Security group ID
     * @param string $SnapshotPolicyId Snapshot policy IDs
     * @param string $SnapshotFileId Snapshot file ID
     * @param string $BackupTime Backup time
     * @param string $Operator Operator
     * @param array $OriginalData Original data
     * @param array $BackupData Backup data
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
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

        if (array_key_exists("OriginalData",$param) and $param["OriginalData"] !== null) {
            $this->OriginalData = [];
            foreach ($param["OriginalData"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->OriginalData, $obj);
            }
        }

        if (array_key_exists("BackupData",$param) and $param["BackupData"] !== null) {
            $this->BackupData = [];
            foreach ($param["BackupData"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->BackupData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

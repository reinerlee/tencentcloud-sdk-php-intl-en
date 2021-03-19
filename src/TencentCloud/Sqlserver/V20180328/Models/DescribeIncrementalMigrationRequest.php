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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIncrementalMigration request structure.
 *
 * @method string getBackupMigrationId() Obtain Backup import task ID, which is returned through the API CreateBackupMigration
 * @method void setBackupMigrationId(string $BackupMigrationId) Set Backup import task ID, which is returned through the API CreateBackupMigration
 * @method string getInstanceId() Obtain ID of imported target instance
 * @method void setInstanceId(string $InstanceId) Set ID of imported target instance
 * @method string getBackupFileName() Obtain Backup file name
 * @method void setBackupFileName(string $BackupFileName) Set Backup file name
 * @method array getStatusSet() Obtain Status set of import tasks
 * @method void setStatusSet(array $StatusSet) Set Status set of import tasks
 * @method integer getLimit() Obtain Paging. Page size
 * @method void setLimit(integer $Limit) Set Paging. Page size
 * @method integer getOffset() Obtain Paging. Number of pages
 * @method void setOffset(integer $Offset) Set Paging. Number of pages
 * @method string getOrderBy() Obtain Field for order: name,createTime,startTime,endTime
 * @method void setOrderBy(string $OrderBy) Set Field for order: name,createTime,startTime,endTime
 * @method string getOrderByType() Obtain Type of order: desc,asc
 * @method void setOrderByType(string $OrderByType) Set Type of order: desc,asc
 * @method string getIncrementalMigrationId() Obtain ID of an incremental backup import task
 * @method void setIncrementalMigrationId(string $IncrementalMigrationId) Set ID of an incremental backup import task
 */
class DescribeIncrementalMigrationRequest extends AbstractModel
{
    /**
     * @var string Backup import task ID, which is returned through the API CreateBackupMigration
     */
    public $BackupMigrationId;

    /**
     * @var string ID of imported target instance
     */
    public $InstanceId;

    /**
     * @var string Backup file name
     */
    public $BackupFileName;

    /**
     * @var array Status set of import tasks
     */
    public $StatusSet;

    /**
     * @var integer Paging. Page size
     */
    public $Limit;

    /**
     * @var integer Paging. Number of pages
     */
    public $Offset;

    /**
     * @var string Field for order: name,createTime,startTime,endTime
     */
    public $OrderBy;

    /**
     * @var string Type of order: desc,asc
     */
    public $OrderByType;

    /**
     * @var string ID of an incremental backup import task
     */
    public $IncrementalMigrationId;

    /**
     * @param string $BackupMigrationId Backup import task ID, which is returned through the API CreateBackupMigration
     * @param string $InstanceId ID of imported target instance
     * @param string $BackupFileName Backup file name
     * @param array $StatusSet Status set of import tasks
     * @param integer $Limit Paging. Page size
     * @param integer $Offset Paging. Number of pages
     * @param string $OrderBy Field for order: name,createTime,startTime,endTime
     * @param string $OrderByType Type of order: desc,asc
     * @param string $IncrementalMigrationId ID of an incremental backup import task
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
        if (array_key_exists("BackupMigrationId",$param) and $param["BackupMigrationId"] !== null) {
            $this->BackupMigrationId = $param["BackupMigrationId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupFileName",$param) and $param["BackupFileName"] !== null) {
            $this->BackupFileName = $param["BackupFileName"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("IncrementalMigrationId",$param) and $param["IncrementalMigrationId"] !== null) {
            $this->IncrementalMigrationId = $param["IncrementalMigrationId"];
        }
    }
}

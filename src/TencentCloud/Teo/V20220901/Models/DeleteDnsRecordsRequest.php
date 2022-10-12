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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDnsRecords request structure.
 *
 * @method string getZoneId() Obtain The site ID of the DNS record to be deleted.
 * @method void setZoneId(string $ZoneId) Set The site ID of the DNS record to be deleted.
 * @method array getDnsRecordIds() Obtain The ID of the DNS record to be deleted.
 * @method void setDnsRecordIds(array $DnsRecordIds) Set The ID of the DNS record to be deleted.
 */
class DeleteDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string The site ID of the DNS record to be deleted.
     */
    public $ZoneId;

    /**
     * @var array The ID of the DNS record to be deleted.
     */
    public $DnsRecordIds;

    /**
     * @param string $ZoneId The site ID of the DNS record to be deleted.
     * @param array $DnsRecordIds The ID of the DNS record to be deleted.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DnsRecordIds",$param) and $param["DnsRecordIds"] !== null) {
            $this->DnsRecordIds = $param["DnsRecordIds"];
        }
    }
}
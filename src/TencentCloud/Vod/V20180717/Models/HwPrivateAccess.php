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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access authentication for Huawei Cloud OBS origin
 *
 * @method string getSwitch() Obtain Huawei Cloud OBS origin authentication configuration switch, the values are: <li>on:Enable;</li> <li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Huawei Cloud OBS origin authentication configuration switch, the values are: <li>on:Enable;</li> <li>off: Disable.</li>
 * @method string getAccessKey() Obtain Access ID
 * @method void setAccessKey(string $AccessKey) Set Access ID
 * @method string getSecretKey() Obtain Key
 * @method void setSecretKey(string $SecretKey) Set Key
 * @method string getBucket() Obtain BucketName
 * @method void setBucket(string $Bucket) Set BucketName
 */
class HwPrivateAccess extends AbstractModel
{
    /**
     * @var string Huawei Cloud OBS origin authentication configuration switch, the values are: <li>on:Enable;</li> <li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Access ID
     */
    public $AccessKey;

    /**
     * @var string Key
     */
    public $SecretKey;

    /**
     * @var string BucketName
     */
    public $Bucket;

    /**
     * @param string $Switch Huawei Cloud OBS origin authentication configuration switch, the values are: <li>on:Enable;</li> <li>off: Disable.</li>
     * @param string $AccessKey Access ID
     * @param string $SecretKey Key
     * @param string $Bucket BucketName
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }
    }
}
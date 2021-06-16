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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceInfo request structure.
 *
 * @method string getServiceId() Obtain Service ID.
 * @method void setServiceId(string $ServiceId) Set Service ID.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method integer getSourceChannel() Obtain Source channel.
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel.
 */
class ModifyServiceInfoRequest extends AbstractModel
{
    /**
     * @var string Service ID.
     */
    public $ServiceId;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var integer Source channel.
     */
    public $SourceChannel;

    /**
     * @param string $ServiceId Service ID.
     * @param string $Description Description.
     * @param integer $SourceChannel Source channel.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}

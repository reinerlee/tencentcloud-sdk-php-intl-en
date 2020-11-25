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
 * ModifySubAppIdStatus request structure.
 *
 * @method integer getSubAppId() Obtain Subapplication ID.
 * @method void setSubAppId(integer $SubAppId) Set Subapplication ID.
 * @method string getStatus() Obtain Subapplication status. Valid strings include:
<li>On: to enable the subapplication.</li>
<li>Off: to disable the subapplication.</li>
<li>Destroyed: to terminate the subapplication. </li>
You cannot enable a subapplication when its status is “Destroying”. You can enable it after it was terminated.
 * @method void setStatus(string $Status) Set Subapplication status. Valid strings include:
<li>On: to enable the subapplication.</li>
<li>Off: to disable the subapplication.</li>
<li>Destroyed: to terminate the subapplication. </li>
You cannot enable a subapplication when its status is “Destroying”. You can enable it after it was terminated.
 */
class ModifySubAppIdStatusRequest extends AbstractModel
{
    /**
     * @var integer Subapplication ID.
     */
    public $SubAppId;

    /**
     * @var string Subapplication status. Valid strings include:
<li>On: to enable the subapplication.</li>
<li>Off: to disable the subapplication.</li>
<li>Destroyed: to terminate the subapplication. </li>
You cannot enable a subapplication when its status is “Destroying”. You can enable it after it was terminated.
     */
    public $Status;

    /**
     * @param integer $SubAppId Subapplication ID.
     * @param string $Status Subapplication status. Valid strings include:
<li>On: to enable the subapplication.</li>
<li>Off: to disable the subapplication.</li>
<li>Destroyed: to terminate the subapplication. </li>
You cannot enable a subapplication when its status is “Destroying”. You can enable it after it was terminated.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

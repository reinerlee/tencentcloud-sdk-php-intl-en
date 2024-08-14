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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateStreamIngest request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppId of TRTC should be the same as the SDKAppId corresponding to the task room.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppId of TRTC should be the same as the SDKAppId corresponding to the task room.
 * @method string getTaskId() Obtain The unique Id of the task, will return after successfully starting the task.
 * @method void setTaskId(string $TaskId) Set The unique Id of the task, will return after successfully starting the task.
 * @method string getStreamUrl() Obtain The new url of the media resource.
 * @method void setStreamUrl(string $StreamUrl) Set The new url of the media resource.
 */
class UpdateStreamIngestRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppId of TRTC should be the same as the SDKAppId corresponding to the task room.
     */
    public $SdkAppId;

    /**
     * @var string The unique Id of the task, will return after successfully starting the task.
     */
    public $TaskId;

    /**
     * @var string The new url of the media resource.
     */
    public $StreamUrl;

    /**
     * @param integer $SdkAppId The SDKAppId of TRTC should be the same as the SDKAppId corresponding to the task room.
     * @param string $TaskId The unique Id of the task, will return after successfully starting the task.
     * @param string $StreamUrl The new url of the media resource.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StreamUrl",$param) and $param["StreamUrl"] !== null) {
            $this->StreamUrl = $param["StreamUrl"];
        }
    }
}

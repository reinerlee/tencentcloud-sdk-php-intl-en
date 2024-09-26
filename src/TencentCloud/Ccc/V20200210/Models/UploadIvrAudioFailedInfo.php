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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Failed to upload audio file information
 *
 * @method string getFileName() Obtain Filename
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileName(string $FileName) Set Filename
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFailedMsg() Obtain Reason for failure
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailedMsg(string $FailedMsg) Set Reason for failure
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UploadIvrAudioFailedInfo extends AbstractModel
{
    /**
     * @var string Filename
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileName;

    /**
     * @var string Reason for failure
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailedMsg;

    /**
     * @param string $FileName Filename
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FailedMsg Reason for failure
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FailedMsg",$param) and $param["FailedMsg"] !== null) {
            $this->FailedMsg = $param["FailedMsg"];
        }
    }
}
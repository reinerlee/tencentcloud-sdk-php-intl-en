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
 * Audio/Video interaction duration statistics
If the period queried is 1 day or shorter, the statistics returned are on a 5-minute basis. If the period queried is longer than 1 day, the statistics returned are on a daily basis.
 *
 * @method string getTimeKey() Obtain Time point for the statistics. e.g., `2020-09-07` or `2020-09-07 00:05:05`
 * @method void setTimeKey(string $TimeKey) Set Time point for the statistics. e.g., `2020-09-07` or `2020-09-07 00:05:05`
 * @method integer getAudioTime() Obtain Audio duration (s)
 * @method void setAudioTime(integer $AudioTime) Set Audio duration (s)
 * @method integer getAudioVideoTime() Obtain Audio/Video duration (s)
This parameter is returned only for users who signed up before October 11, 2019 and have not switched to the [new billing standards](https://intl.cloud.tencent.com/document/product/647/17157?from_cn_redirect=1).
 * @method void setAudioVideoTime(integer $AudioVideoTime) Set Audio/Video duration (s)
This parameter is returned only for users who signed up before October 11, 2019 and have not switched to the [new billing standards](https://intl.cloud.tencent.com/document/product/647/17157?from_cn_redirect=1).
 * @method integer getVideoTimeSd() Obtain SD video duration (s)
 * @method void setVideoTimeSd(integer $VideoTimeSd) Set SD video duration (s)
 * @method integer getVideoTimeHd() Obtain HD video duration (s)
 * @method void setVideoTimeHd(integer $VideoTimeHd) Set HD video duration (s)
 * @method integer getVideoTimeHdp() Obtain FHD video duration (s)
 * @method void setVideoTimeHdp(integer $VideoTimeHdp) Set FHD video duration (s)
 */
class SdkAppIdTrtcUsage extends AbstractModel
{
    /**
     * @var string Time point for the statistics. e.g., `2020-09-07` or `2020-09-07 00:05:05`
     */
    public $TimeKey;

    /**
     * @var integer Audio duration (s)
     */
    public $AudioTime;

    /**
     * @var integer Audio/Video duration (s)
This parameter is returned only for users who signed up before October 11, 2019 and have not switched to the [new billing standards](https://intl.cloud.tencent.com/document/product/647/17157?from_cn_redirect=1).
     */
    public $AudioVideoTime;

    /**
     * @var integer SD video duration (s)
     */
    public $VideoTimeSd;

    /**
     * @var integer HD video duration (s)
     */
    public $VideoTimeHd;

    /**
     * @var integer FHD video duration (s)
     */
    public $VideoTimeHdp;

    /**
     * @param string $TimeKey Time point for the statistics. e.g., `2020-09-07` or `2020-09-07 00:05:05`
     * @param integer $AudioTime Audio duration (s)
     * @param integer $AudioVideoTime Audio/Video duration (s)
This parameter is returned only for users who signed up before October 11, 2019 and have not switched to the [new billing standards](https://intl.cloud.tencent.com/document/product/647/17157?from_cn_redirect=1).
     * @param integer $VideoTimeSd SD video duration (s)
     * @param integer $VideoTimeHd HD video duration (s)
     * @param integer $VideoTimeHdp FHD video duration (s)
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("AudioTime",$param) and $param["AudioTime"] !== null) {
            $this->AudioTime = $param["AudioTime"];
        }

        if (array_key_exists("AudioVideoTime",$param) and $param["AudioVideoTime"] !== null) {
            $this->AudioVideoTime = $param["AudioVideoTime"];
        }

        if (array_key_exists("VideoTimeSd",$param) and $param["VideoTimeSd"] !== null) {
            $this->VideoTimeSd = $param["VideoTimeSd"];
        }

        if (array_key_exists("VideoTimeHd",$param) and $param["VideoTimeHd"] !== null) {
            $this->VideoTimeHd = $param["VideoTimeHd"];
        }

        if (array_key_exists("VideoTimeHdp",$param) and $param["VideoTimeHdp"] !== null) {
            $this->VideoTimeHdp = $param["VideoTimeHdp"];
        }
    }
}
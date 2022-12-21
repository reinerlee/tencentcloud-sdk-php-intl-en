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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of synced database objects
 *
 * @method string getMode() Obtain Migration object type, such as `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMode(string $Mode) Set Migration object type, such as `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDatabases() Obtain Sync object, which is required if `Mode` is `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabases(array $Databases) Set Sync object, which is required if `Mode` is `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAdvancedObjects() Obtain Advanced object type, such as function and procedure. If you need to sync advanced objects, the initialization type must include structure initialization; that is, `Options.InitType` must be `Structure` or `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdvancedObjects(array $AdvancedObjects) Set Advanced object type, such as function and procedure. If you need to sync advanced objects, the initialization type must include structure initialization; that is, `Options.InitType` must be `Structure` or `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Objects extends AbstractModel
{
    /**
     * @var string Migration object type, such as `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mode;

    /**
     * @var array Sync object, which is required if `Mode` is `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Databases;

    /**
     * @var array Advanced object type, such as function and procedure. If you need to sync advanced objects, the initialization type must include structure initialization; that is, `Options.InitType` must be `Structure` or `Full`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdvancedObjects;

    /**
     * @param string $Mode Migration object type, such as `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Databases Sync object, which is required if `Mode` is `Partial`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AdvancedObjects Advanced object type, such as function and procedure. If you need to sync advanced objects, the initialization type must include structure initialization; that is, `Options.InitType` must be `Structure` or `Full`.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new Database();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("AdvancedObjects",$param) and $param["AdvancedObjects"] !== null) {
            $this->AdvancedObjects = $param["AdvancedObjects"];
        }
    }
}
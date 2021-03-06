<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Green\Request\V20161206;

class TextKeywordFilterRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Green", "2016-12-06", "TextKeywordFilter");
		$this->setMethod("POST");
	}

	private  $text;

	private  $useSysDic;

	private  $customDict;

	public function getText() {
		return $this->text;
	}

	public function setText($text) {
		$this->text = $text;
		$this->queryParameters["Text"]=$text;
	}

	public function getUseSysDic() {
		return $this->useSysDic;
	}

	public function setUseSysDic($useSysDic) {
		$this->useSysDic = $useSysDic;
		$this->queryParameters["UseSysDic"]=$useSysDic;
	}

	public function getCustomDict() {
		return $this->customDict;
	}

	public function setCustomDict($customDict) {
		$this->customDict = $customDict;
		$this->queryParameters["CustomDict"]=$customDict;
	}
	
}
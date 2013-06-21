<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2013 Cory Becker
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Becker\Payments\PayPal;

class PayPal
{
	const API_VERSION = '61.0';
	const ENDPOINT = 'https://api-3t.paypal.com/nvp';
	
	/**
	 * @var PayPal API username
	 */
	private $username;
	
	/**
	 * @var PayPal API password
	 */
	private $password;
	
	/**
	 * @var PayPal API signature
	 */
	private $signature;
	
	/**
	 * Constructor
	 *
	 * @param $username		PayPal API username
	 * @param $password		PayPal API password
	 * @param $signature	PayPal API signature
	 */
	public function __construct($username, $password, $signature)
	{
		$this->username = $username;
		$this->password = $password;
		$this->signature = $signature;
	}
	
	/**
	 * HTTP POST to PayPal
	 *
	 * @param 	string 	$method 	Method name
	 * @param 	array 	$attributes	Attributes
	 */
	public function post($method, $attributes = array())
	{
				
	}
}
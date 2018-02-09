<?php
/*
 * photos_add.php
 * 
 * Copyright 2018 Manoj Dhiman <upworkmkd@gmail.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
require_once 'config.php';

$img = realpath("C:\\path\\to\\file.jpg");

// allow uploads
$facebook->setFileUploadSupport("http://" . $_SERVER['SERVER_NAME']);

// add a status message
$photo = $facebook->api('/me/photos', 'POST', 
	array(
		'source' => '@' . $img,
		'message' => 'This photo came from my app.'
	)
);

var_dump($photo);

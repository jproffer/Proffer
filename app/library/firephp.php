<?php

/* ***** BEGIN LICENSE BLOCK *****
 *  
 * This file is part of FirePHP (http://www.firephp.org/).
 * 
 * Software License Agreement (New BSD License)
 * 
 * Copyright (c) 2006-2009, Christoph Dorn
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 * 
 *	 * Redistributions of source code must retain the above copyright notice,
 *	   this list of conditions and the following disclaimer.
 * 
 *	 * Redistributions in binary form must reproduce the above copyright notice,
 *	   this list of conditions and the following disclaimer in the documentation
 *	   and/or other materials provided with the distribution.
 * 
 *	 * Neither the name of Christoph Dorn nor the names of its
 *	   contributors may be used to endorse or promote products derived from this
 *	   software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 * ***** END LICENSE BLOCK *****
 * 
 * @copyright   Copyright (C) 2007-2009 Christoph Dorn
 * @author	  Christoph Dorn <christoph@christophdorn.com>
 * @license	 http://www.opensource.org/licenses/bsd-license.php
 * @package	 FirePHP
 */
namespace library;

use library\libFirePHP;

/**
 * Sends the given data to the FirePHP Firefox Extension.
 * The data can be displayed in the Firebug Console or in the
 * "Server" request tab.
 * 
 * @see http://www.firephp.org/Wiki/Reference/Fb
 * @param mixed $Object
 * @return true
 * @throws Exception
 */
function fb()
{
    $instance = libFirePHP::getInstance(true);
  
    $args = func_get_args();
    return call_user_func_array(array($instance, 'fb'), $args);
}


trait FB
{
    /**
     * Set an Insight console to direct all logging calls to
     * 
     * @param object $console The console object to log to
     * @return void
     */
    public static function setLogToInsightConsole($console)
    {
        libFirePHP::getInstance(true)->setLogToInsightConsole($console);
    }

    /**
     * Enable and disable logging to Firebug
     * 
     * @see FirePHP->setEnabled()
     * @param boolean $enabled TRUE to enable, FALSE to disable
     * @return void
     */
    public static function setEnabled($enabled)
    {
        libFirePHP::getInstance(true)->setEnabled($enabled);
    }
  
    /**
     * Check if logging is enabled
     * 
     * @see FirePHP->getEnabled()
     * @return boolean TRUE if enabled
     */
    public static function getEnabled()
    {
        return libFirePHP::getInstance(true)->getEnabled();
    }
  
    /**
     * Specify a filter to be used when encoding an object
     * 
     * Filters are used to exclude object members.
     * 
     * @see FirePHP->setObjectFilter()
     * @param string $class The class name of the object
     * @param array $filter An array or members to exclude
     * @return void
     */
    public static function setObjectFilter($class, $filter)
    {
      libFirePHP::getInstance(true)->setObjectFilter($class, $filter);
    }
  
    /**
     * Set some options for the library
     * 
     * @see FirePHP->setOptions()
     * @param array $options The options to be set
     * @return void
     */
    public static function setOptions($options)
    {
        libFirePHP::getInstance(true)->setOptions($options);
    }

    /**
     * Get options for the library
     * 
     * @see FirePHP->getOptions()
     * @return array The options
     */
    public static function getOptions()
    {
        return libFirePHP::getInstance(true)->getOptions();
    }

    /**
     * Log object to firebug
     * 
     * @see http://www.firephp.org/Wiki/Reference/Fb
     * @param mixed $object
     * @return true
     * @throws Exception
     */
    public static function send()
    {
        $args = func_get_args();
        return call_user_func_array(array(libFirePHP::getInstance(true), 'fb'), $args);
    }

    /**
     * Start a group for following messages
     * 
     * Options:
     *   Collapsed: [true|false]
     *   Color:     [#RRGGBB|ColorName]
     *
     * @param string $name
     * @param array $options OPTIONAL Instructions on how to log the group
     * @return true
     */
    public static function group($name, $options=null)
    {
        return libFirePHP::getInstance(true)->group($name, $options);
    }

    /**
     * Ends a group you have started before
     *
     * @return true
     * @throws Exception
     */
    public static function groupEnd()
    {
        return self::send(null, null, libFirePHP::GROUP_END);
    }

    /**
     * Log object with label to firebug console
     *
     * @see libFirePHP::LOG
     * @param mixes $object
     * @param string $label
     * @return true
     * @throws Exception
     */
    public static function log($object, $label=null)
    {
        return self::send($object, $label, libFirePHP::LOG);
    }

    /**
     * Log object with label to firebug console
     *
     * @see libFirePHP::INFO
     * @param mixes $object
     * @param string $label
     * @return true
     * @throws Exception
     */
    public static function info($object, $label=null)
    {
        return self::send($object, $label, libFirePHP::INFO);
    }

    /**
     * Log object with label to firebug console
     *
     * @see libFirePHP::WARN
     * @param mixes $object
     * @param string $label
     * @return true
     * @throws Exception
     */
    public static function warn($object, $label=null)
    {
        return self::send($object, $label, libFirePHP::WARN);
    }

    /**
     * Log object with label to firebug console
     *
     * @see libFirePHP::ERROR
     * @param mixes $object
     * @param string $label
     * @return true
     * @throws Exception
     */
    public static function error($object, $label=null)
    {
        return self::send($object, $label, libFirePHP::ERROR);
    }

    /**
     * Dumps key and variable to firebug server panel
     *
     * @see libFirePHP::DUMP
     * @param string $key
     * @param mixed $variable
     * @return true
     * @throws Exception
     */
    public static function dump($key, $variable)
    {
        return self::send($variable, $key, libFirePHP::DUMP);
    }

    /**
     * Log a trace in the firebug console
     *
     * @see libFirePHP::TRACE
     * @param string $label
     * @return true
     * @throws Exception
     */
    public static function trace($label)
    {
        return self::send($label, libFirePHP::TRACE);
    }

    /**
     * Log a table in the firebug console
     *
     * @see libFirePHP::TABLE
     * @param string $label
     * @param string $table
     * @return true
     * @throws Exception
     */
    public static function table($label, $table)
    {
        return self::send($table, $label, libFirePHP::TABLE);
    }

}

?>
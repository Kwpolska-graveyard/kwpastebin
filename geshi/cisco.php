<?php
/*************************************************************************************
 * cisco.php
 * ---------------------------------
 * Author: Michael Englehorn (michael@englehorn.com)
 * Copyright: (c) 2014 Michael Englehorn (michael@englehorn.com)
 * Release Version: 1.0.0.0
 * Date Started: 2014/05/29
 *
 * Cisco IOS language file for GeSHi.
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 * 
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Cisco',
    'COMMENT_SINGLE' => array(1 => '!'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //1 => '/(?<!\\\\)!(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //2 => '/{[^}\n]+}/'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /*
         * Set 1: reserved words
         * http://python.org/doc/current/ref/keywords.html
         */
        1 => array(
            'no', 'boot-start-marker', 'boot-end-marker'),

        /*
         * Set 2: builtins
         * http://asps.activatestate.com/ASPN/docs/ActiveTcl/8.4/tcl/tcl_2_contents.htm
         */
        2 => array(
            'version', 'service', 'hostname', 'card', 'security', 'logging',
	    'enable', 'aaa', 'clock', 'network-clock-participate', 'ip',
	    'multilink', 'voice-card', 'voice', 'username', 'archive', 'controller',
	    'policy-map', 'class-map', 'interface', 'access-list', 'snmp-server',
	    'tacacs-server', 'control-plane', 'voice-port', 'dial-peer', 'sip-ua',
	    'banner exec', 'banner login', 'line con', 'line vty', 'line aux', 'ntp',
	    'crypto', 'trunk', 'virtual-profile', 'route-map', 'radius-server', 'gateway', 'end',
	    'router eigrp', 'router rip', 'router bgp', 'router ospf', 'router is-is'
	),

        /*
         * Set 3: standard library
         */
        3 => array(
		'nagle', 'pad', 'tcp-keepalives-in', 'tcp-keepalives-out', 'timestamps', 'password-encryption',
		'sequence-numbers', 'password-recovery', 'type t1', 'type t3', 'type e1', 'type e3', 'authentication',
		'passwords', 'buffered', 'rate-limit console', 'secret', 'new-model', 'authentication banner',
		'authorization config-commands', 'authorization commands', 'accounting exec', 'accounting commands',
		'accounting connection', 'accounting system', 'session-id', 'timezone', 'summer-time', 'source-route',
		'gratuitous-arps', 'cef', 'domain lookup', 'domain name', 'name-server', 'bootp server', 'bundle-name',
		'voip', 'fax protocol', 'modem passthrough', ' sip', 'bind control', 'bind media', 'rel1xx', 'outbound-proxy',
		'class codec', 'codec preference', 'log config', 'hidekeys', 'framing', 'linecode', 'channel-group', 'telnet',
		'tftp', 'ssh', 'match-all', 'match ip', 'match any', 'class', 'priority percent', 'bandwidth percent', 'fair-queue',
		'random-detect', 'description set', 'dscp', 'description', 'address', 'redirects', 'unreachables', 'proxy-arp',
		'mroute-cache', 'load-interval', 'duplex', 'speed', 'cdp', 'encapsulation', 'access-group', 'verify', 'shutdown',
		'keepalive', 'service-policy', 'http server', 'http secure-server', 'forward-protocol', 'route', 'tacacs',
		'extended', 'standard', 'remark', 'deny', 'permit', 'trap', 'community', 'ifindex', 'trap-source', 'packetsize',
		'traps', 'host', 'timeout', 'directed-request', 'key', 'supervisory disconnect', 'disconnect-ack', 'comfort-noise',
		'timeouts interdigit', 'cor', 'huntstop', 'preference', 'progress_ind setup', 'session protocol', 'session target',
		'incoming called-number', 'dtmf-relay', 'codec', 'fax rate', 'vad', 'hunt', 'terminator', 'hookflash-info',
		'remote-party-id', 'set', 'retry', 'timers', 'mwi-server', 'expires', 'port', 'transport', 'udp', 'unsolicited',
		'registrar', 'sip-server', 'password', 'transport input', 'clock-period', 'source', 'master', 'server', 'prefer',
		'nat', 'tcp', 'inside', 'static', 'authorization', 'group', 'radius', 'boot system', 'pki trustpoint',
		'enrollment terminal', 'serial-number', 'revocation-check', 'ipv6', 'icmp', 'evaluate', 'match', 'privilege level',
		'login', 'modem InOut', 'flowcontrol', 'peer', 'timer receive-rtp', 'physical-layer', 'dialer', 'async mode',
		'ppp reliable-link', 'ppp encrypt', 'group-range', 'redistribute', 'passive-interface', 'network', 'default-metric',
		'auto-summary', 'bgp log-neighbor-changes', 'remote-as', 'address-family', 'synchronization', 'neighbor',
		'default-information', 'glbp', 'tunnel', 'encr', 'lifetime', 'hunt-scheme', 'dhcp use', 'dhcp pool', 'vrf',
		'multicast-routing', 'ddns update', 'interval maximum', 'interval minimum', 'unicast-routing'
            ),

        /*
         * Set 4: special methods
         */
//        4 => array(
//            )

        ),
    'SYMBOLS' => array(
        	'^'
	),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
//        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #ff7700;font-weight:bold;',    // Reserved
            2 => 'color: #008000;',                        // Built-ins + self
            3 => 'color: #dc143c;',                        // Standard lib
//            4 => 'color: #0000cd;'                        // Special methods
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
//            2 => 'color: #483d8b;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: black;'
            ),
        'STRINGS' => array(
            0 => 'color: #483d8b;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff4500;'
            ),
        'METHODS' => array(
            1 => 'color: black;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #ff3333;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
//        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '::'
        ),
    'REGEXPS' => array(
        //Special variables
        //0 => '[\\$]+[a-zA-Z_][a-zA-Z0-9_]*',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '\\'
        )
    )
);

?>

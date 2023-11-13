 <?php
/**
 * Copyright (C) 2021  Charles Morisset, Newcastle Upon Tyne, UK
 * All rights reserved.
 * 
 * 
 * 
 * Redistribution and use of this script, with or without modification, is
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of this script must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 *
 *  THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
 *  WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 *  MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO
 *  EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 *  SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 *  PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 *  OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *  WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 *  OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
 *  ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

date_default_timezone_set("Europe/London");

if (!headers_sent()) {
	header('Content-Type: text/html; charset=utf-8');
}

echo "<!-- This code is available open source at https://gitlab.com/morisset/opensourcechallenge -->";

echo "Welcome to this page <br>";

// The parameter XYZ will be substituted by a randomly generated ID.
if (isset($_GET['info'])) {
   if ($_GET['info']) {
      echo "The GET parameter to set to your token is XYZ<br>";
   } 
} 

// See above for XYZ
// Token will be replaced by the actual Token from the CTF participant
if (isset($_GET['XYZ'])) {
   if (strcmp($_GET['XYZ'], 'TOKEN') == 0) { 
      // Here, XXX123456XXX will be replaced by the actual flag
      echo "Well done, the flag is flag{XXX123456XXX}";
    } else {
      echo "Wrong parameters";
    }
}


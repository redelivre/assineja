<?php
/*
 Plugin Name: Assine Já
 Plugin URI: http://redelivre.org.br
 Description: O Plugin Assine já fornece ferramentas para coletas de assinaturas
 Version: 0.0.1
 Author: Jacson
 Author URI: https://github.com/jacsonp
 
 THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
 LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 
 */

class AssineJa {
	
	public function __construct() {
		add_action('init', [$this, 'init']);
		add_action('wp_ajax_aja_check_user_logged_in', [$this, 'check_user_logged_in']);
		add_action('wp_ajax_nopriv_aja_check_user_logged_in', [$this, 'check_user_logged_in']);
	}
	
	public function init() {
		
	}
	
	public function check_user_logged_in() {
		echo is_user_logged_in() ? '1':'0';
		die();
	}
}

global $AssineJa;
$AssineJa = new AssineJa();

require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'wp-divi'. DIRECTORY_SEPARATOR .'modules.php';
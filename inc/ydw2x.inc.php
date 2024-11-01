<?php
class ydw2xPlugin extends YD_Plugin {
	
	/** constructor **/
	function ydw2xPlugin ( $opts ) {

		parent::YD_Plugin( $opts );
		
		$this->form_blocks		= $opts['form_blocks']; // No backlinkware
		
		register_activation_hook( $this->plugin_file, array( &$this, 'rewrite_activate' ) );
		register_deactivation_hook( $this->plugin_file, array( &$this, 'rewrite_deactivate' ) );
		add_action( 'init', array( &$this, 'add_rewriterule' ) );
	}

	function add_rewriterule() {
	    add_rewrite_rule( 
	    	'webhook/?$', 
	    	str_replace( 
	    		home_url(), 
	    		"", 
	    		WP_PLUGIN_URL . '/' 
	    			. dirname( plugin_basename( $this->plugin_file ) ) 
	    			. '/webhook.php' 
	    	), 
	    	'top'
	    );
	}
	
	function rewrite_activate() {
		$this->add_rewriterule();
		flush_rewrite_rules();
	}
	
	function rewrite_deactivate() {

		flush_rewrite_rules();
		//wp_die( str_replace( home_url(), "", WP_PLUGIN_URL . '/' . dirname( plugin_basename( $this->plugin_file ) ) . '/webhook.php' ) );
	}
}
?>
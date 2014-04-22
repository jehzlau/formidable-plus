<?php
class FrmPlusStaticController{
	public function __construct(){
		add_action( 'frmplus_register_types', array( &$this, 'register_type' ) );
	}
	
	function register_type(){
		FrmPlusFieldsHelper::register_type( array( 
			'type' => 'static',
			'has_options' => true,
			'options_callback' => array( &$this, 'options_callback' ),
			'render_callback' => array( &$this, 'render_callback' )
		));
	}
	
	public function massageOptions( $options ){
		if ( !isset( $options['text'] ) ){
			$options['text'] = '';
		}
		return $options;
	}
	
	public function options_callback( $options, $field, $opt_key ){
		$options = $this->massageOptions( $options );
		$id = "static-options-" . substr( md5( time() ), 0, 5 ); // random id for the DOM element
?>
<div id="<?php echo $id; ?>">
	<div class="section">
		<label><?php _e( 'Text', FRMPLUS_PLUGIN_NAME ); ?>: </label>
		<span class="frm_help frm_icon_font frm_tooltip_icon" title="<?php echo esc_attr( __( 'The readonly string to insert into the table', FRMPLUS_PLUGIN_NAME ) ); ?>"></span>
		<input type="text" name="frmplus_options[text]" value="<?php echo esc_attr($options['text']); ?>" >
	</div>
</div>
	<?php
	}

	public function render_callback( $args ){
				
		extract( $args );
		$options = $this->massageOptions( $options );

		echo "<input type=\"text\" readonly name=\"{$this_field_name}[$col_num]\" id=\"$this_field_id\" value=\"" . esc_attr( $options['text'] ) . "\" class=\"auto_width table-cell readonly incrementer\"/>";
	}	
	
}

new FrmPlusStaticController();
	
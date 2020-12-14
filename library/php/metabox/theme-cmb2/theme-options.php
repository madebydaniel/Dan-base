<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class theme_Admin {

	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'theme_options';

	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'theme_global_metabox';

	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';

	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';

	/**
	 * Constructor
	 * @since 0.1.0
	 */
	public function __construct() {
		// Set our title
		$this->title = __( 'Theme Content', 'theme' );
	}

	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
	}


	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}

	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );

		// Include CMB CSS in the head to avoid FOUT
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}

	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}

	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {

		$cmb = new_cmb2_box( array(
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );

		// Set our CMB2 fields


		$cmb->add_field( array(
		    'name' => 'Annoucement',
		    'desc' => 'The ANNOUNCEMENT COPY bar must be filled out to show the announcement, if it is empty, then the announcement bar will not show. The ANNOUCEMENT LINK URL and BUTTON COPY are optional.',
		    'type' => 'title',
		    'id'   => 'announcement_content'
		) );


		$cmb->add_field( array(
			'name' => __( 'Announcement Copy', 'theme' ),
			'id'   => 'announcement_copy',
			'type' => 'text',
			'default' => '',
		) );
		$cmb->add_field( array(
			'name' => __( 'Announcement URL', 'theme' ),
			'id'   => 'announcement_url',
			'type' => 'text',
			'default' => '',
		) );
		$cmb->add_field( array(
			'name' => __( 'Announcement Button Copy', 'theme' ),
			'id'   => 'announcement_btn',
			'type' => 'text',
			'default' => '',
		) );





		$cmb->add_field( array(
		    'name' => 'Blog Top Of Page Content',
		    'desc' => 'This content will show on the blog post pages',
		    'type' => 'title',
		    'id'   => 'blog_top_content'
		) );


		$cmb->add_field( array(
			'name' => __( 'Page Tite', 'theme' ),
			'id'   => 'blog_top_title',
			'type' => 'text',
			'default' => 'title goes here',
		) );
		$cmb->add_field( array(
			'name' => __( 'Page Description', 'theme' ),
			'id'   => 'blog_top_description',
			'type' => 'textarea',
			'default' => 'description goes here',
		) );






		$cmb->add_field( array(
		    'name' => 'Guides',
		    'desc' => 'These guides will show on the main blog page only. Guides displaying anywhere else are built using editor blocks',
		    'type' => 'title',
		    'id'   => 'guides'
		) );

		$cmb->add_field( array(
			'name' => __( '1.) Guide – Image', 'theme' ),
			'id'   => 'guide_image_one',
			'type' => 'file',
			'default' => '/wp-content/uploads/2018/08/site-search-guide.jpg',
		) );
		$cmb->add_field( array(
			'name' => __( '1.) Guide – URL', 'theme' ),
			'id'   => 'guide_url_one',
			'type' => 'text',
			'default' => '/ecommerce-site-search-guide',
		) );
		$cmb->add_field( array(
			'name' => __( '1.) Guide – Title', 'theme' ),
			'id'   => 'guide_title_one',
			'type' => 'text',
			'default' => 'The Ultimate Ecommerce Site Search Guide',
		) );
		$cmb->add_field( array(
			'name' => __( '1.) Guide – Rollover/Hover Title Text', 'theme' ),
			'id'   => 'guide_hover_title_one',
			'type' => 'text',
			'default' => 'Site Search',
		) );
		$cmb->add_field( array(
			'name' => __( '1.) Guide – Excerpt', 'theme' ),
			'id'   => 'guide_excerpt_one',
			'type' => 'textarea_small',
			'default' => '-',
		) );
		$cmb->add_field( array(
			'name' => __( '1.) Guide – Rollover/Hover CTA Text', 'theme' ),
			'id'   => 'guide_hover_cta_one',
			'type' => 'text',
			'default' => 'Read this guide',
		) );
		$cmb->add_field( array(
			'name' => __( '1.) Resource Type', 'theme' ),
			'id'   => 'guide_resource_type_one',
			'type' => 'text',
		) );


		$cmb->add_field( array(
			'name' => __( '2.) Guide – Image', 'theme' ),
			'id'   => 'guide_image_two',
			'type' => 'file',
			'default' => '/wp-content/uploads/2018/08/ecommerce-merchandising-guide.jpg',
		) );
		$cmb->add_field( array(
			'name' => __( '2.) Guide – URL', 'theme' ),
			'id'   => 'guide_url_two',
			'type' => 'text',
			'default' => '/experts-guide-to-ecommerce-merchandising',
		) );
		$cmb->add_field( array(
			'name' => __( '2.) Guide – Title', 'theme' ),
			'id'   => 'guide_title_two',
			'type' => 'text',
			'default' => 'How The Experts Are Merchandising',
		) );
		$cmb->add_field( array(
			'name' => __( '2.) Guide – Rollover/Hover Title Text', 'theme' ),
			'id'   => 'guide_hover_title_two',
			'type' => 'text',
			'default' => 'Merchandising',
		) );
		$cmb->add_field( array(
			'name' => __( '2.) Guide – Excerpt', 'theme' ),
			'id'   => 'guide_excerpt_two',
			'type' => 'textarea_small',
			'default' => '-',
		) );
		$cmb->add_field( array(
			'name' => __( '2.) Guide – Rollover/Hover CTA Text', 'theme' ),
			'id'   => 'guide_hover_cta_two',
			'type' => 'text',
			'default' => 'Read this guide',
		) );
		$cmb->add_field( array(
			'name' => __( '2.) Resource Type', 'theme' ),
			'id'   => 'guide_resource_type_two',
			'type' => 'text',
		) );


		$cmb->add_field( array(
			'name' => __( '3.) Guide – Image', 'theme' ),
			'id'   => 'guide_image_three',
			'type' => 'file',
			'default' => '/wp-content/uploads/2018/08/pick-site-search-provider.jpg',
		) );
		$cmb->add_field( array(
			'name' => __( '3.) Guide – URL', 'theme' ),
			'id'   => 'guide_url_three',
			'type' => 'text',
			'default' => '/know-picking-next-site-search-provider.html',
		) );
		$cmb->add_field( array(
			'name' => __( '3.) Guide – Title', 'theme' ),
			'id'   => 'guide_title_three',
			'type' => 'text',
			'default' => 'What You Should Know Before Choosing A 3rd Party Provider',
		) );
		$cmb->add_field( array(
			'name' => __( '3.) Guide – Rollover/Hover Title Text', 'theme' ),
			'id'   => 'guide_hover_title_three',
			'type' => 'text',
			'default' => 'Avoid The Pitfalls',
		) );
		$cmb->add_field( array(
			'name' => __( '3.) Guide – Excerpt', 'theme' ),
			'id'   => 'guide_excerpt_three',
			'type' => 'textarea_small',
			'default' => '-',
		) );
		$cmb->add_field( array(
			'name' => __( '3.) Guide – Rollover/Hover CTA Text', 'theme' ),
			'id'   => 'guide_hover_cta_three',
			'type' => 'text',
			'default' => 'Read this guide',
		) );
		$cmb->add_field( array(
			'name' => __( '3.) Resource Type', 'theme' ),
			'id'   => 'guide_resource_type_three',
			'type' => 'text',
		) );


		$cmb->add_field( array(
			'name' => __( '4.) Guide/Resource – Image', 'theme' ),
			'id'   => 'guide_image_four',
			'type' => 'file',
		) );
		$cmb->add_field( array(
			'name' => __( '4.) Guide/Resource – URL', 'theme' ),
			'id'   => 'guide_url_four',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( '4.) Guide/Resource – Title', 'theme' ),
			'id'   => 'guide_title_four',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( '4.) Guide/Resource – Rollover/Hover Title Text', 'theme' ),
			'id'   => 'guide_hover_title_four',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( '4.) Guide/Resource – Excerpt', 'theme' ),
			'id'   => 'guide_excerpt_four',
			'type' => 'textarea_small',
		) );
		$cmb->add_field( array(
			'name' => __( '4.) Guide/Resource – Rollover/Hover CTA Text', 'theme' ),
			'id'   => 'guide_hover_cta_four',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( '4.) Resource Type', 'theme' ),
			'id'   => 'guide_resource_type_four',
			'type' => 'text',
		) );





		$cmb->add_field( array(
		    'name' => 'Client Logos',
		    'desc' => 'This is where you control which logos show up across the site, with the exception of the home page. Homepage logos are done with editor blocks',
		    'type' => 'title',
		    'id'   => 'clients'
		) );

		$cmb->add_field( array(
			'name' => __( 'Client Logos', 'theme' ),
			'id'   => 'client_logos',
			'type' => 'file_list',
			'default' => '',
		) );





		$cmb->add_field( array(
		    'name' => 'G2 Review Panel',
		    'desc' => 'This is where you control the review panel content for every resource page. All other pages that display a review panel are doing so with editor blocks',
		    'type' => 'title',
		    'id'   => 'g2review'
		) );

		$cmb->add_field( array(
			'name' => __( 'G2 Logo', 'theme' ),
			'id'   => 'g2_logo',
			'type' => 'file',
			'default' => '/wp-content/uploads/2018/04/logo-g2crowd.png',
		) );
		$cmb->add_field( array(
			'name' => __( 'G2 Logo', 'theme' ),
			'id'   => 'g2_rating',
			'type' => 'text',
			'default' => 'Average 4.8 Rating on G2Crowd',
		) );
		$cmb->add_field( array(
			'name' => __( 'Stars', 'theme' ),
			'id'   => 'g2_stars',
			'type' => 'file',
			'default' => '/wp-content/uploads/2018/04/star-4-half.png',
		) );
		$cmb->add_field( array(
			'name' => __( 'CTA Copy', 'theme' ),
			'id'   => 'g2_cta',
			'type' => 'text',
			'default' => 'SEE WHAT OTHERS HAVE TO SAY',
		) );
		$cmb->add_field( array(
			'name' => __( 'CTA URL', 'theme' ),
			'id'   => 'g2_url',
			'type' => 'text',
			'default' => 'https://www.g2crowd.com/products/searchspring/reviews',
		) );
		$cmb->add_field( array(
			'name' => __( 'Badges', 'theme' ),
			'id'   => 'g2_badges',
			'type' => 'file',
			'default' => '/wp-content/uploads/2018/12/g2-badges.png',
		) );

	}

	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}

		throw new Exception( 'Invalid property: ' . $field );
	}

}

/**
 * Helper function to get/return the theme_Admin object
 * @since  0.1.0
 * @return theme_Admin object
 */
function theme_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new theme_Admin();
		$object->hooks();
	}

	return $object;
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function theme_get_option( $key = '' ) {
	return cmb2_get_option( theme_admin()->key, $key );
}

// Get it started
theme_admin();

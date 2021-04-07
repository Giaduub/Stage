<?php 

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Projet'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les projets'),
		'view_item'           => __( 'Voir les projets'),
		'add_new_item'        => __( 'Ajouter un nouveau projet'),
		'add_new'             => __( 'Ajouter un projet'),
		'edit_item'           => __( 'Editer le projet'),
		'update_item'         => __( 'Modifier le projet'),
		'search_items'        => __( 'Rechercher un projet'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Projets'),
		'description'         => __( 'Tous sur projets'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'slug', 'comments', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'projet'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "portfolio" et ses arguments
	register_post_type( 'projet', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );



function wpc_theme_support() {
    add_theme_support('custom-logo', array(
    'flex-height' => true,
    'flex-width' => true,
    ));
    }
    add_action('after_setup_theme','wpc_theme_support');

// on créé une zone pour le menu 
register_nav_menu( 'menuheader', 'Menu du Header' );
register_nav_menu( 'menufooter', 'Menu du Footer' );

// on créé une zone pour le menu 
register_nav_menu( 'menuheader', 'Menu du Header' );
register_nav_menu( 'menufooter', 'Menu du Footer' );


function header_widgets_init() {
 
register_sidebar( array(

 'name' => 'Ma zone que je viens de créer',
 'id' => 'nouvelle-zone',
 'before_widget' => '<div class="mettez-ce-que-vous-voulez">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="mettez-ce-que-vous-voulez">',
 'after_title' => '</h2>',
 ) );
 
 
register_sidebar( array(

 'name' => 'Ma zone que je viens de créer 2',
 'id' => 'nouvelle-zone-2',
 'before_widget' => '<div class="mettez-ce-que-vous-voulez">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="mettez-ce-que-vous-voulez">',
 'after_title' => '</h2>',
 ) );
 
 }

add_action( 'widgets_init', 'header_widgets_init' );


//‘name’ = nom de la “widget area” qui apparaîtra dans votre administration WordPress
//‘id’ = identifiant unique de votre “widget area”
//‘before_widget’ = choisir une balise HTML à ouvrir avant votre widget (<div>, <li> etc…) et profitez-en pour y ajouter une classe qui pourra vous aider lors de la customisation CSS (étape 5)
//‘after_widget’ = fermer la balise (</div>, </li> etc…)
//‘before_title’ = choisir une balise pour le titre du widget (<h2>, <h3>, <h4> etc…) et, comme pour le ‘before_widget’, ajoutez une classe pour agir en CSS ultérieurement
//‘after_title’ = fermer la balise du titre (</h2>, </h3>, </h4> etc…)
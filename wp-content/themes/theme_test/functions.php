<?php

add_theme_support( 'post-thumbnails' );

function create_posttype() {
    $label = [
        'name' => __('Anúncios' ),
        'singular_name'         => __('Anúncio' ),
        'add_new_item'          => __('Adicionar novo anúncio'),
        'all_items'             => __('Todos os anúncios'),
        'view_item'             => __('Ver anúncio'),
        'edit_item'             => __('Editar anúncio'),
        'update_item'           => __('Atualizar anúncio'), 
        'search_items'          => __('Procurar anúncio'),
        'not_found'             => __('Nenhum anúncio encontrado'),
        'not_found_in_trash'    => __('Nenhum anúncio na lixeira'),
    ];

    $args = [
        'label'         => __('Anúncios' ),
        'labels'        => $labels,
        'supports'      => ['title', 'editor', 'thumbnail'],
        'taxonomies'    => ['post_tag'],
        'hierarquical'  => false,
        'public'        => true,
        'rewrite'       => ['slug' => 'anuncio'],
        'has_archive'   => true,
    ];
    register_post_type( 'adverts', $args);
}
add_action( 'init', 'create_posttype' );
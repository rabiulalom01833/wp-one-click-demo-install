<?php
function ocdi_import_files() {
    return [
      [
        'import_file_name'             => 'Demo Import',
        'categories'                   => [ 'Business Website', ],
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/content.xml',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/content.dat',
         
          
      ],
     
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );
  
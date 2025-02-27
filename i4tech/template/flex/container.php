<?php $flex = get_field('flex');
if (have_rows('flex')):

    while (have_rows('flex')) : the_row();
        if (get_row_layout() == 'position'):

            get_template_part('template/flex/components/position');

        elseif (get_row_layout() == 'tekst_z_obrazkiem_po_prawej'):

            get_template_part('template/flex/components/right');

        elseif (get_row_layout() == 'gallery'):

            get_template_part('template/flex/components/gallery');

        elseif (get_row_layout() == 'customers'):

            get_template_part('template/flex/components/customers');

        elseif (get_row_layout() == 'icons'):

            get_template_part('template/flex/components/icons');

        elseif (get_row_layout() == 'full'):

            get_template_part('template/flex/components/full');

        endif;
    endwhile;
endif;

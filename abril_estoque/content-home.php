<div class="container">
    <div class="row magin-topo60">
        <div class="col-xs-12">
            <h2>Estoque</h2>
            <?php
            $estoqueProdutos = new WP_Query(array(
                'post_type' => 'produto',
                'posts_per_pages' => -1
            ));

            //
            ?>
            <table class="table table-responsive table-bordered table-hover magin-topo40 table-striped">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
                <?php while( $estoqueProdutos->have_posts() ): $estoqueProdutos->the_post(); ?>
                    <tr>
                        <td><?php echo get_the_title() ?></td>
                        <td><?php echo get_field('produto_quantidade'); ?></td>                        
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
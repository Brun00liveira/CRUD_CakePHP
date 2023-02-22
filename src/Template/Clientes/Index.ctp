<style>
    .link a{
        color:white;
    }
    a{
        padding: 1px 5px;
        color: #ffc107;
    }
</style>
<section>
    <div class="container mt-4">
        <div class="format-control">
        <?php echo $this->Html->link('Novo cliente',['action'=>'add'], ['class'=> 'btn btn-warning color-dark mb-2']);?>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="link">
                        <th scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
                        <th scope="col"><?php echo $this->Paginator->sort('nome'); ?></th>
                        <th scope="col"><?php echo $this->Paginator->sort('data_de_nascimento'); ?></th>
                        <th scope="col">Profissão   </th>
                        <th scope="col">Ver</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($clientes as $cliente):?> 
                    <tr>
                        <th scope="row"><?php echo $cliente->id?></th>
                        <td><?php echo $cliente->nome?></td>
                        <td style="padding-left:50px;"><?php echo $cliente->data_de_nascimento?></td>
                        <td><?php echo $cliente->profisso ? $cliente->profisso->profissao : ''?></td>
                        
                        <td>
                            <?php echo $this->html->link('Ver', ['action'=>'view', $cliente->id], ['class' =>'btn btn-info color-dark']);?>
                        </td>
                        <td>
                            <?php echo $this->html->link('Editar', ['action'=>'edit', $cliente->id], ['class' =>'btn btn-success color-dark']);?>
                        </td>
                        <td>
                            <?php echo $this->Form->postLink('Deletar', ['action'=>'delete', $cliente->id], ['class' =>'btn btn-danger color-dark']);?>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <div class="paginator ">
                <ul class="pagination d-flex justify-content-center">
                    
                    <?php echo $this->Paginator->prev('< '. __('Anterior')); ?>
                    <?php echo $this->Paginator->numbers(); ?>
                    <?php echo $this->Paginator->next( __('Próximo') . ' >'); ?>
                    
                </ul>
                <div class="paginator d-flex justify-content-end">
                    <?php echo $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?>
                </div>
            </div>
        </div>
    </div>
</section>